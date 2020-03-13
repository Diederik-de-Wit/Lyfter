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
<h2><a class="inactive underlineHover" href="LyfterOpdracht3.php">⬅Go Back </a></h2>

<?php

if(isset($_GET['vnr'])) {

    $aid = $_GET['vnr'];
    $query = "SELECT * FROM opdracht1 WHERE aid = '" . $aid . "'";
    $stmt = $conn->prepare($query);
    if ($stmt->execute()) {

        $rij = $stmt->fetch(PDO::FETCH_OBJ);
        ?>

        <form method="POST">
            <input type="text" name="txtNummer" readonly value="<?php echo $rij->aid; ?>"/>
            <h2>Bij 1, is dit hier onder de input</h2>
            <h2>Bij 2, is dit hier onder de code</h2>
            <h2>(uit database gehaald)</h2>
            <textarea readonly name="txtType" cols="80" rows="30"><?php echo stripslashes($rij->code); ?></textarea>
        </form>


        <h2>Uitvoer:</h2>
        <h2>Lyfter Opdracht 1</h2>
        <h2>Diederik de Wit</h2>

<center>
        <div class="lyfter">
            <br>
        <?php
        $voegtoe = file("Lyfter.txt");

        foreach ($voegtoe as $tekst) {

            foreach (str_split($tekst) as $txt) {

                if (ctype_alpha($txt)) {
                    echo "$txt";
                } elseif ($txt == "\n") {
                    echo "<br/>";
                } else {
                    echo " ";
                }
            }
        }
    }
}
?>
            <br/><br/>
            </div>
</center>


<br><br><br>