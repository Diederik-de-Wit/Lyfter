<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="LyfterCss.css">
    <style>
        body{
            text-align: left;
        }
        .buzz{
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

<h2><a class="inactive underlineHover" href="LyfterOpdracht3.php">⬅Go Back </a></h2>

<!DOCTYPE HTML>
<html>
<body>
<title>LyfterOpdracht2</title>
<H1>Lyfter Opdracht 2</H1>
<h1>Diederik de Wit</h1>
<h1>"FIZZ AND BUZZ"</h1><hr/>

<div class="Intro">
    <h2> # Description </h2>
    <p>Players generally sit in a circle.
        The first player says the number “1”, and each player says next number in turn.
        However, any number divisible by X (for example, three) is replaced by the word fizz, and any divisible by Y (for example, five) by the word buzz.
        Numbers divisible by both become fizz(woody) buzz. A player who hesitates, or makes a mistake is eliminated from the game.
        Write a program that prints out the final series of numbers where those divisible by X, Y and both are replaced by “F” for fizz, “B” for buzz and “FB” for fizz buzz.
    </p><p><b># Example</b><br>
        Input:
        3 5

    </p><p>Output:
        1 2 F 4 B 7 8 F B


    </p><p><b># How do I do it?<br></b>
        - Write a function which loops from 1 to 100 and accepts 2 parameters (Fizz & Buzz)<br>
        - Output the loop from 1 to 100 where the given parameters are correctly replaced with the words (or first letter of): Fizz or Buzz.
    </p>
</div>
</body>
</html>



<div class="buzz"><br/>
    <h2>↓ Mijn uitwerking: ↓</h2>
    <br>
<?php
$fizz = 3;
$buzz = 5;

echo "De invoer:<br>";
echo "<b>"."Fizz = $fizz | Buzz = ".$buzz."</b><br/>";
echo "<br>laatste reeks cijfers:<br>";

for ($i = 1; $i <= 100; $i++) {
    $cijfers = '';

    if ($i % $fizz == 0) {
        $cijfers .= 'F';
    }

    if ($i % $fizz == 0) {
        $cijfers .= 'B';
    }

    if (!$cijfers) {
        $cijfers = $i;
    }

    echo $cijfers." ";
}
?>

<br/><br/></div>
<center>
    <br>
<h1>Klik op 1 voor de code die ik ervoor heb gebruikt</h1>
</center>
<?php

$query = "SELECT * FROM opdracht2";
$project = $conn->prepare($query);

if($project->execute()){
    $res = $project->fetchAll(PDO::FETCH_OBJ);
    foreach($res as $rij)
    {
        echo '<center>';
        echo "<h2>";
        echo "<a href='LOpdracht2Code.php?vnr=".$rij->bid."'>$rij->bid</a>";
        echo "</h2>";
        echo "</center>";
    }
}

?>
