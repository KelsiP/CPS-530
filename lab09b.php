<?php include ('login.php');
  echo ("<title>Lab 09 Question 2</title>");
  echo("<h3>This is Sorted by Time and Date in Descending order!</h3>");
  echo("<br>");
  $sql = "SELECT * FROM question1 ORDER BY picDate DESC;";
  $result = $conn->query($sql);
  $r =  mysqli_query($connect, $sql);
    echo("<hr><br>");
    if ($result->num_rows > 0) {
      echo ("<table style='border: 1px solid black; margin-left: auto; margin-right: auto;'>");
      echo ("<tr style='border: 1px solid black;'>");
      echo ("<th style='border: 1px solid black;'>#</th>");
      echo ("<th style='border: 1px solid black;'>Subject</th>");
      echo ("<th style='border: 1px solid black;'>Location</th>");
      echo ("<th style='border: 1px solid black;'>URL</th>");
      echo ("<th style='border: 1px solid black;'>Date</th>");
      echo ("</tr>");
      while($row = $result->fetch_assoc()){
        echo ("<tr>");
        echo("<div style='color:red;font-family:Lucida Console;'>");
        echo ("<td style='border: 1px solid black;'>" . $row["picNum"] . "</td><td style='border: 1px solid black;'>"
        . $row["pic_subject"] . "</td><td style='border: 1px solid black;'>" 
        . $row["pic_location"] . "</td><td style='border: 1px solid black;'>" 
        . $row["pic_URL"] . "</td><td style='border: 1px solid black;'>" . $row["picDate"] ."</td>" . "</td>");
        echo("</div>");
        echo ("</tr>");
      }
    }
    else {
      echo "No results.";
    }
    echo ("</table>");
  
    $conn->close();
  
  
  /*echo("<h3>Picture Number --- Subject --- Location --- URL --- Date </h3> <br><br>");
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo("<div style='color:red;font-family:Lucida Console;'>");
      echo $row["picNum"] . "---" . $row["pic_subject"] . "---" . $row["pic_location"] . "---" . $row["pic_URL"]  . "_---" . $row["picDate"] ."<br>";
      echo("</div");
    }
  }
  else {
    echo "No results.";
  }

  $conn->close();*/
?>