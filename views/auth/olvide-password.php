<h1 class="nombre-pagina">Reestablecer Contraseña</h1>
<p class="descripcion-pagina">Digita tu correo para reestablecer tu contraseña</p>


<?php 
    include_once __DIR__ . "/../templates/alertas.php";         //incluir template de alertas
?>


<form class="formulario" action="/olvide" method="POST">

    <div class="campo">
        <!-- <label for="email">E-mail</label> -->
        
        <input 
            type="email"
            id="email"
            placeholder="Digita tu correo electrónico"
            name="email"
        />
    </div>

    <div class="boton-centrar">
        <input type="submit" value="Enviar Instrucciones" class="boton">
    </div>

</form>

<div class="acciones">
    <b><a href="/">Iniciar Sesión</a></b>
    <b><a href="/crear-cuenta">Reestablecer Contraseña</a></b>
</div>