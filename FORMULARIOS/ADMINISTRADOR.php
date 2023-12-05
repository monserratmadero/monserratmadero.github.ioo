<html>
    <head><!-- Apartado donde se coloca el titulo y los estilos que se le quieren dar a la pagina -->
        <meta charset="UTF-8">
        <link href="../Estilos/estilo.admi.css" rel="stylesheet" type="text/css"/>
        <title>INICIO DE SESION ADMINISTRADOR</title>  
    </head>
    <body> 
            <div id="contenedor"> <!-- Colocamos varios "id" para dar formato en los estilos -->
                    <div id=central">
                        <div id=login">
                            <div class="titulo">Bienvenido</div>
         <form id="loginform"><!-- Colocamos un "id" al apartado form para dar estilo al formulario.Este contiene los datos que recibira el login -->
             <input type="text" name="usuario" placeholder="Usuario" required>
             <input type="text" name="password" placeholder="Contraseña" required>
             
             <button type="submit" title="Ingresar" name="Ingresar">INICIAR SESION</button>
         </form>
                            <div class="pie-form"><!-- Se coloca una clase en el div. Este contiene opciones para el login  -->
                                <a href="#">Perdiste tu contraseña?</a>
                                <a href="#">No tienes cuenta? Registrate</a>
                                </div>
                        </div> </div>
                 </div>
        </body>
</html>
