<?php
session_start();                       // remove all session variables

session_unset();
$title = "Welcome";                   // (1) Set the title
include "include/header.php";         // (2) Include the header
?>

<!-- begin page content -->

<div class=".container p-5 my-0 border">
    <p>
    <h3>How healthy are you today?</h3>

    <p style='text-align: left;'>
        Please fill this <a href="/questions/question1.php">form</a> and let us know how you are

</div>
<!-- end page content -->
<br>

<?php
include "include/footer.php";       // (3) Include the footer
?>