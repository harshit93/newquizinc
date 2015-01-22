<?php
include_once("sql.php");
$id = $_POST['id'];
//$user=$_SESSION['user'];

$ans1 = $_POST['ans0'];
$ans2 = $_POST['ans1'];
$ans3 = $_POST['ans2'];
$ans4 = $_POST['ans3'];
$ans5 = $_POST['ans4'];
$count = 0;
$score = 0;
$result = mysql_query("SELECT ans FROM questions where day='3'");
$row = array();
while ($row[] = mysql_fetch_array($result)) {
    $count++;
}
$tok = explode("-", $ans1);
if ($row[$tok[1]]['ans'] == $tok[0])
    $score+=10;
//else
//    echo "wrong";
$tok = explode("-", $ans2);
if ($row[$tok[1]]['ans'] == $tok[0])
    $score+=10;
//else
//    echo "wrong";
$tok = explode("-", $ans3);
if ($row[$tok[1]]['ans'] == $tok[0])
    $score+=10;
//else
//    echo "wrong";
$tok = explode("-", $ans4);
if ($row[$tok[1]]['ans'] == $tok[0])
    $score+=10;
//else
//    echo "wrong";
$tok = explode("-", $ans5);
if ($row[$tok[1]]['ans'] == $tok[0])
    $score+=10;
//else
//    echo "wrong";
//echo $score;
$score2=$score;
$result = mysql_query("SELECT score FROM user WHERE fb_id='$id'") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    echo "error";
}
$row = mysql_fetch_array($result);
$score += $row['score'];


$result = mysql_query("UPDATE user SET score='$score' , day3='1' WHERE fb_id='$id'")
or die(mysql_error());

$url = 'end.php?p=' . $score2;
echo "<script type='text/javascript'>
                                        window.location = '" . $url . "'; 
                                        </script>";


?>
