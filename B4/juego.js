function getMousePos(canvas, event) { 
    var rect = canvas.getBoundingClientRect();
    return {
        x: event.clientX - rect.left, 
        y: event.clientY - rect.top 
    };
}

function dibuja(context, coors) {
    context.fillStyle = "rgba(2, 16, 51, 1)";
    context.fillRect(coors.x, coors.y, Math.random() * 20, Math.random() * 20);
}


function activate(){
    var canvas = document.querySelector("#game");
    var context = canvas.getContext("2d"); // ¿getContext ya existe de por sí, no????
    canvas.addEventListener("click", (evt) => { //Entindo que "click" ya existe de forma definida, no???
        coors = getMousePos(canvas, evt); // ¿Como sé de dónde se saca evt? ¿ Es pk "click" permite un parámtro de evento????
        dibuja(context, coors);
    });
}


activate();