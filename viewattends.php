<!DOCTYPE html>
<html lang="eng">
<head>

<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--title of the webpage-->
	<title>View Attends</title>


</head>
<body>
<table border="1" width="100%">
<div class="card-header"><h1>Attends</h1></div>
<tr>

<th>Mission ID</th>
<th>Mission Name</th>
<th>No Mission</th>
<th>Astronaut ID</th>
</tr>
    <?php
            
/*here im including my connection file in order to connect to the database*/
            include ("db_connection.php");
            
// declaring a varialbe called sql and equaling it to show all of the data in mission table
            $sql="select * from attends";
            
// declaring a variable called run, which runs the function mysqli_query on the database
            $run=mysqli_query($connection, $sql);
            
// using a while loop function to loop through the run variable which is connected to the database
            while($data=mysqli_fetch_array($run)){
                
                
//declaring the variables which will display the fields
            $mission_Id = $_POST["mission_Id"];
            $mission_name = $_POST["mission_name"];
            $no_mission = $_POST["no_mission"];
            $astronaut_id = $_POST["astronaut_id"];
                
//displaying the table using the variables declared. displaying in a table form using tags
            echo "<tr><td align='center'>$destination</td> <td align='center'>$launch_date</td><td align='center'>$type</td><td align='center'>$crew_size</td><td align='center'>$target_id</td></tr>";

            }
        
    ?>
</table>
</body>
</html>