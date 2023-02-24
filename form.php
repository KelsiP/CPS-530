<?php include('login.php');
$image_update = $_POST['images'];
$year_update = $_POST['year'];
$location_update = $_POST['loc'];

$sql = "CREATE TABLE question1 (
    picNum INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    pic_subject VARCHAR(20) NOT NULL,
    pic_location VARCHAR(20) NOT NULL,
    pic_URL VARCHAR(20) NOT NULL,
    picDate TIMESTAMP
    );";
echo ("<title>Lab09 Form</title>");
echo("<div style='color:red;font-family:Lucida Console;display: flex;justify-content: center;'>");
if ($image_update == "shore"){
    echo("<img src='shore.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('activity', $location_update, 'shore.jpg'); ";
} 
else if ($image_update == "Lighthouse"){
    echo("<img src='peiLighthouse.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('Island', $location_update, 'peiLighthouse.jpg'); ";
}
else if ($image_update == "Highway"){
    echo("<img src='highway.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('highway', $location_update, 'highway.jpg'); ";
}
else if ($image_update == "City"){
    echo("<img src='quebecCity.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('walk', $location_update, 'quebecCity.jpg'); ";
}
else if ($image_update == "Toronto Skyline"){
    echo("<img src='toronto.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('skyline', $location_update, 'toronto.jpg'); ";
}
else if ($image_update == "Feild"){
    echo("<img src='feild.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('feild', $location_update, 'feild.jpg'); ";
}
else if ($image_update == "Banff"){
    echo("<img src='banff.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('view', $location_update, 'banff.jpg'); ";
}
else if ($image_update == "Vancouver"){
    echo("<img src='vancouver.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('mountain', $location_update, 'vancouver.jpg'); ";
}
else if ($image_update == "Northern Lights"){
    echo("<img src='northernLights.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('lights', $location_update, 'northernLights.jpg'); ";
}
else if ($image_update == "Nunavat"){
    echo("<img src='snow.jpg' width='550px' height='400px'>");
    $sql = "INSERT INTO question1 (pic_subject, pic_location, pic_URL)
    VALUES ('snow', $location_update, 'snow.jpg'); ";
}
echo("</div>");
echo("<div style='color:red;font-family:Lucida Console;display: flex;justify-content: center;'>");
echo("<caption> <br><br>Image is: $image_update <br><br></caption>");
echo("</div>");
echo("<div style='color:red;font-family:Lucida Console;display: flex;justify-content: center;'>");
echo("<caption>This image is from $year_update and the Location of the picture is: $location_update <br><br></caption>");
echo("</div>")
?>