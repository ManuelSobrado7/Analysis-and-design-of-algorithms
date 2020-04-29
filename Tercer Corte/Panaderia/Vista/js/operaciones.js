$(document).ready(function(){


$('#ingresar').click(function() {

   var user = $('.user1').val();
   var pass = $('.pass1').val();

   if (user !='' && pass !='') {

     $.ajax({

       url : '../Controlador/login.php',
       method: 'POST',
       data: {usuario: user, password: pass},
       success: function(msg){
         if (msg== 1) {

           $('#mensaje').html('Datos incorrectos');


         }else{
           window.location = msg;
         }


         }

     });

   }else {
      $('#mensaje').html('Ingresa  el usuario y la contraseña');
   }

  });

});


$(document).ready(function(){


$('#registrar').click(function() {

   var id = $('#id').val();
   var nombre = $('#nombre').val();
   var apellido = $('#apellido').val();
   var usuario = $('#usuario').val();
   var correo = $('#correo').val();
   var pass1 = $('#pass1').val();


   var telefono = $('#telefono').val();

   if (id !='' && nombre !='' && apellido !='' && usuario !='' && pass1 !='' && telefono !='') {

     $.ajax({

       url : '../Controlador/crear.php',
       method: 'POST',
       data: {id: id, nombre: nombre, apellido: apellido, usuario: usuario, pass1: pass1, correo: correo, telefono: telefono},
       success: function(msg){
         if (msg == 1) {

           $('#mensaje').html('El usuario ingresado ya existe');
         }else {
           $('#mensajee').html(msg);

         }
       }


     });

   }else {
      $('#mensaje').html('Ingresa  los datos');
   }

  });

});


$('#Agregar').click(function(){

      var nombre = $('#nombre').val();
      var valor  = $('#valor').val();
      var des    = $('#area').val();
      var cantidad = $('#cantidad').val();
      var fecha = $('#fecha').val();

      if (nombre != '' && valor != '' && des != '' && cantidad != '' && fecha !='') {
        $.ajax({

          url: '../controlador/agregarProducto.php',
          method: 'POST',
          data: {nombre : nombre, valor : valor, des : des, cantidad : cantidad, fecha : fecha},
          success : function(msg){
            if (msg == 1) {
                $('#mensajee').html('El producto que ingresaste ya se encuantra guardado en la base de datos.');

            }else {
              $('#mensaje').html(msg);
            }

          }




        });

      }else {
        $('#mensajee').html('Ingresa todos los campos');

      }

  });

  $('#CalcularV').click(function(){

    $.ajax({

      url: '../controlador/Calcular.php',
      method: 'POST',
      success : function(msg){
        $('#mensaje').html(msg);
      }

    });

  });


  $('#VentasTotal').click(function(){

    var fecha = $('#fecha').val();
    if (fecha !=''){

    $.ajax({

      url: '../controlador/Ventas.php',
      method: 'POST',
      data: {fecha : fecha},
      success : function(msg){
        $('#mensaje').html(msg);
      }

    });

  }else {
    $('#mensajee').html('Ingresa todos los campos');

  }


  });

  $('#Eliminar').click(function(){

    var nombre = $('#deletee').val();

    if (nombre != '') {


      $.ajax({
        url: '../controlador/eliminar.php',
        method: 'POST',
        data: {nombre: nombre},
        success : function(msg){

          if (msg == 1) {
              $('#mensaje').html('El producto que ingresaste no se encuantra guardado en la base de datos.');

          }else {
            $('#mensajee').html(msg);
          }




        }



      });

    }else {
      $('#mensaje').html('Ingrese el nombre del producto');
    }




  });


  $('#Editar').click(function(){

          var nombree = $('#nombree').val();
          var valorr  = $('#valorr').val();
          var dess    = $('#areaa').val();

          if (nombree != '' && valorr != '' && dess != '') {
            $.ajax({

              url: '../controlador/editarProducto.php',
              method: 'POST',
              data: {nombree : nombree, valorr : valorr, dess : dess},
              success : function(msg){
                if (msg == 1) {
                    $('#mensajee').html('No existe el producto al que intentas editar.');

                }else {
                  $('#mensaje').html(msg);
                }

              }




            });

          }else {
            $('#mensajee').html('Ingresa todos los campos');

          }



  });
