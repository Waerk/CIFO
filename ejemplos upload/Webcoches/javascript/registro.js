window.addEventListener('load', function(){
    var inputs = document.querySelectorAll('input.mayusculas');
    for(let input of inputs){
        input.onkeyup = function(){
            this.value = this.value.toUpperCase()
        }
    }
});