$(document).ready(init, false);

function init()
{
   $('#btn-registrar').click(enviarDatos);
   // $('#singin').click(validar);

   //formulario login validacion
   var form = $('.form-login');
   form.bind("submit", function(){
      $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        beforeSend: function()
        {
          //que hacer mientras se envia
        },
        complete: function(data)
        {
          //que hacer si se completó
        },
        success: function(data)
        {
          //que hacer si la petición se cumplio
          if(data == "true")
            {
               document.location.href = "admin.php";
            }
          else
            {
              $("#resultado").html("<div class='alert alert-danger' role='alert'><b>Acceso denegado</b></div>");
            }
        },
        error: function(data)
        {
          //que hacer si no se cumplio la peticion
        }
      });
      return false; //para que se quede en la misma pagina
   });
}
function enviarDatos()
{
    var usuario = $('#usuario').val();
    var pass = $('#pass').val();
    $.ajax({
       url: "insertar.php", 
       success: function(result){
           if(result === "True")
           {
              $("#resultado").html("Se ha registrado el usuario correctamente");  
           }
           else
           {
               $("#resultado").html("No se ha podio registar el usuario correctamente");
           }
       },
       data: {
         usuario: usuario,
         pass: pass
       },
       type:"GET"
    });
}
