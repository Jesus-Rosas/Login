$(document).ready(init, false);

function init()
{
   $('#btn-registrar').click(enviarDatos);
   $('#singin').click(validar);
}
function enviarDatos()
{
    var usuario = $('#Usuario').val();
    var pass = $('#Pass').val();
    $.ajax({
       url: "insertar.php", 
       success: function(result){
           if(result === "True")
           {
               $("#resultado").html("Se ha registrado el Usuario Correctamente");
           }
           else
           {
               $("#resultado").html("No se ha podido registrar el Usuario Correctamente");
           }
       },
       data: {
         usuario: usuario,
         pass: pass
       },
       type:"GET"
    });
}
function validar()
{
    var usuario = $('#Usuario').val();
    var pass = $('#Pass').val();
    $.ajax({
       url: "validar.php", 
       success: function(result){
           if(result === "True")
           {
               $("#resultado").html("<div style='background-color: green'>Haz accedido correctamente</div>");
           }
           else
           {
               $("#resultado").html("<div style='background-color: red; color: white;'>No se pudo comprobar el usuario</div>");
           }
       },   
       data: {
         usuario: usuario,
         pass: pass
       },
       type:"POST"
    });
}