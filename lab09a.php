<?php include ('login.php'); 
  $sql = "CREATE TABLE question1 (
    picNum INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    pic_subject VARCHAR(20) NOT NULL,
    pic_location VARCHAR(20) NOT NULL,
    pic_URL VARCHAR(20) NOT NULL,
    picDate TIMESTAMP
    );";
    if ($conn->query($sql) === TRUE) {
      echo "";
    }
  
    $conn->close();
    echo("<title>Lab09 Question1 </title>")
  ?>
  
  <?php include ('login.php'); 
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('view', 'Alberta', 'banff.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('walk', 'Quebec', 'quebecCity.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('skyline', 'Ontario', 'toronto.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('mountain', 'British Columbia', 'vancouver.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('lights', 'Yukon', 'northernLights.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('activity', 'Newfoundland', 'shore.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('Island', 'PEI', 'peiLighthouse.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('feild', 'Manitoba', 'feild.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('snow', 'Nunavat', 'snow.jpg'); ";
    $sql .= "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('highway', 'Nova Scotia', 'highway.jpg'); ";
    if ($conn->multi_query($sql) === TRUE) {
      echo "";
    }
    else {
      echo ("ERROR: " . $sql . "<br>" . $conn->error);
    }
  
    $conn->close();
  ?>
  
  <?php include ('login.php'); 
    $sql = "SELECT picNum, pic_subject, pic_location, pic_URL, picDate FROM question1";
    $result = $conn->query($sql);
    $r =  mysqli_query($connect, $sql);
    echo("<h1>This is the content of the table - Not sorted </h1>");
    echo("<br><hr><br>");
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
?>