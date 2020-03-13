<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="LyfterCss.css">
    <style>
        h2{
            color: white;
        }
        textarea{
            background-image: url("Lyfter.jfif");
            color: white;
        }
    </style>
</head>

<center>
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

<?php

if(isset($_GET['vnr'])) {

    $bid = $_GET['vnr'];
    $query = "SELECT * FROM opdracht2 WHERE bid = '" . $bid . "'";
    $stmt = $conn->prepare($query);
    if ($stmt->execute()) {

        $rij = $stmt->fetch(PDO::FETCH_OBJ);
    }
}
        ?>

        <form method="POST">
            <input type="text" name="txtNummer" readonly value="<?php echo $rij->bid; ?>"/>
            <h2>De code voor "FIZZ AND BUZZ" (uit database gehaald):</h2>
            <textarea readonly name="txtType" cols="80" rows="30"><?php echo stripslashes($rij->code); ?></textarea>
        </form>

</center>