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
<h2>Hier staan wat extra's</h2>
<br>
<h2>Klik op één van de onderstaande id's</h2>
<?php

$query = "SELECT * FROM extra";
$project = $conn->prepare($query);

if($project->execute()){
    $res = $project->fetchAll(PDO::FETCH_OBJ);
    foreach($res as $rij)
    {
        echo '<center>';
        echo "<h2>";
        echo "<a href='LyfterExtra2.php?vnr=".$rij->did."'>$rij->did</a>";
        echo "</h2>";
        echo "</center>";
    }
}

?>
<br/>
<h2>Hier onder staat wat er in de database staat</h2>
<center>
    <div class="lyfter">
        <br>
        <?php
        $query = "SELECT * FROM extra";
        $stm = $conn->prepare($query);
        if($stm->execute()){

            $extra = $stm->fetchAll(PDO::FETCH_OBJ);

            foreach($extra as $ex){

                echo "<td><h2 href='$ex->did'>$ex->did, $ex->tekst</h2></td>";


            }
        }
        ?>
        <br/><br/>
    </div>
</center>
