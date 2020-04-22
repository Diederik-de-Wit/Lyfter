<h2><a class="inactive underlineHover" href="LyfterOpdracht3.php">⬅Go Back </a></h2>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="LyfterCss.css">
    <style>
        body{
            text-align: left;
        }
        .Candy{
            background-image: url("Lyfter.jfif");
            color: white;
        }
        p{
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

<!DOCTYPE HTML>
<html>
<body>
<title>LyfterOpdracht6</title>
<H1>Lyfter Opdracht 6</H1>
<h1>Diederik de Wit</h1>
<h1>"JSON Treasure Hunt"</h1><hr/>

<div class="Intro">
    <h2> # Description </h2>
    <p>JSON Treasure Hunt Challenge

        Find the treasure! Write a script that shows the exact path of the booty!

        Booty is located at "dailyprogrammer". This is hidden deep in the challenge1.txt and challenge2.txt files!
    </p>

    <P><b>So, now what:</b></P>
    <p>You will have to write a script that runs trough the JSON objects and finds the given word. Show the full path of the word.

        I.e. For challenge 1 the path should be: "axvjf > tskgrsi > 0 > ozr > 0 > 1 > 0 = dailyprogrammer"

        = Any language is accepted. A 'new' langauge is a pré.

        = Add a functionality that records the processtime.</p>

    <p><b>Good Luck</b>
        Points awarded for:
<br/>
        ** Code cleaniness
<br/>
        ** Process speed
<br/>
        ** Amount of lines (less is more)
<br/>
        Grades per category: 1 - 5. The person with the most points wins a price.</p>
</div>


    <div class="Candy"><br/>
        <h2>↓ Mijn output: ↓</h2>
<p>Challenge 1 :<br/>
    axvjf > tskgrsi > 0 > ozr > 0 > 1 > 0  = dailyprogrammer<br/>
    Challenge 2 :<br/>
    myutkqsfzw > 4 > fxeu > 1 > 0 > 1 > 2 > 7 > ocjcjokh > xqfbrz > 0  = dailyprogrammer<br/>
    Time :<br/>
    findValue: 483.348ms</p>
        <br/><br/></div>


<center>
    <br>
    <h1>Klik op 1 voor de code die ik ervoor heb gebruikt</h1>
</center>
<?php

$query = "SELECT * FROM opdracht6";
$project = $conn->prepare($query);

if ($project->execute()) {
    $res = $project->fetchAll(PDO::FETCH_OBJ);
    foreach ($res as $rij) {
        echo '<center>';
        echo "<h2>";
        echo "<a href='LOpdracht6Code.php?vnr=" . $rij->fid . "'>$rij->fid</a>";
        echo "</h2>";
        echo "</center>";
    }
}
?>


</body>
</html>




