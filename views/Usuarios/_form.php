<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP - MVC</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1>USUARIOS MVC</h1>
        </header>
        <div class="separator"></div>
        <section id="grid">
            <div class="content">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $helper->url("usuarios", "index"); ?>">USUARIOS</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CREAR</li>
                    </ol>
                </nav>
                <h2>USUARIOS</h2>
                <div class="separator"></div>
                <form id="form" name="form" method="POST">
                    <div class="form-group">
                        <label class="col-form-label" for="formGroupExampleInput2">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="formGroupExampleInput2">Apellido</label>
                        <input name="apellido" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Apellido" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="formGroupExampleInput2">Email</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" required>
                    </div>
                    <button name="post" type="submit" class="btn btn-primary">GUARDAR</button>
                </form>
            </div>
        </section>
        <div class="separator"></div>
        <footer>
            <p>&copy; Fabián Muñoz <?php echo date('Y'); ?></p>
        </footer>
    </body>
</html>