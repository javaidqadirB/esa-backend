<!DOCTYPE html>
<html lang="eng">
<head>

<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--title of the webpage-->
	<title>View Target</title>


</head>
<body>
<table border="1" width="100%">
<div class="card-header"><h1>Target</h1></div>
<tr>

<th>ID</th>
<th>Name</th>
<th>First Mission</th>
<th>Type</th>
<th>No Mission</th>
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
            $id = $_POST["id"];
            $Name = $_POST["Name"];
            $FirstMission= $_POST["FirstMission"];
            $Type= $_POST["Type"];
            $Nomission= $_POST["Nomission"];
                
//displaying the table using the variables declared. displaying in a table form using tags
                echo "<tr><td align='center'>$destination</td> <td align='center'>$launch_date</td><td align='center'>$type</td><td align='center'>$crew_size</td><td align='center'>$target_id</td></tr>";



            }
    ?>
</table>
</body>
</html>