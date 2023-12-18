<?php
session_start();    
if (empty($_SESSION)) {
    header("Location: read.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page Utilisateur</title>
</head>
<body>
    <button formaction="../Controllers/logout.php"></button>
</body>
</html>