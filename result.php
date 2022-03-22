<?php
include "include/header.php";
include "include/data-collector.php"
?>

<?php

//session_start();

$question1 = $_POST["pageID"];
$question4 = $_POST["pageID"];

$_SESSION["pageID"] = $question1;
$_SESSION["pageID"] = $question4;


echo "Question 1 comment" . $question1;
echo "<br>";
echo "Question 4 comment" . $question4;
echo "<br>";

?>

<!--unknkown code $_SESSION["last-post"] = $_POST;-->

<!--When using images
            printAgeImageTag();
            echo "<br>";
            echo "<br>";

            echo "Your favourite color is: " . $color;
            echo "<br>";

            echo "<div style = 'width:50px; height:50px; background-color:$color;' ></div>";

            echo "<a href = 'color.php;' ></a>";

            echo "<br>";
            echo "<br>";
            When using images-->

<?php
include "include/footer.php";         // (3) Include the footer
?>