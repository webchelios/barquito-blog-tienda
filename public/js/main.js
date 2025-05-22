document.querySelectorAll('.texto-blog').forEach(textoBlog => {
    // Expresión regular: Uno o mas espacios de cualquier tipo
    const palabras = textoBlog.textContent.trim().split(/\s+/);
    const palabrasRecortadas = palabras.slice(0, 20);
  
    textoBlog.textContent = palabrasRecortadas.join(' ') + (palabras.length > 20 ? '...' : '');
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