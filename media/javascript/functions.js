/**
 *  La siguiente funcion tiene como objetivo actualizar la imagen del "preview"
 *  para posteriormente eliminarla
 */
       /*jQuery("#imagen_eliminar select").change(function(){
           alert('hola');
         //$("#imagen_eliminar img").attr("src",$("#imagen_eliminar select").text()); 
       });*/
jQuery(document).ready(function(){
    
    jQuery("#imagen_eliminar img").css("width","160");
    jQuery("#imagen_eliminar img").css("height","160");
    
    jQuery("#imagen_eliminar img").attr("src",'/transportes-hermanos-brothers/media/images/' + jQuery("#imagen_eliminar select").val());
    
    jQuery("#imagen_eliminar select").change(function(){
           jQuery("#imagen_eliminar img").attr("src",'/transportes-hermanos-brothers/media/images/' + jQuery("#imagen_eliminar select").val());
    });       
    
});