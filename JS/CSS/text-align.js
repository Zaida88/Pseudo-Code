class texto{
    constructor(){      
        this.etiqueta=document.getElementById("txtCodigo")
        this.mostrar=document.getElementById("mostrar")
        this.a=[".texto1{", "}"]
        this.b
        this.c
        this.mensaje=document.getElementById("mensaje")
    }
    accion(){
        this.texto=document.getElementById("texto")
        this.b=this.etiqueta.value.split(" ")
        this.c=this.b.length
        console.log(this.b)
         if(this.b[0]==this.a[0] && this.b[this.c-1]==this.a[1]){
             this.texto.style.textAlign = "right";
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