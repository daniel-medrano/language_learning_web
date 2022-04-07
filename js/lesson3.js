const items = document.querySelectorAll(".item");

check = () => {
    let answers = {};

    for (const item of items) {
        let color = item.children[0];
        let select = item.children[1];
        let userAnswer = select.value;
        let answer = color.classList[1];
        answers[answer] = userAnswer == answer ? true : false;
    }
} 



