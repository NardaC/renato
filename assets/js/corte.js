const parrillero = document.getElementById("parrillero")
const bistecsSarten = document.getElementById("bistecs-sarten")
const guisos = document.getElementById("guisos")
const sancochados = document.getElementById("sancochados")
const especiales = document.getElementById("especiales")
const procesados = document.getElementById("procesados")

const btn_parrillero = document.getElementById("btn-parrillero")
const btn_bistecsSarten = document.getElementById("btn-bistecs-sarten")
const btn_guisos = document.getElementById("btn-guisos")
const btn_sancochados = document.getElementById("btn-sancochados")
const btn_especiales = document.getElementById("btn-especiales")
const btn_procesados = document.getElementById("btn-procesados")


btn_bistecsSarten.addEventListener("click", () => {
    if (bistecsSarten.classList.contains("hide")) {
        bistecsSarten.classList.add("show")
        bistecsSarten.classList.remove("hide")
    }
})

btn_parrillero.addEventListener("click", () => {
    if (parrillero.classList.contains("hide")) {
        parrillero.classList.add("show")
        parrillero.classList.remove("hide")
    }
})

btn_guisos.addEventListener("click", () => {
    if (guisos.classList.contains("hide")) {
        guisos.classList.add("show")
        guisos.classList.remove("hide")
    }
})

btn_sancochados.addEventListener("click",()=>{
    if(sancochados.classList.contains("hide")){
        sancochados.classList.add("show")
        sancochados.classList.remove("hide")
    }
   } )

btn_especiales.addEventListener("click",()=>{
    if(especiales.classList.contains("hide")){
        especiales.classList.add("show")
        especiales.classList.remove("hide")
    }
   } )

   btn_procesados.addEventListener("click",()=>{
    if(procesados.classList.contains("hide")){
        procesados.classList.add("show")
        procesados.classList.remove("hide")
    }
   } )