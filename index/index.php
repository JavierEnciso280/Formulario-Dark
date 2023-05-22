
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos-form.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <h3>Registrate para ingresar</h3>
        <!-- <div> primer boton de google y twitter -->
        <div class="buttons">
            <button class="google-btn">
                <picture>
                    <img src="https://imgs.search.brave.com/5fAVjT4JvISUgnB_wAnbqzr-0J_p5_bpJD6EA2mDS4k/rs:fit:1024:1024:1/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy90/aHVtYi81LzUzL0dv/b2dsZV8lMjJHJTIy/X0xvZ28uc3ZnLzEw/MjRweC1Hb29nbGVf/JTIyRyUyMl9Mb2dv/LnN2Zy5wbmc" alt="Google-image">
                </picture>
                <span>Accede con Google</span>
            </button>
            <button class="twitter-btn" title="Twitter">
                <picture>t</picture>
            </button>
        </div>
        <!--hasta aca primer boton de google y twitter -->
        <div class="separator">
            <!-- separador -->
            <hr>
            <span>Or</span>
            <hr>
        </div>
        <!-- formulario -->
        <form action="../php/procesarForm.php" method="post">
            <div class="section-input">

                <label for="name">
                    <span>Name</span>
                    <input type="text" name="name" id="name">
                </label>

                <label for="Username">
                    <span>Username</span>
                    <input type="text" name="Username" id="Username">
                </label>
            </div>
            <div class="section-email">
                <label for="email">
                    <span>Email</span>
                    <input type="text" name="email" id="email">
                </label>
            </div>
            <div class="section-pass">
                <label for="password">
                    <span>Password</span>
                    <input type="password" name="password" id="password" placeholder="6+ characters">
                </label>
            </div>
                <label for="checkbox">
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <span class="condiciones">Acepto los términos y condiciones</span>
                </label>
                <button class="submit-btn" type="submit">Crear cuenta</button>
            </form>
        </div>
    </div>
</body>
</html>