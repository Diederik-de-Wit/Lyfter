-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2020 at 02:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lyfter`
--

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `did` int(50) NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`did`, `tekst`) VALUES
(3, 'tester'),
(4, 'Lyfter'),
(5, 'nog een testje');

-- --------------------------------------------------------

--
-- Table structure for table `opdracht1`
--

CREATE TABLE `opdracht1` (
  `aid` int(50) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdracht1`
--

INSERT INTO `opdracht1` (`aid`, `code`) VALUES
(1, '><Hello#521paddawan2==)\r\nToday---you0[]learn.,.-important.stuff\r\n\r\n*&Episode238I(&\r\n#$--THE33PHANTOM]}]MENACE[[\r\n\r\n&^%$Turmoil32<<has!-engulfed#2the:\r\n))-Galactic-3-0Republic.2€The8&&taxation\r\n@)of#)#trade^@#*routes\"\"{}to}}[outlying239{star\r\n13-systems%%$is@%^in!235%dispute.23\r\n\r\n<,<Hoping><>#to81*resolve*--_the(-)matter*!*#\r\nwith??a??.blockade;\\;of*&^*deadly??\r\nbattleships,@#%99the158*greedy%@*)Trade]}0-\r\nFederation@#%3has@#@%3\"stopped>?>all<#4\r\nshipping9(8to(*&the&&$small$!@planet$#*\r\n#@#T&of!?Naboo.$\r\n\r\nWhile38*the-Congress==+of#&&@the!#@\r\nRepublic$@:;endlessly?%#debates|}[\r\nthis235#%$^alarming_()8chain&)(@$of*&events,3\r\n{[{--the0Supreme--=+Chancellor+09*has]\r\nsecretly@#]dispatched!!two%%$Jedi%:;\r\nKnights,%the::guardians*&of+-\r\npeace()and][3justice)&^}in@{the^}$\r\ngalaxy,8to##settle%@the@#%conflict....'),
(2, '<?php\r\n$voegtoe = file(\"Lyfter.txt\"); // Dit leest het bestand /\r\n\r\nforeach ($voegtoe as $tekst) { // Dit leest de regels /\r\n\r\n    foreach (str_split($tekst) as $txt) { // Alle karakters lezen /\r\n\r\n        if (ctype_alpha($txt)) { // Op alfabet controleren /\r\n            echo \"$txt\";\r\n        }\r\n        elseif ($txt == \"\\n\") { // newline zet hij om naar enters /\r\n            echo \"<br/>\";\r\n        }\r\n        else {  // De spaties printen /\r\n            echo \" \";\r\n        }\r\n    }\r\n}\r\n?>');

-- --------------------------------------------------------

--
-- Table structure for table `opdracht2`
--

CREATE TABLE `opdracht2` (
  `bid` int(50) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdracht2`
--

INSERT INTO `opdracht2` (`bid`, `code`) VALUES
(1, '<?php\r\n$woody = 3;\r\n$buzz = 5;\r\n\r\necho \"De invoer:<br>\";\r\necho \"<b>\".\"Woody = $woody | Buzz = \".$buzz.\"</b><br/>\";\r\necho \"<br>laatste reeks cijfers:<br>\";\r\n\r\nfor ($i = 1; $i <= 100; $i++) {\r\n    $cijfers = \'\';\r\n\r\n    if ($i % $woody == 0) {\r\n        $cijfers .= \'F\';\r\n    }\r\n\r\n    if ($i % $buzz == 0) {\r\n        $cijfers .= \'B\';\r\n    }\r\n\r\n    if (!$cijfers) {\r\n        $cijfers = $i;\r\n    }\r\n\r\n    echo $cijfers.\" \";\r\n}\r\n?>');

-- --------------------------------------------------------

--
-- Table structure for table `opdracht3`
--

CREATE TABLE `opdracht3` (
  `cid` int(50) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opdracht4`
--

CREATE TABLE `opdracht4` (
  `fid` int(50) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdracht4`
--

INSERT INTO `opdracht4` (`fid`, `code`) VALUES
(1, ' <?php\r\n\r\n    $nights = convertFileToArray(\"Candy.txt\");\r\n\r\n    foreach($nights as $night){\r\n        $vampires = $night[\'Vampires\'];\r\n        $zombies = $night[\"Zombies\"];\r\n        $witches = $night[\'Witches\'];\r\n        $houses = $night[\'Houses\'];\r\n\r\n        $candies = ($vampires*3+$zombies*4+$witches*5)*$houses;\r\n        $children = $vampires+$zombies+$witches;\r\n\r\n\r\n        $givethesechildrencandies = $candies/$children;\r\n        $floorthesechildren = floor($givethesechildrencandies);\r\n\r\n        echo \"Vampires: $vampires, Zombies: $zombies, Witches: $witches, Houses: $houses = Candies: $candies<br/>\";\r\n        echo \"Children: $children. Candies: $candies / Children: $children = $floorthesechildren<br/>\";\r\n    }\r\n\r\n    function convertFileToArray($filename){\r\n        $lines = array();\r\n        $myfile = fopen(\"$filename\", \"r\") or die(\"Bestand niet gevonden!\");\r\n        while(!feof($myfile)) {\r\n            $line = array();\r\n            $myLine = fgets($myfile);\r\n            $cats = explode(\',\', $myLine);\r\n            foreach($cats as $cat){\r\n                $type = explode(\':\', $cat);\r\n                $line[str_replace(\' \', \'\', $type[0])] = str_replace(\' \', \'\', $type[1]);\r\n            }\r\n            array_push($lines, $line);\r\n        }\r\n        fclose($myfile);\r\n        return $lines;\r\n    }\r\n    ?>');

-- --------------------------------------------------------

--
-- Table structure for table `opdracht5`
--

CREATE TABLE `opdracht5` (
  `eid` int(50) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdracht5`
--

INSERT INTO `opdracht5` (`eid`, `code`) VALUES
(1, ' <?php\r\n\r\n    function intRomeins($int)\r\n    {\r\n        $int = intval($int);\r\n        $uitkomst = \'\';\r\n\r\n        $array = array\r\n            (\'M\' => 1000,\r\n            \'CM\' => 900,\r\n            \'D\' => 500,\r\n            \'CD\' => 400,\r\n            \'C\' => 100,\r\n            \'XC\' => 90,\r\n            \'L\' => 50,\r\n            \'XL\' => 40,\r\n            \'X\' => 10,\r\n            \'IX\' => 9,\r\n            \'V\' => 5,\r\n            \'IV\' => 4,\r\n            \'I\' => 1);\r\n\r\n        foreach($array as $romeins => $waarde)\r\n        {\r\n            $zelfde = intval($int/$waarde);\r\n            $uitkomst .= str_repeat($romeins,$zelfde);\r\n            $int = $int % $waarde;\r\n        }\r\n        return $uitkomst;\r\n    }\r\n    echo intRomeins(159).\'<br/>\';\r\n    echo intRomeins(296).\'<br/>\';\r\n    echo intRomeins(849).\'<br/>\';\r\n    echo intRomeins(1269).\'<br/>\';\r\n    echo intRomeins(3992).\'<br/>\';\r\n\r\n    ?>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `opdracht1`
--
ALTER TABLE `opdracht1`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `opdracht2`
--
ALTER TABLE `opdracht2`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `opdracht3`
--
ALTER TABLE `opdracht3`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `opdracht4`
--
ALTER TABLE `opdracht4`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `opdracht5`
--
ALTER TABLE `opdracht5`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `did` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `opdracht1`
--
ALTER TABLE `opdracht1`
  MODIFY `aid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `opdracht2`
--
ALTER TABLE `opdracht2`
  MODIFY `bid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opdracht3`
--
ALTER TABLE `opdracht3`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opdracht4`
--
ALTER TABLE `opdracht4`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opdracht5`
--
ALTER TABLE `opdracht5`
  MODIFY `eid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
