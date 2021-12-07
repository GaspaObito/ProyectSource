
function autocompletar(arreglo)/*arreglo*/ {          //SE CREA LA FUNCION autocomopletar CON EL PARAMETRO  arreglo
    const inputMascota = document.querySelector('#tipo-mascota');
    let indexfocus = -1;

//**************************EVENTO INPUT******************************************************************************************************************************************************************* */
    
inputMascota.addEventListener('input', function(){  //Se agrega al inputMascota un evento , esto es para que cambie las sugerencias del input
       const tipoMascota = this.value;                  // Se crea la constante tipoMascota ,  this hace referencia a input Mascota que es el objeto que se esta modificando internamente
       if (!tipoMascota) return false;
       cerrarLista();                    //Esta funcion permite cerrar la lista de sugerencias en el momento de leccionar o dar click en alguna

       //Crear la lista de sugerencias...........................................................................................
      const divList = document.createElement('div');         //Se crea la constante divList , asi se crea la primera capa
      divList.setAttribute('id',this.id + '-lista-autocompletar');
      divList.setAttribute('class','lista-autocompletar-items');
      this.parentNode.appendChild(divList);

      //Conexion a base de datos BD...............................................................................................
      httpRequest('controller.php?tipo-mascota=' + tipoMascota, function(){
           // console.log(this.responseText);
           const arreglo = JSON.parse(this.responseText);   
           //console.log(arreglo);          //Para ver si si se convirtieron los datos en un arreglo , esto se ve en la consola
            
        //Validar arreglo vs input...................................................................................................
  //    if(arreglo.length == 0) return false;
  //    arreglo.forEach(item => {                   //Aqui se hace un recorrido por todos los elementos de arreglo
        // console.log(item);                        //Me imprime los datos de arreglo por la consola al teclear el input
        //console.log(item.substr(0, tipoMascota.length));  //Imprime por consola el substring de los elementos de arreglo en (tipoMascota ) es decir , el input 
  //     if (item.substr(0, tipoMascota.length) == tipoMascota) {   //Esto es para comparar el string del input con los datos del arreglo , substr hace que se obtenga un string de otro original , es una validacion que trata de que si el substring es parecido a tipoMascota muestre los semejantes
        //  console.log(item);  //Me imprime los datos que se parezcan a los elementos de arreglo , son los substring       
  //     const elementoLista = document.createElement('div');  //Se crea la constante elementoLista , asi se crea la segunda capa
  //    elementoLista.innerHTML = `<strong>${item.substr(0,tipoMascota.length)}</strong>${item.substr(tipoMascota.length)}`;   //Esto es una Notacion de  template en javascript utilizando un strong donde se esta poniendo el pedazo de substring que estamos obteniendo  
    
      //**************************EVENTO CLICK***************************************************************************************************************************************************************************************************************** */
     
  //  elementoLista.addEventListener('click',function(){   //Se crea este evento con la funcion de poder darle click a la lista de sugerencias y que se autocomplete
  //        inputMascota.value = this.innerText;
  //        cerrarLista();                 //Esta funcion permite cerrar la lista de sugerencias en el momento de leccionar o dar click en alguna
  //        return false;
  //     });
  //     divList.appendChild(elementoLista); //tACHAR ELEMENTO LISTA
  //   }          
  //     });
      });




    //Validar arreglo vs input...................................................................................................
    if(arreglo.length == 0) return false;
      arreglo.forEach(item => {                   //Aqui se hace un recorrido por todos los elementos de arreglo
     // console.log(item);                        //Me imprime los datos de arreglo por la consola al teclear el input
     //console.log(item.substr(0, tipoMascota.length));  //Imprime por consola el substring de los elementos de arreglo en (tipoMascota ) es decir , el input 
    if (item.substr(0, tipoMascota.length) == tipoMascota) {   //Esto es para comparar el string del input con los datos del arreglo , substr hace que se obtenga un string de otro original , es una validacion que trata de que si el substring es parecido a tipoMascota muestre los semejantes
        //  console.log(item);  //Me imprime los datos que se parezcan a los elementos de arreglo , son los substring       
      const elementoLista = document.createElement('div');  //Se crea la constante elementoLista , asi se crea la segunda capa
      elementoLista.innerHTML = `<strong>${item.substr(0,tipoMascota.length)}</strong>${item.substr(tipoMascota.length)}`;   //Esto es una Notacion de  template en javascript utilizando un strong donde se esta poniendo el pedazo de substring que estamos obteniendo  
    
      //**************************EVENTO CLICK***************************************************************************************************************************************************************************************************************** */
     
    elementoLista.addEventListener('click',function(){   //Se crea este evento con la funcion de poder darle click a la lista de sugerencias y que se autocomplete
          inputMascota.value = this.innerText;
         cerrarLista();                 //Esta funcion permite cerrar la lista de sugerencias en el momento de leccionar o dar click en alguna
          return false;
      });
      divList.appendChild(elementoLista); //tACHAR ELEMENTO LISTA
    }          
       });
  });

//**************************EVENTO KEYDOWN***************************************************************************************************************************************************************************************************************** */
    
inputMascota.addEventListener('keydown',function(e){ //Este evento es para utilizar las teclas (keydown) para seleccionar la sugerencia del input
    const divList = document.querySelector('#' + this.id + '-lista-autocompletar');
     let items;

     if (divList) {
         items = divList.querySelectorAll('div');

         switch(e.keyCode) {
            case 40:  //Si se presiona la tecla de abajo ...   
                   indexfocus ++; //Incremente para buscar uno mas , una opcion mas
                   if(indexfocus > items.length-1) indexfocus = items.length -1; //Para que se tenga un limite en el momento de presionar la tecla de abajo
                break;

                case 38: //Si se presiona la tecla de arriba...
                       indexfocus --; //Disminuye , porque no se quiere mostrar mas
                       if(indexfocus > 0) indexfocus = 0;
                    break;

                    case 13: //Si se presiona la tecla de enter ...
                           e.preventDefault(); //preventDefault para que no se me envie el formulario
                           items[indexfocus].click(); //llamamos de los items el indexfocus y le ponemos a ejecutar el metodo click
                            indexfocus = -1;
                           break;

                        default:
                            break;
         }
         seleccionar(items, indexfocus)  //es necesario items porque es la lista de todos los elementos que tengo de sugerencia 
           return false;
        }
  });
  //************************** EVENTO CLICK 2***************************************************************************************************************************************************************************************************************** */
 document.addEventListener('click', function(){
         cerrarLista();
 });

}

function seleccionar(items , indexfocus) {
    if(!items || indexfocus == -1) return false;    //!items Si no existe lista Ó  indexfocus == -1 , entonces retorne false porque no tengo nada que seleccionar
    items.forEach(x => {x.classList.remove('autocompletar-active')});  //Le quito primero a culquier elemento que tenga la clase
    items[indexfocus].classList.add('autocompletar-active'); //Le agrego a cualquier elemento que tenga la clase
}

function cerrarLista() {          //Se define la funcion cerrarLista()
    const items = document.querySelectorAll('.lista-autocompletar-items');  //Se crea la constante items y se define que querySelectorAll se obtienen todos mis elementos sugeridos
    items.forEach(item =>{   //recorrer items ó los elementos...
      item.parentNode.removeChild(item);  //Para eliminarlos o desaparecerlos en el momento de darle click a alguno
    });
    indexfocus = -1; //SE ME RECETEE A -1
}

//FUNCION AJAX
function httpRequest(url, callback) {       //callback es para implementar la informacion donde se considere necesario 
  const http = new XMLHttpRequest();
  http.open("POST", url );
  http.send();

//**************************  UN EVENTO QUE ME AYUDE A MANEJAR EL ESTADO  ***************************************************************************************************************************************************************************************************************** */
  
http.onreadystatechange == function() {
  if(this.readyState == 4 && this.status == 200) {
      callback.apply(http);
    }
  }
}

//autocompletar();
autocompletar(['contactos','asesores','asesorias','consulta','consultorias','tendencias',
'noticias','aprende','aprendizaje','psicologia','pscicologos','entretenimiento','productos','empleo','trabajo']);  //Mandamos a llamar la funcion autocompletar y le ponemos el arreglo