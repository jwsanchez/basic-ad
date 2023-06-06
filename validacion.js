const nombre = document.getElementById("nombre")
const email = document.getElementById("email")
const celular = document.getElementById("celular")
const mensaje = document.getElementById("mensaje")
const form = document.getElementById("form")
const parrafo = document.getElementById("war")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let war = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/

    if(nombre.value.length <6){
        war += `Nombre invalido <br>`
        entrar=true
    }
    if(!regexEmail.test(email.value)){
        war += `El email no es valido <br>`
        entrar=true
    }
    if(celular.value.length <10){
        war += `Número invalido, debe tener al menos 10 caracteres <br>`
        entrar=true
    }

    if(!mensaje.value){
        war += `Debe enviar algun mensaje <br>`
        entrar=true
    }

    if(entrar){
        parrafo.innerHTML = war
    }else{
        alert("Requerimiento enviado")
        location.reload()
    }
})
s
