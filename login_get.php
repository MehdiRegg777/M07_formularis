<h2>Login</h2>

<form method="get">
    <input type="text" name="user">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit">
</form>

<?php
// Diccionario hardcoded de usuarios y contraseñas válidos
$usuariosValidos = [
    "mehdi" => "P@ssw0rd",
    "pepe" => "password",
    // Agrega más usuarios y contraseñas válidos según sea necesario
];

if (isset($_GET["user"]) && isset($_GET["pass"])) {
    $usuario = $_GET["user"];
    $contrasena = $_GET["pass"];
    
    // Verifica si el usuario y la contraseña coinciden en el diccionario
    if (array_key_exists($usuario, $usuariosValidos) && $contrasena === $usuariosValidos[$usuario]) {
        echo "Login correcto!";
    } else {
        echo "Login incorrecto";
    }
}
?>