<?php

// Initialisation du gestionnaire de requête
$client = curl_init("https://jsonplaceholder.typicode.com/users/3");

// Définition d'options de requête, si besoin
// Pour mettre le résultat de la requête en valeur de retour et non l'afficher à l'écran par défaut
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);
$data = json_decode($response, true);

curl_close($client);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $data['name']; ?></h1>
</body>

</html>