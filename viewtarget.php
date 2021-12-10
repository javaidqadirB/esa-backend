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

<!--Creating the table for the forms-->
    <table border="1" width="100%">
    <div class="card-header">
    
<!--Added the heading at the web page-->
    <h1>Target</h1>

<!--added back page button to go to the main page-->
    <a href="index.php">Back to Main Page</a>

</div>



<tr>

<!--Creating column for the ID-->
    <th>ID</th>

<!--Creating column for the Name-->
    <th>Name</th>

<!--Creating column for the First Mission-->
    <th>First Mission</th>

<!--Creating column for the Type-->
    <th>Type</th>

<!--Creating column for the No Mission-->
    <th>No Mission</th>
</tr>
    <?php
            
/*here im including my connection file in order to connect to the database*/
            include ("db_connection.php");
            
// declaring a varialbe called sql and equaling it to show all of the data in mission table
            $sql="select * from targets";
            
// declaring a variable called run, which runs the function mysqli_query on the database
            $run=mysqli_query($connection, $sql);
            
// using a while loop function to loop through the run variable which is connected to the database
            while($data=mysqli_fetch_array($run)){
                
//declaring the variables which will display the fields
            $id = $data["id"];
            $Name = $data["Name"];
            $FirstMission= $data["First_Mission"];
            $Type= $data["Type"];
            $Nomission= $data["No_mission"];
                
//displaying the table using the variables declared. displaying in a table form using tags
                echo "<tr><td align='center'>$id</td><td align='center'>$Name</td><td align='center'>$FirstMission</td><td align='center'>$Type</td><td align='center'>$Nomission</td></tr>";



            }
    ?>
</table>
</body>
</html>