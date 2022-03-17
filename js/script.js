const fillings  = document.querySelectorAll('.filling ');
const empties = document.querySelectorAll('.empty');
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

