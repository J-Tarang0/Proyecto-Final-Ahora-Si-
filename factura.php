<?php include("Plantilla/header.php"); ?>

<link rel="stylesheet" href="CSS/factura.css">

<section class="main">
	<div class="wrapp">
		<div class="mensaje">
			<h1>Bienvenido al Portal de Facturación Electrónica de la CFE</h1>
		</div>
			<div class="infoFactura">
            <b> Pago del servicio electrico</b> <br>
            <b> Número de factura: </b> 28032810 <br>
            <b> Nombre: </b>*Dueño del inmueble/local/empresa*<br>
            <b> Fecha de facturacion: </b>*Fecha de hoy*<br>
            <b> Total a pagar: </b>*El que figura en su recibo*<br>
            <br>
            <?php include("Plantilla/formularioFactura.php"); ?>
			</div>
        <?php include("Plantilla/aside.php"); ?>
	</div>
</section>
<?php include("Plantilla/footer.php"); ?>