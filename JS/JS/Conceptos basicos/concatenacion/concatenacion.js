class texto {
    constructor() {
        this.mostrar = document.getElementById("mostrar")
        this.mensaje = document.getElementById("mensaje")
    }
    accion() {
        this.numero = document.getElementById("numero").value
        this.cadena = document.getElementById("cadena").value
        this.hora = document.getElementById("hora").value
        this.signo1 = document.getElementById("signo1").value
        this.signo2 = document.getElementById("signo2").value
        this.mostrar.innerHTML = " "
        if (this.signo1 == "+" && this.signo2 == "+") {
            this.mostrar.innerHTML = "Datos concatenados : " + this.numero + " " + this.cadena + " " + this.hora;
            mostrar_texto.validar()
        }
        else {
            alert("Uso incorrecto del signo")
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