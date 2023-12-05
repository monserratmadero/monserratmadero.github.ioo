<html>
    <head><!-- Apartado donde se coloca el titulo y los estilos que se le quieren dar a la pagina -->
        <meta charset="UTF-8">
        <link href="../Estilos/estiloFormulario.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <h1>DATOS DEL PEDIDO</h1><!-- Titulo del formulario -->
        <hr/>
        <fieldset> <!-- Abrimos un cuadro que contendra los datos que se solicitan -->
            <table id="tab" class="Filtro"><!--Con la "clase" y "id" daremos los estilos a la tabla-->
        
                  <form action="FRM2.php" method="POST"><!-- Abrimos la etique "form" donde indicamos donde y con que meteodo guardaremos y enviaremos los datos -->
         <legend><b style="color:B66929" ,style ="font-size: 40">INGRESE LOS DATOS DE LA CITA</b></legend><!-- Damos estilo directamente a la etique "b" y con la etiqueta "legend" el titulo del formulario esta en medio de la linea del cuadro-->
        
         <!-- Abrimos varias etiquetas "label" e "input" para pedir e ingresar datos-->
         <label>Ingrese la ID_Cliente:</label><br/>
                   <input type="number" name="idcli"/><br/>
         <label>Paquetes:</label><br/>
                      <select name="cmbc"><br/>
                   <option>Bodas</option>
                   <option>Graduaciones</option> 
                   <option>Maternidad </option> 
                   <option>Paquetes XV</option>
                   </select>
                    <br/>
                    <label>CODIGO DE PAQUETE:</label><br/>
                   <input type="number" name="nmp" /><br/>
                   <label>Fecha del evento</label><br/>
                   <input type="date" name="fce"/><br/>
                   <label>Hora de inicio del evento</label><br/>
                   <input type="time" name="hie"/><br/>
                   <label>Hora que finaliza del evento</label><br/>
                   <input type="time" name="hfe"/><br/>
                    <label>Lugar del evento</label><br/>
                   <input type="text" name="txtle"/><br/>
                 
                  
                   
                   <button>Enviar</button>   </form> 
                <!--En el apartado "PHP" se hace la coneccion a la base de datos y nos permite mostrar el registro en la pagina-->
                    <?php
         $con= mysqli_connect("localhost","root","","EfL","3305");
          $sensql= "select * from Pedidos;";
         $datos= mysqli_query($con,$sensql);
         while ($re= mysqli_fetch_array($datos)){
              ?>
                
                

   <tr> 
       <th>ID_Pedido</th> 
        <th>ID_Cliente</th> 
       <th>Paquete</th> 
       <th>Codigo de paquete</th> 
        <th>Fecha</th>
        <th>Hora de inicio</th>
        <th>Hora que finaliza</th>
        <th>Lugar</th>
       
       
         </tr> 
                <tr> 
         <td><?=$re[0]?></td>  
         <td><?=$re[1]?></td> 
         <td><?=$re[2]?></td> 
         <td><?=$re[3]?></td>
         <td><?=$re[4]?></td> 
         <td><?=$re[5]?></td> 
          <td><?=$re[6]?></td> 
           <td><?=$re[7]?></td> 
           </tr>
          <?php
          }
     ?><!-- Aqui termina la sentencia "PHP" -->
        </table>
         </fieldset> 
  </body>
</html>
