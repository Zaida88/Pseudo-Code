class texto{
    constructor(){
        this.etiqueta=document.getElementById("txtCodigo")
        this.mostrar=document.getElementById("mostrar")
        this.a=["var","miVariable",";"]
        this.b
        this.c
        this.mensaje=document.getElementById("mensaje")
    }
    accion(){
        this.mostrar.innerHTML= " "
        this.b=this.etiqueta.value.split(" ")
        this.c=this.b.length
        if(this.b[0]==this.a[0] && this.b[this.c-1]==this.a[2] && this.b[1] == this.a[1]){
            this.sacar=this.etiqueta.value.slice(16,-1)
            this.mostrar.innerHTML="La valor de la variable ingresada es: "+this.sacar
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