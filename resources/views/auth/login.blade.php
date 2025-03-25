<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .left-section {
            background: linear-gradient(rgba(43, 77, 124, 0.7), rgba(43, 77, 124, 0.7)), 
                url('images/1629126128_grj.jpg') center/cover no-repeat;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 40px;
        }
        .left-section h1 {
            font-size: 32px;
            font-weight: bold;
        }
        .right-section {
            padding: 40px;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-login {
            background-color: #ff6700;
            border: none;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
        }
        .btn-login:hover {
            background-color: #f58133;
        }
        .forgot-password, .signup {
            text-decoration: none;
            font-weight: bold;
            color: #1255b3;
        }
        .forgot-password:hover, .signup:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row w-75 shadow-lg login-card">
        <!-- Sección izquierda -->
        <div class="col-md-6 left-section d-none d-md-flex">
            <img src="images/logo_gore_4.png" alt="Imagen de bienvenida" class="img-fluid">
        </div>
        
        <!-- Sección derecha -->
        <div class="col-md-6 right-section">
            <h3 class="mb-3">Iniciar Sesion</h3>
            <p class="text-muted">Bienvenido! Por favor, ingrese con su cuenta.</p>
            
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input type="email" name="email" class="form-control" placeholder="Ingrese su contraseña" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="********" required>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Recuerdame</label>
                    </div>
                    <a href="#" class="forgot-password">Olvidaste tu contraseña?</a>
                </div>
                
                <button type="submit" class="btn btn-login" style="color: #fff">Ingresar</button>
                
                <div class="text-center mt-3">
                    <span>Nuevo usuario? <a href="#" class="signup">Registrarse</a></span>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
