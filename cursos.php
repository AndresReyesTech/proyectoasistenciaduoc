<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Cursos Impartidos — Registro de Asistencia DuocUC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>

  <body class="text-center">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="/assets/images/logoDuocSinIsotipo.svg" height="30px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Registro de Asistencia
              <span class="sr-only">(actual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="//www.duoc.cl">Sitio Institucional</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="//www.duoc.cl/pd/">Portal Docente</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-user-circle"></i>
              <strong>Jean Paul Fuentes</strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Perfil</a>
              <a class="dropdown-item" href="#">Cambiar Contraseña</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Cerrar Sesión</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container mt-5">
      <h2>Seleccione un curso</h2>
      <table class="table table-bordered table-hover mt-4">
        <thead class="thead-light">
          <tr>
            <th>Código</th>
            <th>Jornada</th>
            <th>Nombre</th>
            <th>Sección</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ABC001122</td>
            <td>Vespertina</td>
            <td>Ingeniería de Software</td>
            <td>06</td>
            <td>
              <a class="btn btn-primary btn-sm" href="/asistencia.php" role="button">Ingresar
                <i class="fas fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>DEF334455</td>
            <td>Vespertina</td>
            <td>Desarrollo Aplicaciones Escritorio y Gestión</td>
            <td>05</td>
            <td>
              <a class="btn btn-primary btn-sm" href="/asistencia.php" role="button">Ingresar
                <i class="fas fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>GHI667788</td>
            <td>Vespertina</td>
            <td>Programación de Base de Datos</td>
            <td>12</td>
            <td>
              <a class="btn btn-primary btn-sm" href="/asistencia.php" role="button">Ingresar
                <i class="fas fa-angle-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>JKL990011</td>
            <td>Diurna</td>
            <td>Design Thinking</td>
            <td>22</td>
            <td>
              <a class="btn btn-primary btn-sm" href="/asistencia.php" role="button">Ingresar
                <i class="fas fa-angle-right"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
  </body>

</html>
