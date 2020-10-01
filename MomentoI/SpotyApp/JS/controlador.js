

//Llaves para generar el token automaticamente

const llave1="grant_type=client_credentials";
const llave2="client_id=d7ccdc4157964c5eba8bcd7f7d4a0e5e";
const llave3="client_secret=7333b1ee54824b8c91116a4df621a0d6";

//Parámetros para enviar los datos POST

const parametrosPOST={
    
    method:"POST",
    headers:{"Content-Type": 'application/x-www-form-urlencoded' },
    body: llave1 + '&' + llave2 + '&' + llave3

}

//URL para consumir el servicio que va a generar el token automático

const urlPOST="https://accounts.spotify.com/api/token";

fetch(urlPOST,parametrosPOST)
    .then(respuesta=>respuesta.json())
    .then(datos=>obtenerToken(datos));


function obtenerToken(datos){
    token=datos.access_token;
    token="Bearer "+token;
    

    const parametrosGET={
        method:"GET",
        headers:{"Authorization":token}
}

//url que se trae de Spotify
const urlGET="https://api.spotify.com/v1/artists/4PhdYoQGH8s1xee81dqQOO/top-tracks?country=US";

// Fetch permite realizar la función de clientes para realizar el llamado de la información que se requiere
fetch(urlGET,parametrosGET)
    .then(respuesta=>respuesta.json())
    .then(datos=>depurarDatos(datos));

}

function depurarDatos(datos){
 
    // Captura de la imagen, el título y el audio para la primera tarjeta 

    let imagenTarjeta1=(datos.tracks[6].album.images[0].url);
    let tituloTarjeta1=(datos.tracks[6].name);
    let audioTarjeta1=(datos.tracks[6].preview_url);
    
    //Captura de los elementos del DOM para la primera tarjeta

    let imagen1=document.getElementById("imagen1");    
    let titulo1=document.getElementById("titulo1");
    let audio1=document.getElementById("audio1");

    //Pasan las capturas a las variables de la tarjeta 1

    imagen1.src=imagenTarjeta1;
    titulo1.textContent=tituloTarjeta1;
    audio1.src=audioTarjeta1; 
    
    // Inicia todo para la segunda tarjeta 

    // Captura de la imagen, el título y el audio para la segunda tarjeta 

    let imagenTarjeta2=(datos.tracks[3].album.images[0].url);
    let tituloTarjeta2=(datos.tracks[3].name);
    let audioTarjeta2=(datos.tracks[3].preview_url);
    
    //Captura de los elementos del DOM para la segunda tarjeta

    let imagen2=document.getElementById("imagen2");
    let titulo2=document.getElementById("titulo2");
    let audio2=document.getElementById("audio2");

    //Pasan las capturas a las variables de la segunda tarjeta

    imagen2.src=imagenTarjeta2;
    titulo2.textContent=tituloTarjeta2;
    audio2.src=audioTarjeta2; 

     // Inicia todo para la tercera tarjeta 

    // Captura de la imagen, el título y el audio para la segunda tarjeta 

    let imagenTarjeta3=(datos.tracks[8].album.images[0].url);
    let tituloTarjeta3=(datos.tracks[8].name);
    let audioTarjeta3=(datos.tracks[8].preview_url);
    
    //Captura de los elementos del DOM para la tercera tarjeta

    let imagen3=document.getElementById("imagen3");
    let titulo3=document.getElementById("titulo3");
    let audio3=document.getElementById("audio3");

    //Pasan las capturas a las variables de la tercera tarjeta

    imagen3.src=imagenTarjeta3;
    titulo3.textContent=tituloTarjeta3;
    audio3.src=audioTarjeta3; 



    console.log(datos);
    console.log(datos.tracks);
    console.log(datos.tracks[0]);
    console.log(datos.tracks[6].preview_url);
    console.log(datos.tracks[6].name);

    
    
    
                
}







