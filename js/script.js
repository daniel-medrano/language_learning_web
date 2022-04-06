//
const fillings  = document.querySelectorAll('.filling ');
const empties = document.querySelectorAll('.empty');
const checkBttn = document.getElementById("check");
let filling;


for (const filling of fillings) {
    filling.addEventListener("dragstart", dragStart);
    filling.addEventListener("dragend", dragEnd);
}

for (const empty of empties) {
    empty.addEventListener("dragover", dragOver);
    empty.addEventListener("dragenter", dragEnter);
    empty.addEventListener("dragleave", dragLeave);
    empty.addEventListener("drop", dragDrop);
}

checkBttn.addEventListener("click", function() {
    // For para iterar por sobre los primeros 3 empties.
    for (let i = 0; i < 3; i++) {
        // Se obtiene el empty de cada iteración
        const empty = empties[i];
        let isEmpty = empty.children == 0;
        if (!isEmpty) {
            const filling = empty.children[0];
            let emptyId = empty.id.split("-")[0];
            let fillingId = filling.id.split("-")[0];

            let isMatch = emptyId == fillingId;

            if (isMatch) {
                filling.className += " correct";
            } else {
                filling.className += " incorrect";

            }
        }
    }
})


function dragStart(e){
    filling = this;
    setTimeout(() => {
        this.className = "invisible";
    }, 0);
}

function dragEnd(){
    this.className = 'filling';
}

function dragOver(e){
    e.preventDefault();
}

function dragEnter(e){
    this.className += ' hovered'; // TO-DO. Añadir css para esto.
}

function dragLeave(){
    this.className = 'empty';
}

function dragDrop(){
    this.className = 'empty';
    let isEmpty = this.children.length == 0; // Verifica que el empty este vacio.
    if (isEmpty) {
        this.append(filling);
    }
}

