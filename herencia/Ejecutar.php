
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style_html.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="py-5">VENTAS</h1>
        <div class="row justify-content-center py-5">
            <div class="col col-8">
                <form class="p-3 border border-white rounded-5 shadow-black shadow-lg p-3 mb-5 rounded">
                    <h1>DATOS</h1>
                    <?php
                        include_once('Ventas.php');
                        $ventas = new Ventas();

                        $ventas->asignarTipoContratacion("Unitario");
                        $ventas->asignarComisionVenta(500);
                        //atributos que hereda de la clase empleado y persona
                        //empleado    
                        $ventas->asignarNombre("Joselyn");
                        $ventas->asignarApellido("Mendoza");
                        $ventas->asignarTelefono("58545652");
                        $ventas->asignarDireccion("05 Calle 10 - 00 zona 13 ");
                        $ventas->asignarCodigo(524);
                        $ventas->asignarNivelAcademico("Licenciatura");
                        $ventas->asignarSueldoBase(6000);

                        
                        echo $ventas->verDatos();
                    ?>
                    
                </form>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3  text-white">
            <div class="container text-center">
              <span>© Joselyn Michelle Mendoa Molina / 2020-030618</span>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>