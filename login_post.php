<h2>Login</h2>

<form method="post" action="tu_script.php">
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        $usuario = $_POST["user"];
        $contrasena = $_POST["pass"];
        
        // Verifica si el usuario y la contraseña coinciden en el diccionario
        if (array_key_exists($usuario, $usuariosValidos) && $contrasena === $usuariosValidos[$usuario]) {
            echo "Login correcto!";
        } else {
            echo "Login incorrecto";
        }
    }
}
?>
