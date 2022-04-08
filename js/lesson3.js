const items = document.querySelectorAll(".item");
const checkButton = document.querySelector("#check");

check = () => {
    for (const item of items) {
        let color = item.children[0];
        let select = item.children[1];
        // Se obtiene la respuesta del usuario del select.
        let userAnswer = select.value;
        // Se obtiene el color del circulo que se encuentra en el div ".item".
        let answer = color.classList[1];
        // Se setea como item en caso de que se haya hecho check antes.
        item.className = "item";
        // Se valida la respuesta del usuario con la respuesta real.
        if (userAnswer == answer) {
            item.classList.add("correct");
        } else {
            item.classList.add("incorrect");
        }
    }
} 

checkButton.addEventListener("click", check);




