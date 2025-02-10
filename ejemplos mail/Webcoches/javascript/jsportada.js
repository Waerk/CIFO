var lista=['imagenes/video/olddays.mp4','imagenes/video/japanjdm.mp4','imagenes/video/rally.mp4'];

window.onload = function(){

  var indice = 1;

    listaVideo.onended = function(){
      this.src = lista[indice];
      indice = (indice+1)%lista.length;
      
    }
  }
var i=0
var fotos=['imagenes/portada/mustan69.png', 'imagenes/portada/rx7.png', 'imagenes/portada/rolls69.png', 'imagenes/portada/ferrari66.jpg', 'imagenes/portada/300sl.png']

function mostrar(){
    let img1 = document.getElementById('img1');
    let img2 = document.getElementById('img2');
    let img3 = document.getElementById('img3');
    let img4 = document.getElementById('img4');
    let img5 = document.getElementById('img5');

    img1.src = fotos[i];
    img2.src = fotos[(i+1)%fotos.length];
    img3.src = fotos[(i+2)%fotos.length];
    img4.src = fotos[(i+3)%fotos.length];
    img5.src = fotos[(i+4)%fotos.length];

    i= (i+1)%fotos.length;
}
setInterval(mostrar, 10000);

document.addEventListener('keydown', (event) => {
   
    if (event.shiftKey && event.key === 'Q') {
      
      window.location.href = 'contacto.html'; 
    }
  });

  function evaluar(){
    if(aceptar.checked)
      cookies.remove();
    else
    mensaje.innerHTML = '¡Acepta las cookies o vete del sitio!';
  }
  