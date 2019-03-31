
function soloLetras(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnopqrstuvwxyz";
    especiales = "8-37-39-46-164";

    teclado_especial = false;

    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(teclado) == -1 && !teclado_especial)
        return false;
}

function limpia() {
    var val = document.getElementById("txtUsuario").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("txtUsuario").value = '';
    }
}


function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key);
    numero = "0123456789";

    esp = "8-37-38-46";

    tec_esp = false;

    for (var i in esp) {
        if (key == esp[i]){
            tec_esp = true;
        }
    }
    if (numero.indexOf(tecla) == -1 && !tec_esp){
        return false;
    }
}
