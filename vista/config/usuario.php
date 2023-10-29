<?php
session_start();

if (!isset($_SESSION['cargo']) == 1) {
  header('location: ../pages-login');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Vetdog</title>
  <!-- Google Font - Iconos -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <!-- Bootstrap Select Css -->
  <link href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
  <!-- Bootstrap Core Css -->
  <link href="../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Waves Effect Css -->
  <link href="../../assets/plugins/node-waves/waves.css" rel="stylesheet" />
  <!-- Animation Css -->
  <link href="../../assets/plugins/animate-css/animate.css" rel="stylesheet" />
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../assets/css/themes/all-themes.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/lll.png" />



</head>

<body class="theme-red">
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Cargando...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->

  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->

  <!-- LUPA -->
  <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons"></i>
    </div>
    <input type="text" placeholder="Buscar...">
    <div class="close-search">
      <i class="material-icons">X</i>
    </div>
  </div>
  <!-- //LUPA -->

  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="../panel-admin/administrador"> VETDOG - DASHBOARD </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">

          <!-- Call Search -->
          <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
          <!-- #END# Call Search -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- #Top Bar -->

  <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info">
        <div class="image">
          <img src="../../assets/img/mujerico.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">

          <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($_SESSION['nombre']); ?></div>
          <div class="email"><?php echo ucfirst($_SESSION['correo']); ?></div>
          <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
              <li><a href="../config/configuracion"><i class="material-icons">brightness_low</i>Mi Cuenta</a></li>
              <li><a href="../config/usuario.php"><i class="material-icons">brightness_low</i>Usuario</a></li>
              <li role="separator" class="divider"></li>
              <li role="separator" class="divider"></li>

              <li><a href="../pages-logout"><i class="material-icons">input</i>Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- #User Info -->


      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <li class="header">MENÚ DE NAVEGACIÓN</li>
          <li class="active">
            <a href="../panel-admin/administrador">
              <i class="material-icons">home</i>
              <span>INICIO</span>
            </a>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">inbox</i>
              <span>PRODUCTOS</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../productos/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/productos">Listar / Modificar</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">low_priority</i>
              <span>CATEGORÍAS</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../categorias/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/categorias">Listar / Modificar</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">supervisor_account</i>
              <span>CLIENTES</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../clientes/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/clientes">Listar / Modificar</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">business</i>
              <span>PROVEEDORES</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../proveedores/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/proveedores">Listar / Modificar</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">person_pin</i>
              <span>VETERINARIOS</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../veterinarios/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/veterinarios">Listar / Modificar</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">flutter_dash</i>
              <span>MASCOTAS</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../mascotas/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/mascotas">Listar / Modificar</a>
              </li>
              <li>
                <a href="../../folder/tipo">Tipos</a>
              </li>
              <li>
                <a href="../../folder/raza">Razas</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">calendar_today</i>
              <span>CITAS</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../citas/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/citas">Listar / Modificar</a>
              </li>
              <li>
                <a href="../../folder/servicio">Servicio</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">shopping_basket</i>
              <span>COMPRA</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../compra/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/compra">Listar / Modificar</a>
              </li>

              <li>
                <a href="../compra/compras_fecha">Consultar por fecha</a>
              </li>


            </ul>
          </li>
          <!--======================================================================================================-->
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">monetization_on</i>
              <span>VENTA</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="../venta/nuevo">Registrar</a>
              </li>
              <li>
                <a href="../../folder/venta">Listar / Modificar</a>
              </li>

              <li>
                <a href="../venta/venta_fecha">Consultar por fecha</a>
              </li>
            </ul>
          </li>
          <!--======================================================================================================-->
          <aside id="rightsidebar" class="right-sidebar">
          </aside>
  </section>

  <!--============================CONTENIDO DE LA PÁGINA ==========================================================-->

  <section class="content">
    <div class="container-fluid">
      <!-- Input -->


      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">

            <div class="header">
              <h2>
                MI INFORMACION

              </h2>
            </div>
            <?php
// Función para conectarse a la base de datos
function connect()
{
    $conn = new mysqli("localhost", "root", "", "vetdog");

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}

// Función para insertar un nuevo usuario en la base de datos
function insertUser($nombre, $usuario, $correo, $contra, $cargo, $estado)
{
    $con = connect();

    // Hash de la contraseña
    $hashedContrasena = password_hash($contra, PASSWORD_BCRYPT);

    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, usuario, correo, contra, cargo, estado) VALUES ('$nombre', '$usuario', '$correo', '$hashedContrasena', $cargo, '$estado')";

    if ($con->query($sql) === TRUE) {
      // Mostrar una alerta de éxito
      echo "<script>alert('Usuario agregado con éxito');</script>";
  } else {
      // Manejar errores de inserción
      echo "Error: " . $sql . "<br>" . $con->error;
  }
   

    $con->close();
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $cargo = 1; // Cambiar según el cargo deseado
    $estado = '1'; // Cambiar según el estado deseado

    // Insertar el nuevo usuario en la base de datos
    insertUser($nombre, $usuario, $correo, $contra, $cargo, $estado);
}
?>


            <h2>Crear usuario</h2>
            <div class="body">
              <form method="POST" action="">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="text" name="correo" placeholder="Correo" required>
                <input type="text" name="cargo" placeholder="cargo" required>
                <input type="password" name="contra" placeholder="Contraseña" required>
                <!-- Otros campos como 'cargo' y 'estado' -->
                <button type="submit" name="submit">Crear Usuario</button>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>
    <!-- #END# Input -->
    </div>
  </section>

  <!-- Jquery Core Js -->
  <script src="../../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core Js -->
  <script src="../../assets/plugins/bootstrap/js/bootstrap.js"></script>
  <!-- Select Plugin Js -->
  <script src="../../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
  <!-- Slimscroll Plugin Js -->
  <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
  <!-- Waves Effect Plugin Js -->
  <script src="../../assets/plugins/node-waves/waves.js"></script>
  <!-- Autosize Plugin Js -->
  <script src="../../assets/plugins/autosize/autosize.js"></script>
  <!-- Moment Plugin Js -->
  <script src="../../assets/plugins/momentjs/moment.js"></script>
  <!-- Bootstrap Material Datetime Picker Plugin Js -->

  <!-- Bootstrap Datepicker Plugin Js -->

  <!-- Custom Js -->
  <script src="../../assets/js/admin.js"></script>
  <script src="../../assets/js/pages/forms/basic-form-elements.js"></script>
  <!-- Demo Js -->

  <script src="../../assets/js/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


  <!--------------------------------script nuevo----------------------------->
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          // Asignamos el atributo src a la tag de imagen
          $('#imagenmuestra').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    // El listener va asignado al input
    $("#imagen").change(function() {
      readURL(this);
    });
  </script>

</body>

</html>