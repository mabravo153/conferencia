
let encabezado4 = document.querySelectorAll('.contenido-dia h4');
encabezado4.forEach(element => element.setAttribute('class', 'encabezado-h4') );
 
let contenido = document.querySelectorAll('.contenido-dia');
contenido.forEach(element => element.hidden = true);

let errorRegalo = document.querySelector('#errorRegalo');

let errorUsuario = document.querySelector('#error');


/*de esta manera hacemos que el codigo se ejecute al cargar el sitio 
creamos 
*/

(function() {
    "use strict"
    document.addEventListener('DOMContentLoaded', function(){
   
    /*INDEX*/ 
    
    //mapa 

    let mapa = document.querySelector('#mapa');

    if (mapa) {
        let mymap = L.map('mapa').setView([10.987, -74.79], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken: 'pk.eyJ1IjoibWFicmF2bzE1MyIsImEiOiJjanhvOW1rZ3MwNG85M2RtdDltMzZ1NWE5In0.-k7OeIN0SEBkriIafzROyg'
            }).addTo(mymap);
            //de esta manera agregamos un mapa a nuestro proye cto 
    
            L.marker([10.987, -74.79]).addTo(mymap)
                .bindPopup('Barranquilla, Atlantico')
                .openPopup();  
    }

    

   /*RESERVAS*/     
    //datos de usuario 
    let nombreUsuario = document.querySelector('#name');
    let apellidoUsuario = document.querySelector('#lastname')
    let emailUsuario = document.querySelector('#email')
    
        
    //campo pases 
    
    const paseDia = 30;
    const paseCompleto = 50;
    const paseDos = 45;

    let campoDia = document.querySelector('#paseDia');
    let campoCompleto = document.querySelector('#paseCompleto');
    let campoDos = document.querySelector('#paseDos');

    //divs dias 

    let viernes = document.querySelector('#viernes');
    let sabado = document.querySelector('#sabado');
    let domingo = document.querySelector('#domingo')

    //botones
    
    let botonRegistro = document.querySelector('#btnRegistro')
    

    //pago y extras 

    const valorCamisa = 10 ;
    const valorEtiquetas = 2;    

    let camisaEvento = document.querySelector('#camisaEvento');
    let etiquetaEvento = document.querySelector('#eventoEtiqueta');
    let regalo = document.querySelector('#regalo')

    let listaProductos = document.querySelector('#listaProductos');
    let sumaTotal = document.querySelector('#sumaTotal');

     



    //calcular 
   if  (document.querySelector('#calcular'))
   {calcular.addEventListener('click', botonCalcular);}
   //de esta manera hacemos que js valide si existe la variable o no, en caso de existir ejecuta el codigo, si no lo retornara vacio  
    

    //mostrar dias 
    if (document.querySelector('#paseDia')) {
        campoDia.addEventListener('blur', mostrarDias)
    }

    if (document.querySelector('#paseCompleto')) {
        campoCompleto.addEventListener('blur', mostrarDias)
    }
    
   
    if(document.querySelector('#paseDos')){
        campoDos.addEventListener('blur', mostrarDias)
    }

   

    //validar nombre 

    if(document.querySelector('#name')){

    nombreUsuario.addEventListener('blur', function() {
          
        if (nombreUsuario.value == "" || undefined || null) {
            errorUsuario.innerHTML = 'Debes ingresar valor valido '
            errorUsuario.style.visibility = "visible"
        }else{
            errorUsuario.style.visibility = "hidden"
        }
    })
    
}

    if(document.querySelector('#email')){
    emailUsuario.addEventListener('blur', function() {
        if (emailUsuario.value == "" || undefined || null) {
            errorUsuario.innerHTML = 'Debes ingresar valor valido'
            errorUsuario.style.visibility = "visible"
        }else{
            errorUsuario.style.visibility = "hidden"
        }
    })
    }
    if(document.querySelector('#email')){
    emailUsuario.addEventListener('blur', function() {

        if (emailUsuario.value.includes('@') == false){
            errorUsuario.innerHTML = 'Debes ingresar valor valido'
            errorUsuario.style.visibility = "visible"
        }else{
            errorUsuario.style.visibility = "hidden"
        }

    })
}
    //esto es una validacion para verificar si el correo tiene un caracter espeficifico

    ////////////funciones de los eventos /////////////////////////
        function botonCalcular(event) {
            event.preventDefault();

            let subtotalCamisa = camisaEvento.value * valorCamisa;
            let totalCamisa = subtotalCamisa - (subtotalCamisa * 0.07);

            let totalEtiqueta = etiquetaEvento.value * valorEtiquetas;


            let paseTotalDia = campoDia.value * paseDia;
            let paseTotalCompleto = campoCompleto.value * paseCompleto;
            let paseTotalDos = campoDos.value * paseDos;


            if (regalo.value == "" || undefined ) {
                errorRegalo.innerHTML = 'Debes escoger un regalo!!!'
                errorRegalo.style.visibility = "visible"
                regalo.focus();
            } else {
                errorRegalo.style.visibility = "hidden"
                let totalReserva = paseTotalCompleto + paseTotalDia + paseTotalDos + totalCamisa + totalEtiqueta;

                sumaTotal.innerHTML = `$ ${totalReserva.toFixed(2)}`;
            }
        
        
           let resumenProductos = [];

            if (campoDia.value >= 1) {
                resumenProductos.push(`${campoDia.value} Boletos de un dia`)
            }
            if (campoDos.value >= 1) {
                resumenProductos.push(`${campoDos.value} Boletos de dos dias`)
            }
            if (campoCompleto.value >= 1) {
                resumenProductos.push(`${campoCompleto.value} Boletos de todos los dias`)
            }
            if (camisaEvento.value >= 1) {
                resumenProductos.push(`${camisaEvento.value} Camisas del evento`)
            }
            if (etiquetaEvento.value >= 1) {
                resumenProductos.push(`${etiquetaEvento.value} etiquetas del evento `)
            }

            if(regalo.value !== ""){
                resumenProductos.push(`${regalo.value} es el regalo`)
            }

            listaProductos.innerHTML = '';

            resumenProductos.forEach(element => {
                if (regalo.value !== "") {
                    listaProductos.innerHTML += `${element} </br>`
                } else {
                    errorRegalo.innerHTML = 'Debes escoger un regalo!!!'
                    errorRegalo.style.visibility = "visible"
                    regalo.focus();
                }
            })
        //si no le agregamos el += solo nos imprimira un solo elemento, ademas debemos inicializar listaProductos.innerHTML = ''; 
        // vacio, ya que si no lo hacemos de esta manera, se sobre escribira el array

    }

     // mostrar contenido

     function mostrarDias() {
        let diasElegidos = [];

        if (campoDia.value > 0) {
            diasElegidos.push(viernes)
        }
        if (campoCompleto.value > 0) {
            diasElegidos.push(viernes, sabado, domingo)
        }
        if (campoDos.value > 0) {
            diasElegidos.push(viernes, sabado)
        }



        diasElegidos.forEach(element =>{
            element.hidden = false
        } )
        //falta el reseteo del hidden 
        
    }

    


});
})();//DOMCOntentLoaded js


//para obtener los datos de una variable especifica debemos asignar variable.value
//con event.preventDefault(); evitamos lo que hara el navegador por defecto. al parecer es una caracteristica de jquery

//es recomendable crear las variables, seguido declarar los eventos y luego de esto. crear la funcion del evento 




//empezaremos con el codigo de jquery por lo cual, haremos un nuevo DOMContentLoaded pero con jquery 

$(function() {
    

    //mostrar talleres
    $('#talleres').show();
    $('.menu-progama a').on('click', mostrarEventos);
    function mostrarEventos() {
    let enlaces = $(this).attr('href');
       $('.ocultar').hide();
       //siempre es recomendable usar una clase individual que tengan 
       //los elementos
       $(enlaces).fadeIn(1000);

        return false;
    }


    //animaciones para los numeros 

    $('#numeroUno').animateNumber({
        number: 6
    },
        {
            easing: 'swing',
            duration: 1200
        });

    $('#numeroDos').animateNumber({
        number: 15
    },
        {
            easing: 'swing',
            duration: 1200
        });

    $('#numeroTres').animateNumber({
        number: 3
    },
        {
            easing: 'swing',
            duration: 1200
        });

    $('#numeroCuatro').animateNumber({
        number: 9
    },
        {
            easing: 'swing',
            duration: 1200
        });
  

   
   //contenedor hora
   
    $('.contenido-regresivo').countdown('2019/10/10 10:00:00', function (event) {
        $('#dias').html(event.strftime('%D')),
        $('#horas').html(event.strftime('%H')),
        $('#minutos').html(event.strftime('%M')),
        $('#segundos').html(event.strftime('%S'));
    })

    

    //animar las letras

    $('.title-evento').lettering();

    //plugin galeria 



    //detectando el scroll

    

    
    $(window).scroll(function () {

        let scrollD = window.pageYOffset;
        let altoVentana = document.documentElement.clientHeight;

        if (scrollD > altoVentana) {
            $('.barra').addClass('fixed');
        } else {
            $('.barra').removeClass('fixed');
        }

        //de esta manera le agregamos la clase fixed a la barra de navegacion

    })


   
     

});//DOMCOntentLoaded jquery







