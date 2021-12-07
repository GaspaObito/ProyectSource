const imagenes = document.querySelectorAll('.img-galeria')
const imageneslight =  document.querySelector('.agregar-imagen')
const contenedorlight = document.querySelector('.imagen-light')


imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
         aparecerImagen( imagen.getAttribute('src'))
        })
})

contenedorlight.addEventListener('click', (e)=>{
    console.log(e.target !== imageneslight) 
        contenedorlight.classList.toggle('show')
        imageneslight.classList.toggle('showImage')
        
})

const aparecerImagen = (imagen)=>{
    imageneslight.src = imagen;
    contenedorlight.classList.toggle('show')
    imageneslight.classList.toggle('showImage')
    
}
