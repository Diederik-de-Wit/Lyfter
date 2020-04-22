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

<h2><a class="inactive underlineHover" href="LyfterOpdracht3.php">⬅Go Back </a></h2>

<!DOCTYPE HTML>
<html>
<body>
<title>LyfterOpdracht4</title>
<H1>Lyfter Opdracht 4</H1>
<h1>Diederik de Wit</h1>
<h1>"TRICK OR TREAT"</h1><hr/>

    <h2> # Description </h2>
    <p>Everyone knows what Halloween is and how children love it.
        Children in costumes travel from house to house asking for treats with a phrase "Trick or treat".
        After that, they divide the treats equally among all. This year, they collected tons of candies, and need your help to share everything equally.
        You know that children receive different number of candies depending on their costume: vampire gets 3 candies from one house, zombie – 4 candies, and witch – 5 candies.
        That is, three children in three different costumes get 3+4+5=12 candies from one house.</p>

    </p><p><b>So:</b><br>
<p>Vampire: 3 candies per house
        Zombie: 4 candies per house
        Witch: 5 candies per house</p>

    <p><b># Example</b><br>
        Input:
        Vampires: 1, Zombies: 1, Witches: 1, Houses: 1
        Vampires: 3, Zombies: 2, Witches: 1, Houses: 10

    </p><p>Output:
        4
        36


    </p><p><b># How do I do it?<br></b>
        - Load the input.txt
        - Loop trough the strings, each string contains a group of children and the amount of houses they have been to
        - Output the amount of candy each kid gets at the end of the night
    </p>
</body>
</html>



<div class="Candy"><br/>
    <h2>↓ Mijn uitwerking: ↓</h2>
    <br>
    <?php

    $nights = convertFileToArray("Candy.txt");

    foreach($nights as $night){
        $vampires = $night['Vampires'];
        $zombies = $night["Zombies"];
        $witches = $night['Witches'];
        $houses = $night['Houses'];

        $candies = ($vampires*3+$zombies*4+$witches*5)*$houses;
        $children = $vampires+$zombies+$witches;


        $givethesechildrencandies = $candies/$children;
        $floorthesechildren = floor($givethesechildrencandies);

        echo "Vampires: $vampires, Zombies: $zombies, Witches: $witches, Houses: $houses = Candies: $candies<br/>";
        echo "Children: $children. Candies: $candies / Children: $children = $floorthesechildren<br/>";
    }

    function convertFileToArray($filename){
        $lines = array();
        $myfile = fopen("$filename", "r") or die("Bestand niet gevonden!");
        while(!feof($myfile)) {
            $line = array();
            $myLine = fgets($myfile);
            $cats = explode(',', $myLine);
            foreach($cats as $cat){
                $type = explode(':', $cat);
                $line[str_replace(' ', '', $type[0])] = str_replace(' ', '', $type[1]);
            }
            array_push($lines, $line);
        }
        fclose($myfile);
        return $lines;
    }
    ?>
<h1>Hij klopt volledig, maar het lukt me niet om de error weg te krijgen on line 93</h1>

    <br/><br/></div>
    <center>
        <br>
        <h1>Klik op 1 voor de code die ik ervoor heb gebruikt</h1>
    </center>
<?php

$query = "SELECT * FROM opdracht4";
$project = $conn->prepare($query);

if ($project->execute()) {
    $res = $project->fetchAll(PDO::FETCH_OBJ);
    foreach ($res as $rij) {
        echo '<center>';
        echo "<h2>";
        echo "<a href='LOpdracht4Code.php?vnr=" . $rij->did . "'>$rij->did</a>";
        echo "</h2>";
        echo "</center>";
    }
}
?>
