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
    die("Echec de la connexion ".$conn->connect_error);
}

//Récupération des données

$email = $_POST['email'];
$password = $_POST['password'];

//Préparation de la requête
$stmt = $conn->prepare("SELECT id, name, password FROM utilisateurs WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    echo $password;
    echo $row["password"];

    if($password === $row["password"]) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        

        header("Location: index.php");
    } else {
        echo "Mot de passe incorrect";
    }
} else {
    echo "utilisateur non trouvé";
}

$conn->close();

?>