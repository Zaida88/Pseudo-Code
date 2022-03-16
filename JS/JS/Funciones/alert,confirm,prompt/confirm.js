class texto {
    constructor() {
        this.mostrar = document.getElementById("mostrar")
        this.mensaje = document.getElementById("mensaje")
    }
    accion() {
        this.pregunta = document.getElementById("pregunta").value
        this.mensaje1 = document.getElementById("mensaje1").value
        this.mensaje2 = document.getElementById("mensaje2").value
        this.mostrar.innerHTML = " "
        if (this.pregunta === "" || this.mensaje1 === "" || this.mensaje2 === "") {
            alert("Falta el ingreso de datos")
            mostrar_texto.inicio()
        }
        else {
            this.resultado = confirm(this.pregunta);
            if (this.resultado == true) {
                alert(this.mensaje1);
            }
            else {
                alert(this.mensaje2);
            }
            mostrar_texto.validar()
        }
    }

    validar() {
        this.mensaje.style.display = "block"
    }

    inicio() {
        this.mensaje.style.display = "none"
    }
}


let mostrar_texto = new texto()
window.onload = mostrar_texto.inicio()