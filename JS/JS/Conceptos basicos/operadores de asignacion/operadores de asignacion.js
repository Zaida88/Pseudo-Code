class texto {
    constructor() {
        this.mostrar = document.getElementById("mostrar")
        this.mensaje = document.getElementById("mensaje")
    }
    accion() {
        this.operador = document.getElementById("operador").value
        this.valorx = parseFloat(document.getElementById("valorx").value)
        this.valory = parseFloat(document.getElementById("valory").value)
        this.mostrar.innerHTML = " "
        switch (this.operador) {
            case "=":
                this.valorx = this.valory
                this.mostrar.innerHTML = "valorx = " + this.valorx
                break;
            case "+=":
                this.valorx += this.valory
                this.mostrar.innerHTML = "valorx = " + this.valorx
                break;
            case "-=":
                this.valorx -= this.valory
                this.mostrar.innerHTML = "valorx = " + this.valorx
                break;
            case "*=":
                this.valorx *= this.valory
                this.mostrar.innerHTML = "valorx = " + this.valorx
                break;
            case "/=":
                this.valorx /= this.valory
                this.mostrar.innerHTML = "valorx = " + this.valorx
                break;
            case "%=":
                this.valorx %= this.valory
                this.mostrar.innerHTML = "valorx = " + this.valorx
                break;
            default:
                alert("El operador ingresado no es valido")
                mostrar_texto.inicio()
                break;
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