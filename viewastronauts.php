<!DOCTYPE html>
<html lang="eng">
<head>

<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    
<!--title of the webpage-->
	<title>View Astronaut</title>
</head>

<body>
<table border="1" width="100%">
<div class="card-header"><h1>Astronouts</h1></div>
<tr>
    <th>Name</th>
<th>No of Missions</th>
</tr>

    <?php

/*here im including my connection file in order to connect to the database*/
            include ("db_connection.php");

// declaring a varialbe called sql and equaling it to show all of the data in mission table
            $sql="select * from astronaut";

// declaring a variable called run, which runs the function mysqli_query on the database
            $run=mysqli_query($connection, $sql);

 // using a while loop function to loop through the run variable which is connected to the database
            while($data=mysqli_fetch_array($run)){

//declaring the variables which will display the fields
            $name=$data['name'];
            $no_missions=$data['no_missions'];

//displaying the table using the variables declared. displaying in a table form using tags
            echo "<tr><td align='center'>$name</td> <td align='center'>$no_missions</td></tr>";



            }

    ?>
</table>
</body>
</html>