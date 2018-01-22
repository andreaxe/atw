<?php
include_once('ConnectDB.php');

// importante ver os erros do php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$connection = ConnectDB::getInstance()->getConnection();

$data['username'] = $_POST['username'];
$data['email'] = $_POST['email'];
$data['password'] = $_POST['password'];
$data['password_confirmation'] = $_POST['password_confirmation'];

if($data['password'] !== $data['password_confirmation']){
    $msg = "As passwords não coincidem!";
    header( "Location: index.php" ); die;

} else {
    createUser($data, $connection);
}

function createUser($data, $connection)
{
    $username = mysqli_real_escape_string($connection, $data['username']);
    $email    = mysqli_real_escape_string($connection, $data['email']);
    $password = mysqli_real_escape_string($connection, $data['password']);
    $activo   = 0;
    $federado = 0;

    $password     = sha1($password);

    $query = "INSERT INTO utilizador(nome, email, senha, ativo, federado)VALUES('$username', '$email', '$password', 
    '$activo', '$federado')";

    $user  = mysqli_query( $connection , $query);

    if($user)
    {
        echo "<div class=\"alert alert-success\">";
        echo("Utilizador inserido com sucesso!");
        echo "</div>";
        header("location:index.php");
        die();
    }
    else
    {
        echo("Houve um erro ao introduzir o utilizador!");
        print_r(mysqli_error_list($connection));
    }
    mysqli_close($connection);
}