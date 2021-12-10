<!DOCTYPE html>
<html lang="eng">
<head>

<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--title of the webpage-->
	<title>View mission</title>


</head>
<body>

<!--Creating the table for the forms-->
    <table border="1" width="100%">
    <div class="card-header">
    
<!--Added the heading at the web page-->
    <h1>Mission</h1>

<!--added back page button to go to the main page-->
<a href="index.php">Back to Main Page</a>

</div>

<tr>

<!--Creating column for the Destination-->
    <th>Destination</th>

<!--Creating column for the Launch Date-->
    <th>Lanuch Date</th>

<!--Creating column for the Mission Type-->
    <th>Mission Type</th>

<!--Creating column for the Crew Size-->
    <th>Crew Size</th>

<!--Creating column for the Target ID-->
    <th>Target ID</th>

</tr>
    <?php
            
/*here im including my connection file in order to connect to the database*/
            include ("db_connection.php");
            
// declaring a varialbe called sql and equaling it to show all of the data in mission table
            $sql="select * from mission";
            
// declaring a variable called run, which runs the function mysqli_query on the database
            $run=mysqli_query($connection, $sql);
            
// using a while loop function to loop through the run variable which is connected to the database
            while($data=mysqli_fetch_array($run)){
                
//declaring the variables which will display the fields
                $destination=$data['Destination'];
                $launch_date=$data['Launch_Date'];
                $type=$data['Type'];
                $crew_size=$data['Crew_Size'];
                $target_id=$data['Target_ID'];
                
//displaying the table using the variables declared. displaying in a table form using tags
                echo "<tr><td align='center'>$destination</td> <td align='center'>$launch_date</td><td align='center'>$type</td><td align='center'>$crew_size</td><td align='center'>$target_id</td></tr>";



            }
    ?>
</table>
</body>
</html>