<html>
    <head><!-- Apartado donde se coloca el titulo y los estilos que se le quieren dar a la pagina -->
        <meta charset="UTF-8">
        <link href="../Estilos/estiloFormulario.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
        <body>
 
        <h1>DATOS DEL CLIENTE</h1><!-- Titulo del formulario -->
        <hr/>
        <fieldset> <!-- Abrimos un cuadro que contendra los datos que se solicitan -->
        
            <div id="form" class="fr"><!-- Colocamos un div con clases que marcaran un estilo para este -->
         <form action="FRM1.php" method="POST"> <!-- Abrimos la etique "form" donde indicamos donde y con que meteodo guardaremos y enviaremos los datos -->
             <table id="tab"  class="Filtro" border="1"><!-- Damos formato a la tabla -->
         <b style="color:B66929" ,style ="font-size: 40">INGRESE SUS DATOS</b><!-- Damos estilo directamente a la etique "b"-->
        <br/>
        <!-- Abrimos varias etiquetas "label" e "input" para pedir e ingresar datos, algunos de estos "label" tienen metodo "required" lo que significan que son obligatorios -->
        <label>Correo Electronico:</label><br/>
        <input type="text" name="txtcor"/><br/>
        <label>Nombre:</label><br/>
        <input type="text" name="txtn" value="" placeholder="INGRESA NOMBRE" required="" /><br/>
        <label>Numero Telefonico:</label><br/>
        <input type="number" name="nt"/><br/>
        <label>Direccion:</label><br/>
        <input type="text" name="txtd"/><br/>
        <label>Codigo postal:</label><br/>
        <input type="text" name="txtcp"/><br/>
       
        
        <button>Enviar</button>   </form> 
        </div>
<!--En el apartado "PHP" se hace la coneccion a la base de datos y nos permite mostrar el registro en la pagina-->
             <?php
         $con= mysqli_connect("localhost","root","","EfL","3305");
          $sensql= "select * from Cliente;";
         $datos= mysqli_query($con,$sensql);
         while ($re= mysqli_fetch_array($datos)){
              ?>

   <tr> 
       <th>ID_CLIENTE</th> 
       <th>Correo Electronico</th> 
       <th>Nombre</th> 
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Codigo Postal</th>
        
       
         </tr>
                <tr> 
         <td><?=$re[0]?></td>  
         <td><?=$re[1]?></td> 
         <td><?=$re[2]?></td> 
         <td><?=$re[3]?></td>
         <td><?=$re[4]?></td> 
          <td><?=$re[5]?></td> 
          
         </tr>
          <?php
          }
     ?><!-- Aqui termina la sentencia "PHP" -->
            <br/>
            <br/>
            <br/>
    <a class="it" href="pedido.php">Agendar Cita</a><!-- NOS MANDA A LA SIGUIENTE PAGINA -->
    </table>   
     </fieldset>    
       
    </body>
</html>