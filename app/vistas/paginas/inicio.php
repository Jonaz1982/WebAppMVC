<?require RUTA_APP .'/vistas/inc/header.php';?>
<h1><?php echo $datos['titulo']; ?></h1>
<ul>
    <?php foreach($dato['articulos']as $articulo):?>
        <li>
            <?php echo $articulo ->titulo; ?>
        </li>
    <?php endforeach; ?>
</ul>
<?require RUTA_APP.'/vistas/inc/footer.php';?>
