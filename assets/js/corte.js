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

btn_parrillero.addEventListener("click", ()=>{
 
     parrillero.classList.toggle("show")
     bistecsSarten.classList.toggle("hide")
     guisos.classList.toggle("hide")
     sancochados.classList.toggle("hide")
     especiales.classList.toggle("hide")
     procesados.classList.toggle("hide")
 
})
btn_bistecsSarten.addEventListener("click", ()=>{
   
        alert("hjskdhkjshdjk")
    
   })

   btn_guisos.addEventListener("click", ()=>{
   
        parrillero.classList.toggle("hide")
        bistecsSarten.classList.toggle("hide")
        guisos.classList.toggle("show")
        sancochados.classList.toggle("hide")
        especiales.classList.toggle("hide")
        procesados.classList.toggle("hide")
    
   })

   btn_sancochados.addEventListener("click", ()=>{
 
        parrillero.classList.toggle("hide")
        bistecsSarten.classList.toggle("hide")
        guisos.classList.toggle("hide")
        sancochados.classList.toggle("show")
        especiales.classList.toggle("hide")
        procesados.classList.toggle("hide")
    
   })

   btn_especiales.addEventListener("click", ()=>{
   
        parrillero.classList.toggle("hide")
        bistecsSarten.classList.toggle("hide")
        guisos.classList.toggle("hide")
        sancochados.classList.toggle("hide")
        especiales.classList.toggle("show")
        procesados.classList.toggle("hide")
    
   })

   btn_procesados.addEventListener("click", ()=>{
   
        parrillero.classList.toggle("hide")
        bistecsSarten.classList.toggle("hide")
        guisos.classList.toggle("hide")
        sancochados.classList.toggle("hide")
        especiales.classList.toggle("hide")
        procesados.classList.toggle("show")
    
   })



