class texto {
    constructor() {
        this.mostrar = document.getElementById("mostrar")
        this.mensaje = document.getElementById("mensaje")
    }
    accion() {
        this.etiqueta = document.getElementById("txtCodigo").value
        this.mostrar.innerHTML = " "
        if (this.etiqueta% 1 == 0 ) {
            alert("Codigo incorrecto")
            mostrar_texto.inicio()
        }
        else if (!isNaN(this.etiqueta)){
            this.mostrar.innerHTML = "El número ingresado es: " + this.etiqueta
            mostrar_texto.validar()
        }
        else{
            alert("Codigo incorrecto")
            mostrar_texto.inicio()
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