<div class="barra">
    <p> &#128578; Usuario: <?php echo $nombre ?? '' ?></p>
    <a class="boton" href="/logout">&#10060; Salir</a>
</div>

<?php if(isset($_SESSION['admin'])){ ?>
    <div class="barra-servicios">
        <a class="boton" href="/admin">Ver Citas</a>
        <a class="boton" href="/servicios">Ver Servicios</a>
        <a class="boton" href="/servicios/crear">Nuevo Servicio</a>
    </div>
<?php } ?>