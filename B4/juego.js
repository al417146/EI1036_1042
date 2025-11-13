function getMousePos(canvas, event) { 
    var rect = canvas.getBoundingClientRect();
    return {
        x: event.clientX - rect.left, 
        y: event.clientY - rect.top 
    };
}

function dibujaSiNoHaChocado(context, coors, num1, num2) {
    context.fillStyle = "rgba(2, 16, 51, 1)";
    context.fillRect(coors.x, coors.y, num1, num2);
}


function dibujaSiHaChocado(context, coors,num1, num2) {
    context.fillStyle = "rgba(30, 0, 255, 1)";
    context.fillRect(coors.x, coors.y, num1, num2);
}

function activate(){
    var canvas = document.querySelector("#game");
    var context = canvas.getContext("2d"); // ¿getContext ya existe de por sí, no???? ---> SIIII
    var arrays_pos = new Array();
    canvas.addEventListener("click", (evt) => { //Entindo que "click" ya existe de forma definida, no??? --> SIII
        coors = getMousePos(canvas, evt);
        var num1 = Math.random() * 20;
        var num2 = Math.random() * 20;
        var posAux = new Array(coors.x, coors.y ,coors.x + num1, coors.y + num2);
        
        for (let i of arrays_pos) {

            if (coors.x + num1 < i[0] || coors.y + num2 < i[1]) { //izq
                 dibujaSiNoHaChocado(context, coors, num1, num2);
            }
            if (coors.x > i[2] || coors.y > i[3]) { //derecha
                 dibujaSiNoHaChocado(context, coors, num1, num2);
            }
            if ((coors.x > i[0] || coors.y > i[1]) && (coors.x + num1 > i[0] && coors.y + num2 > i[1])) {
                dibujaSiHaChocado(context, coors, num1, num2);
            }

            /*if (i[2] < coors.x && i[3] < coors.y) { //Está a la derecha (el mínimo es mayor que el máximo)
                dibujaSiHaChocado(context, coors, num1, num2);
            }
            if (i[0] < coors.x + num1 && i[1] < coors.y + num2)  {
                dibujaSiHaChocado(context, coors, num1, num2);
            }*/
        }
        if (arrays_pos.length == 0) {
            dibujaSiNoHaChocado(context, coors, num1, num2);
        }
        arrays_pos.push(posAux);
        console.log(arrays_pos);
        
    });
}




activate();