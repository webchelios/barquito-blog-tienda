document.querySelectorAll('.texto-blog').forEach(textoBlog => {
    let texto = textoBlog.textContent;
    let textoRecortado = texto;
    
    if(texto.length > 200){
        textoRecortado = texto.substring(0, 200) + "...";
    }
    
    textoBlog.textContent = textoRecortado;
});

document.querySelectorAll('.eliminar-form').forEach(form => {
    form.addEventListener('submit', function(ev) {
        ev.preventDefault()
        let modalVentana = document.querySelector('.modal-ventana');
        modalVentana.style.display = "block";

        let modalBoton = document.querySelector('.modal-boton');
        modalBoton.addEventListener('click', e =>{
            form.submit();
        });
        
        let cancelarBoton = document.querySelector('.cancelar');
        cancelarBoton.addEventListener('click', e =>{
            modalVentana.style.display = "none";
        })

        
    })

})