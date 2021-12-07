document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {

        /*Estos indicadores se pueden editar de acuerdo al gusto del carrucel*/

        duaration: 300,
        /*Esta duracion es para poner lento o rapido la transicion de las imagenes*/
        dist: -70,
        shift: 5,
        padding: 5,
        /*La distancia entre cada una de las imagenes a los costados*/
        numVisible: 4,
        /*cuantas imagenes se quiere mostrar en la pag*/
        indicators: true,
        /*puntos debajo de la imagen que nos dirigen hacia donde ir */
        noWrap: false,
        /*lo que realiza esto es marcar un vacio de partida y uno de terminacion*/
    });
});