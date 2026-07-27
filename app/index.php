<?php

$host = "postgres-db";
$dbname = "devopsdb";
$user = "andre";
$password = "password";

try {

    $pdo = new PDO(
        "pgsql:host=$host;port=5432;dbname=$dbname",
        $user,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $users = $pdo->query("SELECT * FROM users");

} catch (PDOException $e) {

    die("Connection Failed : " . $e->getMessage());

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Docker Compose Project</title>

    <style>

        body{
            font-family:Arial;
            margin:40px;
        }

        table{
            border-collapse:collapse;
            width:400px;
        }

        td,th{
            border:1px solid #ccc;
            padding:10px;
        }

    </style>

</head>

<body>

<h1>Docker Compose Multi Service</h1>

<h2>Connected to PostgreSQL ✅</h2>

<p>PHP Version : <?= phpversion() ?></p>

<p>Current Time : <?= date("Y-m-d H:i:s") ?></p>

<hr>

<h2>Users</h2>

<table>

<tr>

<th>ID</th>

<th>Name</th>

</tr>

<?php foreach($users as $row): ?>

<tr>

<td><?= $row["id"] ?></td>

<td><?= $row["name"] ?></td>

</tr>

<?php endforeach; ?>

</table>

</body>

</html>
