<h2>Login</h2>

<form >
    <input type="text" name="user">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit" >
</form>

<?php


if ( isset($_GET["user"])){
    echo "Usuari:".$_GET["user"]."<br/>\n";
    echo "okk";
}
?>