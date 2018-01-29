<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP - MVC</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1>USUARIOS MVC</h1>
        </header>
        <div class="separator"></div>
        <section id="grid">
            <div class="content">
                <h2>USUARIOS DB</h2>
                <a href="<?php echo $helper->url("usuarios", "create"); ?>" class="btn btn-primary">Crear</a>
                <br>
                <br>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($allUsers) {
                                foreach ($allUsers as $v) {
                                    echo('<tr>');
                                    echo('<th scope="row">'.$v->id.'</th>');
                                    echo('<td>'.$v->nombre.'</td>');
                                    echo('<td>'.$v->apellido.'</td>');
                                    echo('<td>'.$v->email.'</td>');
                                    echo('<td class="delete text-center"><a href="'. $helper->url("usuarios", "delete") .'&id='.$v->id.'" class="btn btn-danger btn-delete btn-xs" style="color:white;">Borrar</a></td>');
                                    echo('</tr>');
                                }
                            } else {
                                echo('<tr><td colspan="5"><i>Sin Resultados...</i></td></tr>');
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <div class="separator"></div>
        <footer>
            <p>&copy; Fabián Muñoz <?php echo date('Y'); ?></p>
        </footer>
    </body>
</html>