<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Patitas Felices</title>
  <link rel="stylesheet" href="./css/style_registro.css">
</head>

<body>
  <header>
    <div class="cabecera-hero">
      <div class="cabecera hero">
        <div class="baner-principal">
          <img class="escudo" src="./img/logo original.jpg" alt="">
          <i class="fa-brands fa-whatsapp"></i>

          <div class="content-baner-principal">
            <span class="text">Contacto whatsapp</span>
            <span class="number">123-456-7890</span>
          </div>
        </div>

        <div class="cabecera-logo">
          <i class="fa-solid fa-paw"></i>
          <h1 class="logo"><a href="./index.html">Patitas Felices</a></h1>
        </div>

        <a href=""></a>
        <div class="cabecera-usuario">

          <h2>INICIA SESION</h2>
          <a href="./login.php"><i class="fa-solid fa-user"></i></a>
          <i class="fa-solid fa-basket-shopping"></i>
          <div class="cabecera-carrito-compras">
            <span class="text">Carrito</span>
            <span class="number">(0)</span>
          </div>
        </div>
      </div>
    </div>

    <div class="principal">

      <div class="contenedor-formularios">


        <section class="Formulario post">
          <form action="" method="POST" onsubmit="return validarRegistro()">
            <div class="encabezado">
              <img src="./img/logo_original.jpg" alt="">
              <h2>REGÍSTRATE</h2>
              <h3>
                <?php
                require_once './php/controlador_registro.php';
                ?>
              </h3>
            </div>
            <br>
            <br>
            <label for="usuario">Usuario:</label>
            <input class="input" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario" required>
            <span id="error-usuario"></span>
            <br>
            <br>
            <label for="correo">Correo:</label>
            <input class="input" type="text" name="correo" id="correo" placeholder="Ingrese su correo" required>
            <span id="error-correo"></span>
            <br>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input class="input" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña" required>
            <span id="error-contraseña"></span>
            <br>
            <br>
            <label for="confirmar_contraseña">Confirmar Contraseña:</label>
            <input class="input" type="password" name="confirmar_contraseña" id="confirmar_contraseña" placeholder="Ingrese su contraseña nuevamente" required>
            <span onclick="togglePasswordVisibility('confirmar_contraseña', 'eye-icon-confirmar-contraseña')">
              <i id="eye-icon-confirmar-contraseña" class="fa fa-eye"></i>
            </span>
            <span id="error-confirmar-contraseña"></span>
            <br>
            <br>
            <label for="nombre">Nombre:</label>
            <input class="input" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
            <span id="error-nombre"></span>
            <br>
            <br>
            <label for="apellido">Apellido:</label>
            <input class="input" type="text" name="apellido" id="apellido" placeholder="Ingrese sus apellidos" required>
            <span id="error-apellido"></span>
            <br>
            <br>
            <label for="edad">Edad:</label>
            <input class="input" type="number" name="edad" id="edad" min="10" max="90" placeholder="Ingrese su edad" required>
            <span id="error-edad"></span>
            <br>
            <div class="sexo-container">
              <label for="sexo">Sexo:</label>
              <select name="sexo" id="sexo" required>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="otro">Otro</option>
              </select>
            </div>
            <span id="error-sexo"></span>
            <br>
            <br>
            <label for="cedula">Cédula:</label>
            <input class="input" type="text" name="cedula" maxlength="10" id="cedula" placeholder="Ingrese su cédula" required>
            <span id="error-cedula"></span>
            <br>
            <br>
            <label for="ciudad">Ciudad:</label>
            <input class="input" type="text" name="ciudad" id="ciudad" placeholder="Ingrese ciudad" required>
            <span id="error-ciudad"></span>
            <br>
            <br>
            <button class="boton" type="submit" name="enviar">Registrarse</button>
          </form>

          <script>
            function togglePasswordVisibility(inputId, eyeIconId) {
              var passwordInput = document.getElementById(inputId);
              var eyeIcon = document.getElementById(eyeIconId);

              if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.className = "fa fa-eye-slash";
              } else {
                passwordInput.type = "password";
                eyeIcon.className = "fa fa-eye";
              }
            }

            // Función para validar en tiempo real
            function validarCampo(idCampo, idError, regex, mensajeError) {
              var campo = document.getElementById(idCampo);
              var error = document.getElementById(idError);

              campo.addEventListener('input', function() {
                var valor = campo.value.trim();

                if (!regex.test(valor)) {
                  error.innerHTML = mensajeError;
                } else {
                  error.innerHTML = "";
                }

                // Verificar contraseñas al escribir
                if (idCampo === 'contraseña' || idCampo === 'confirmar_contraseña') {
                  validarContraseñas();
                }
              });
            }

            // Validaciones para cada campo
            document.addEventListener('DOMContentLoaded', function() {
              validarCampo('usuario', 'error-usuario', /^[a-zA-Z0-9_]{3,20}$/, 'Usuario inválido');
              validarCampo('correo', 'error-correo', /^[^\s@]+@[^\s@]+\.[^\s@]+$/, 'Correo inválido');
              validarCampo('contraseña', 'error-contraseña', /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/, 'Contraseña inválida');
              validarCampo('confirmar_contraseña', 'error-confirmar-contraseña', /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/, 'Confirmar Contraseña inválida');
              validarCampo('nombre', 'error-nombre', /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,50}$/, 'Nombre inválido');
              validarCampo('apellido', 'error-apellido', /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,50}$/, 'Apellido inválido');
              validarCampo('edad', 'error-edad', /^\d{1,2}$/, 'Edad inválida');
              validarCampo('cedula', 'error-cedula', /^\d{10}$/, 'Cédula inválida');
            });

            // Validar contraseñas en tiempo real
            function validarContraseñas() {
              var contraseña = document.getElementById('contraseña').value;
              var confirmarContraseña = document.getElementById('confirmar_contraseña').value;
              var errorConfirmarContraseña = document.getElementById('error-confirmar-contraseña');

              if (contraseña !== confirmarContraseña) {
                errorConfirmarContraseña.innerHTML = "Las contraseñas no coinciden";
              } else {
                errorConfirmarContraseña.innerHTML = "";
              }
            }

            // Función para validar el formulario completo antes de enviar
            function validarRegistro() {
              // Obtener valores de los campos
              var usuario = document.getElementById('usuario').value;
              var correo = document.getElementById('correo').value;
              var contraseña = document.getElementById('contraseña').value;
              var confirmarContraseña = document.getElementById('confirmar_contraseña').value;
              var nombre = document.getElementById('nombre').value;
              var apellido = document.getElementById('apellido').value;
              var edad = document.getElementById('edad').value;
              var sexo = document.getElementById('sexo').value;
              var cedula = document.getElementById('cedula').value;
              var ciudad = document.getElementById('ciudad').value;

              // Verificar que todos los campos estén llenos
              if (
                usuario === "" ||
                correo === "" ||
                contraseña === "" ||
                confirmarContraseña === "" ||
                nombre === "" ||
                apellido === "" ||
                edad === "" ||
                sexo === "" ||
                cedula === "" ||
                ciudad === ""
              ) {
                alert('Por favor, completa todos los campos.');
                return false;
              }

              // Verificar que las contraseñas coincidan
              if (contraseña !== confirmarContraseña) {
                alert('Las contraseñas no coinciden. Por favor, verifica.');
                return false;
              }

              return true; // Retorna true si todo es válido
            }
          </script>
        </section>


      </div>
    </div>

    <section>
      <div class="logos-red">
        <h2>Redes Sociales</h2> <br><br>
        <img src="./img/instagram.png" alt=""><br><br>
        <img src="./img/facebook.png" alt="">
      </div>
    </section>
    <br>
    <footer class="derechos-autor">
      <p>
      <h1>&copy;derechos de autor</h1>
      </p>
    </footer>



    <script src="https://kit.fontawesome.com/56feac8295.js" crossorigin="anonymous">
    </script>


</body>

</html>