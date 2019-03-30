<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión — Registro de Asistencia DuocUC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
      body,
      html {
        height: 100%;
      }

      body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
      }

      .form-signin .checkbox {
        font-weight: 400;
      }

      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }

      .form-signin .form-control:focus {
        z-index: 2;
      }

      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>
  </head>

  <body>

    <body class="text-center">
      <form class="form-signin">
        <img class="mb-4" src="/assets/images/logoDuoc.svg" alt="" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Por favor, inicie sesión</h1>
        <label for="inputUsername" class="sr-only">Nombre de Usuario</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Nombre de Usuario" required="required" autofocus="autofocus">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="required">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
        <p class="mt-5 mb-3 text-muted">Fundación DuocUC &copy; 1968 -
          <?= date('Y') ?>
        </p>
      </form>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

  </html>
