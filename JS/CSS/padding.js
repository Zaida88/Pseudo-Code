const update= () => {
    const text = document.querySelector("#text")
    const view = document.querySelector("#view")
    view.srcdoc = text.value
}
class texto{
    constructor(){
        const text = document.querySelector("#text")
        const view = document.querySelector("#view")
        this.a=["<style>","</style>"]
        this.b
        this.c
        this.mensaje=document.getElementById("mensaje")
    }
    accion(){
        this.view.innerHTML= " "
        this.b=this.text.value.split(" ")
        this.c=this.b.length
        if(this.b[1]==this.a[1]){
            mostrar_texto.validar()
        }
        else{
            alert("Codigo incorrecto")
            mostrar_texto.inicio()
        }
    }

    validar(){
        this.mensaje.style.display="block"
    }

    inicio(){
        this.mensaje.style.display="none"
    }
}


let mostrar_texto=new texto()
window.onload=mostrar_texto.inicio()