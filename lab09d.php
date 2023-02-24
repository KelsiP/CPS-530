<!DOCTYPE html>
    <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Lab 09 Question 4 </title>
        <h1>Question 4</h1>
        <form id="form1" method="post" action="form.php" style="background-color: whitesmoke;
            width: 600px;
            border: 15px solid lightblue;
            padding: 50px;
            margin-left: 20px;
            margin-top: 50px;">
            <label for="Images">Choose an Image:</label>
            <select name="images" id="images">
                <option name="newfound">shore</option>
                <option name="pei">Lighthouse</option>
                <option name="nova">Highway</option>
                <option name="quebec">City</option>
                <option name="ontario">Toronto Skyline</option>
                <option name="manitoba">Feild</option>
                <option name="alberta">Banff</option>
                <option name="bc">Vancouver</option>
                <option name="yukon">Northern Lights</option>
                <option name="nunavat">Nunavat</option>
            </select>
            <br><br>
            <label for="year">Year: </label>
            <input type="number" name="year" required/><br><br>
            <label for="location">Location: </label>
            <input type="text" name="loc" required/><br><br>

            <input type="submit" value="submit"/>

        </form>
    </head>
</html>