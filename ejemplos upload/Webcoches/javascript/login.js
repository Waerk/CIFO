var videos = [
    'imagenes/video/cobra.mp4',
    'imagenes/video/nsx.mp4',
    'imagenes/video/supradrift.mp4',
    'imagenes/video/evodrift.mp4',
    'imagenes/video/silvia.mp4',
    'imagenes/video/r35.mp4',
];
function aleatorio(){
    var randomVideo = Math.floor(Math.random() * videos.length);
    var videoSeleccionado = videos[randomVideo];
    var videoPlayer = document.getElementById('videoPlayer');
    var videoSource = document.getElementById('videoSource');
    videoSource.src = videoSeleccionado;
    videoPlayer.load();
    videoPlayer.play();
}
window.onload = aleatorio;

