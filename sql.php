
<?php
$con = mysql_connect("localhost", "quizidvd_root", ".75Unvod@rJd");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("quizidvd_quiz", $con);
?>
