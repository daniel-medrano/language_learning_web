const cards = document.querySelectorAll(".card");
const restartBttn = document.getElementById("restart");
const attempts = document.getElementById("attempts");
const failedAttempts = document.getElementById("failed-attempts");

let gamePaused = false;
let firstCard = null;
let secondCard = null;

let cardsDisabled = [];
let numAttempts = 0;
let numFailedAttempts = 0;

// POP-UP
const closeModalButton = document.querySelector("#close-button");
const overlay = document.getElementById("overlay");
const popup = document.querySelector("#popup");


function isFirstCardFlipped() {
    return firstCard != null;
}

function areTheSame(firstCard, secondCard) {
    return firstCard.id == secondCard.id;
}

function flipCard() {
    if (gamePaused)
        return;
    // Si la primera carta no ha sido volteada
    if (!isFirstCardFlipped()) {
        firstCard = this;
        this.classList.add("flipped");
        return;
    } 
    if (!areTheSame(firstCard, this)) {
        secondCard = this;
        this.classList.add("flipped");
        compareCards();
    }
}

function disableCards() {
    cardsDisabled.push(firstCard, secondCard);
    firstCard.removeEventListener("click", flipCard);
    secondCard.removeEventListener("click", flipCard);
    resetPair();
}

function unflipCards() {
    gamePaused = true;
    // Toma 1.1 segundos el volver a voltear las cartas.
    setTimeout(function() {
        firstCard.classList.remove("flipped");
        secondCard.classList.remove("flipped");
        resetPair();
    }, 1100);
}

function isGameWon() {
    setTimeout(() => {
        let isGameWon = cardsDisabled.length == cards.length;
        if (isGameWon) {
            openPopup(popup);
        }
    }, 550);
}

function increaseAttempts() {
    numAttempts++;
    attempts.innerText = numAttempts;
}

function increaseFailedAttempts() {
    numFailedAttempts++;
    failedAttempts.innerText = numFailedAttempts;
}

function compareCards() {
    let matched = firstCard.id.slice(-1) == secondCard.id.slice(-1);

    if (matched) {
        increaseAttempts();
        disableCards();
        isGameWon();
    } else {
        increaseAttempts();
        increaseFailedAttempts();
        unflipCards();
    }
}

function resetPair() {
    firstCard = null;
    secondCard = null;
    gamePaused = null;
}

function resetStats() {
    numAttempts = 0;
    numFailedAttempts = 0;
    attempts.innerText = numAttempts;
    failedAttempts.innerText = numFailedAttempts;
}

function disorderCards() {
    cards.forEach(card => {
        let position = Math.round(Math.random() * 12);
        card.style.order = position;
    });
}

function unflipAllCards() {
    cards.forEach(card => {
        let isFlipped = card.classList.contains("flipped");
        if (isFlipped) {
            card.classList.remove("flipped");
        }
    });
}

function enableCards() {
    cardsDisabled.forEach(card => card.addEventListener("click", flipCard));
    cardsDisabled = [];
}

function restartGame() {
    unflipAllCards();
    enableCards();
    disorderCards();
    resetPair();
    resetStats();
}

// POP-UP Functions

function openPopup(popup) {
    if (popup == null) {
        return
    }
    popup.classList.add("active");
    overlay.classList.add("active");
}

function closePopup(popup) {
    if (popup == null) {
        return
    }
    popup.classList.remove("active");
    overlay.classList.remove("active");
}

overlay.addEventListener("click", function() {
    closePopup(popup);
});

closeModalButton.addEventListener("click", function() {
    closePopup(popup);
});



cards.forEach(card => card.addEventListener("click", flipCard));
restartBttn.addEventListener("click", restartGame);

disorderCards();