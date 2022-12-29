$(document).ready(function(){
    var botones = document.getElementsByClassName('mg-bttn');
    for(var i=0;i<botones.length; i++){
        botones[i].addEventListener('click',capturar_id);
    }
    function capturar_id(){
        console.log(this.id);
        window.location.href='phpmethods/darle_mg.php?id='+this.id;
    }
    $('#subir-publicacion').click(function(){
        let texto_pub = $('#descripcion').val().trim();
        if (texto_pub != ""){
            $('#publicacion-form').submit(); // se sube el formulario
        }else{
            alert("No has escrito nada en la Publicacion");
        }
    });    
});