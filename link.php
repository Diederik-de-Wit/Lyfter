<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="LyfterCss.css">
</head>

<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=lyfter", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<h2><a class="inactive underlineHover" href="LyfterOpdracht3.php">⬅Go Back </a></h2>
<h1>Klik op 1 voor de Input met Uitvoer</h1>
<h1>Klik op 2 voor de code die ik ervoor heb gebruikt met uitvoer</h1>
<?php

$query = "SELECT * FROM opdracht1";
$project = $conn->prepare($query);

if($project->execute()){
    $res = $project->fetchAll(PDO::FETCH_OBJ);
    foreach($res as $rij)
    {
        echo '<center>';
        echo "<h2>";
        echo "<a href='LyfterOpdracht1.php?vnr=".$rij->aid."'>$rij->aid</a>";
        echo "</h2>";
        echo "</center>";
    }
}

?>