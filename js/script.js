//
const fillings  = document.querySelectorAll('.filling ');
const empties = document.querySelectorAll('.empty');
const checkBttn = document.getElementById("check");
let filling;


for(const filling of fillings){
    filling.addEventListener('dragstart', dragStart);
    filling.addEventListener('dragend',dragEnd);
}

for(const empty of empties){
    empty.addEventListener('dragover',dragOver);
    empty.addEventListener('dragenter',dragEnter);
    empty.addEventListener('dragleave',dragLeave);
    empty.addEventListener('drop',dragDrop);
}

checkBttn.addEventListener("click", function() {
    // For para iterar por sobre los primeros 3 empties.
    for (let index = 0; index < 3; index++) {
        // Se obtiene el empty de cada iteración
        const empty = empties[index];
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


function dragStart(){
    filling = this;
    this.className += ' hold';
    setTimeout(() => this.className = 'invisible',0);
}

function dragEnd(){
    this.className = 'filling';
}

function dragOver(e){
    console.log("over");
    e.preventDefault();
 
}

function dragEnter(e){
    console.log("enter");
    this.className += ' hovered';
}

function dragLeave(){
    console.log("leave");
    this.className = 'empty';
    
}

function dragDrop(){
    this.className = 'empty';
    let isEmpty = this.children.length == 0;
    if (isEmpty) {
        this.append(filling);
    }
}

