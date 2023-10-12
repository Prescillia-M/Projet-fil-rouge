<?php
//Ouverture de session
session_start();

//Initialisation des paramètre de connexion
$sever = 'localhost';
$name = 'root';
$pass = '';
$db = 'the-sports-hub';

//Connexion
$conn = new mysqli($sever, $name, $pass, $db);

//Message d'erreur si échec
if($conn->connect_error) {
    die("Echec de la connexion ".$conn->connect_error());
}

//Récupération des données
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//Préparation de la requête
$stmt = $conn->prepare("INSERT INTO utilisateurs(name, email, password) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

if($stmt->execute()) {
    echo "Félicitation vous êtes membre !!!";
} else {
    echo "Une erreur s'est produite ".$conn->error();
}

$conn->close();

?>