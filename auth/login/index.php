<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema NoApp - Iniciar Sesión</title>
    <link rel="stylesheet" href="../../public/css/main.css">
</head>
<body style="background-color: #f5f6fa; margin: 0; padding: 0; min-height: 100vh;">

    <div class="container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 90vh; margin: 0 auto; max-width: 420px;">
        
        <div class="header" style="margin-bottom: 15px;">
            <h1>Control de Acceso</h1>
        </div>

        <div class="login" style="width: 100%; border-radius: 6px;">
            
            <?php if(isset($_GET['error'])): ?>
                <div style="color: red; padding: 15px 10px 0 10px; text-align: center; font-weight: bold; font-size: 14px;">
                    <?php 
                        if ($_GET['error'] == '1') echo "Usuario o contraseña incorrectos.";
                        if ($_GET['error'] == 'vacio') echo "Por favor, rellena todos los campos.";
                    ?>
                </div>
            <?php endif; ?>

            <form id="loginForm" class="content-form" action="proceso.php" method="POST">
                
                <input type="text" id="usuario" name="usuario" class="input-login" placeholder="Nombre de Usuario">
                <input type="password" id="password" name="password" class="input-login" placeholder="Contraseña">
                
                <div style="text-align: center; margin-top: 10px;">
                    <button type="submit" class="btn-form" style="cursor: pointer; border-radius: 4px;">Ingresar</button>
                </div>

            </form>
        </div>
        
    </div>
    
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const usuario = document.getElementById('usuario').value.trim();
            const contrasena = document.getElementById('password').value.trim();

            if (usuario === '' || contrasena === '') {
                e.preventDefault();
                alert('Introduce tu usuario y contraseña para ingresar.');
            }
        });
    </script>
</body>
</html>