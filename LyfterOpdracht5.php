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
<h1>"ROMAN NUMERALS"</h1><hr/>

<div class="Intro">
    <h2> # Description </h2>
    <p>Many persons are familiar with the Roman numerals for relatively small numbers.
        The symbols I (capital i), V, X, L, C, D, and M represent the decimal values 1, 5, 10, 50, 100, 500 and 1000 respectively.
        To represent other values, these symbols, and multiples where necessary, are concatenated, with the smaller-valued symbols written further to the right.
        For example, the number 3 is represented as III, and the value 73 is represented as LXXIII.
        The exceptions to this rule occur for numbers having units values of 4 or 9, and for tens values of 40 or 90.
        For these cases, the Roman numeral representations are IV (4), IX (9), XL (40), and XC (90). So the Roman numeral representations for 24, 39, 44, 49, and 94 are XXIV, XXXIX, XLIV, XLIX, and XCIV, respectively.
    </p>

    <P><b>So:</b></P>
    <p>Write a program to convert a cardinal number to a Roman numeral.</p>
    <p>I - 1<br/>
    V - 5<br/>
    X - 10<br/>
    L - 50<br/>
    C - 100<br/>
    D - 500<br/>
        M - 1000</p>

    <p><b># Example</b><br>
        Input:<br/>
        159<br/>
        296<br/>
        3992<br/>

    </p><p>Output:<br/>
        CLIX<br/>
        CCXCVI<br/>
        MMMCMXCII<br/>


    </p><p><b># How do I do it?<br></b>
        - Create a function which accepts 1 numeric parameter and outputs the Roman numeral string.
    </p>
</div>
</body>
</html>



<div class="Candy"><br/>
    <h2>↓ Mijn uitwerking: ↓</h2>
    <br>
    <?php

    function intRomeins($int)
    {
        $int = intval($int);
        $uitkomst = '';

        $array = array
            ('M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1);

        foreach($array as $romeins => $waarde)
        {
            $zelfde = intval($int/$waarde);
            $uitkomst .= str_repeat($romeins,$zelfde);
            $int = $int % $waarde;
        }
        return $uitkomst;
    }
    echo intRomeins(159).'<br/>';
    echo intRomeins(296).'<br/>';
    echo intRomeins(849).'<br/>';
    echo intRomeins(1269).'<br/>';
    echo intRomeins(3992).'<br/>';

    ?>

    <br/><br/></div>
<center>
    <br>
    <h1>Klik op 1 voor de code die ik ervoor heb gebruikt</h1>
</center>
<?php

$query = "SELECT * FROM opdracht5";
$project = $conn->prepare($query);

if ($project->execute()) {
    $res = $project->fetchAll(PDO::FETCH_OBJ);
    foreach ($res as $rij) {
        echo '<center>';
        echo "<h2>";
        echo "<a href='LOpdracht5Code.php?vnr=" . $rij->eid . "'>$rij->eid</a>";
        echo "</h2>";
        echo "</center>";
    }
}
?>
