<?php include ('login.php');
  echo ("<title>Lab 09 Question 3</title>");
  $sql = "SELECT count(*) FROM question1 WHERE pic_location LIKE '%Ontario%';";
  $result = $conn->query($sql);
  while($row = mysqli_fetch_array($result)) {
      $count_ON = $row['count(*)'];
  }
  if ($count_ON > 0){
    echo("<div style='color:red;font-family:Lucida Console;display: flex;justify-content: center;'>");
    echo ("<img src='toronto.jpg' width='550px' height='400px'>");
    echo("</div>");
    echo("<div style='color:red;font-family:Lucida Console;display: flex;justify-content: center;'>");
    echo("<br><caption>Location: Ontario is Found in Database. The subject is skyline.</caption><br><br>");
    echo("</div>");
  }
  else{
    echo("<h1 style='color: blue;'> No images from Ontario</h1>");
  }
?>