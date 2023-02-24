<?php include ('login.php');
$result = mysqli_query($conn,"SELECT * FROM question1 order by RAND() limit 1");
$sql = "SELECT count(*) FROM question1 WHERE picNum;";
$result2 = $conn->query($sql);
while($row = mysqli_fetch_array($result2)) {
    $count_Pics = $row['count(*)'];
}
$i=0;
while($row = mysqli_fetch_array($result)) {
    $URL_pic = $row["pic_URL"];
    $loc = $row["pic_location"];
    $i++;
}
$total = $row["picNum"];
//echo("$URL_pic");
echo ("<title>Lab 09 Question5</title>");
echo("<div style='color:red;font-family:Lucida Console;display: flex;justify-content: center;'>");
echo("<img src = '$URL_pic' width='550px' height='400px'>");
echo("</div>");
echo("<div style='color:red;font-family:Lucida Console;display: flex;justify-content: center;'>");
echo("<br><br>Caption: Location is $loc.");
echo("<br><br>Total images in Database is $count_Pics");
echo("</div>");
?>