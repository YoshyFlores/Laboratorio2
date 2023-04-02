<?php
    include 'lab2.php';
    $pato = new Pato();
    $pato->setNombre("Pato.");
    $pato->setNombreCientifico("El nombre cientifico es: Anas platyrhynchos.");


    $gallina = new Gallina();
    $gallina->setNombre("Gallina");
    $gallina->setEspecies("Especies de gallinas en total: 2629 especies.");


    $pinguino = new Pinguino();
    $pinguino->setNombre("Pinguino.");
    $pinguino->setTemperaturaC("Temperatura corporal: 40 ˚C.");


    $condor = new Condor();
    $condor->setNombre("Condor.");
    $condor->setAniosVida("Años de vida: 80 años.");


?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>
    <body>

        <div class="container-sm text-center" >
            <h1>¡Tabla con información sobre aves!</h1>
            <table class="table" >
                <thead>
                    <tr class= "mi-clase">
                        <th scope>Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Vuela</th>
                        <th scope="col">Nada</th>
                        <th scope="col">Dato Interesante</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class = "mi-clase">
                        <td><img src="https://img2.freepng.es/20180131/cew/kisspng-ruddy-shelduck-goose-bird-shelduck-5a726756110695.3466178015174469980697.jpg" alt="Imagen" width="50" height="50"></td>
                        <td><?php echo $pato->nombre; ?></td>
                        <td><?php echo $pato->volar(); ?></td>
                        <td><?php echo $pato->nadar(); ?></td>
                        <td><?php echo $pato->getNombreCientifico() ?></td>
                    </tr>
                    <tr class = "mi-clase">
                        <td><img src="https://img2.freepng.es/20180816/xqp/kisspng-rooster-rhode-island-red-broodiness-chicken-coop-p-hen-png-transparent-images-png-all-5b750ddac97975.2639993615343979148253.jpg" alt="Imagen" width="50" height="50"></td>
                        <td><?php echo $gallina->nombre; ?></td>
                        <td><?php echo $gallina->volar(); ?></td>
                        <td><?php echo $gallina->nadar(); ?></td>
                        <td><?php echo $gallina->getEspecies() ?></td>
                    </tr>
                    <tr class = "mi-clase">
                        <td><img src="https://img2.freepng.es/20180711/xqu/kisspng-cfe-higher-geography-course-notes-cfe-higher-geogr-antarctica-5b46b08a9e67f6.7357878315313593706488.jpg" alt="Imagen" width="50" height="50"></td>
                        <td><?php echo $pinguino->nombre; ?></td>
                        <td><?php echo $pinguino->volar(); ?></td>
                        <td><?php echo $pinguino->nadar(); ?></td>
                        <td><?php echo $pinguino->getTemperaturaC() ?></td>
                    </tr>
                    <tr class = "mi-clase">
                        <td><img src="https://img2.freepng.es/20180421/xlw/kisspng-condor-bird-clip-art-totem-tattoo-5adbb6fcd873b8.5512637815243486688866.jpg" alt="Imagen" width="50" height="50"></td>
                        <td><?php echo $condor->nombre; ?></td>
                        <td><?php echo $condor->volar(); ?></td>
                        <td><?php echo $condor->nadar(); ?></td>
                        <td><?php echo $condor->getAniosVida() ?></td>
                    </tr>
                </tbody>
            </table>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>

<style>
    div{
        margin: 200px;
        border: 3px solid #7877e6;
        background-color: #ebebfc;
    }

</style>
<style>
    tr.mi-clase{
        border-bottom: 2px solid #7877e6;
        
    }
</style>