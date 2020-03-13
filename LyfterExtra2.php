<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="LyfterCss.css">
    <style>
        textarea{
            background-image: url("Lyfter.jfif");
            color: white;
        }
    </style>
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

<?php

if(isset($_GET['vnr'])) {

    $did = $_GET['vnr'];
    $query = "SELECT * FROM extra WHERE did = '" . $did . "'";
    $stmt = $conn->prepare($query);
    if ($stmt->execute()) {

        $rij = $stmt->fetch(PDO::FETCH_OBJ);

?>
        <h2><a class="inactive underlineHover" href="LyfterExtra.php">⬅Go Back </a></h2>
<form method="POST">
    <input type="text" name="txtNummer" readonly value="<?php echo $rij->did; ?>"/>

    <h2>Hier kun je dingen veranderen, verwijderen en toeveogen in de database</h2><br>
    <h2>Verander de tekst in het vak zoals je zelf wilt, <br> klik op UPDATE om het aan te passen in de database</h2>
    <h2>Klik op DELETE om dingen te verwijderen uit de database</h2>
    <h2>Klik op ADD om dingen toe te voegen aan de database</h2>

    <textarea name="txtType" cols="40" rows="10"><?php echo stripslashes($rij->tekst); ?></textarea><br>
    <input type="submit" name="btnUpdate" value="UPDATE"/>
    <input type="submit" name="delete" value="DELETE"/>
    <input type="submit" name="voegtoe" value="ADD"/>
</form>

                      <?php
                        }

                    }else Header("Location: LyfterOpdracht3.php");

                    if(isset($_POST['btnUpdate']))
                    {
                        $did = $_POST['txtNummer'];
                        $type = $_POST['txtType'];

                        $query = "UPDATE extra SET tekst= '".$type."' WHERE did = '".$did."'";
                        $stmt = $conn->prepare($query);

                        if($stmt->execute())
                        {
                            echo "<h2>succesfully updated!</h2>";
                        }else echo "<h2>failed to update!</h2>";
                    }


                    ?>

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

<?php

if(isset($_POST['delete']))
{
    $did = $_POST['txtNummer'];

    $query = "DELETE FROM extra WHERE did = $did";
    $stmt = $conn->prepare($query);
    if($stmt->execute())
    {
        echo "<h2>succesfully deleted!</h2>";
    }else echo "<h2>failed to delete!</h2>";
}


?>

<?php
if(isset($_POST['voegtoe']))
{
$did = $_POST['txtNummer'];
$type = $_POST['txtType'];

$query = "INSERT INTO extra VALUES
(0, '$type')";
$stm = $conn->prepare($query);
if($stm->execute()){

    echo "<h2>succesfully added!</h2>";
    }else echo "<h2>failed to added!</h2>";
}
?>
