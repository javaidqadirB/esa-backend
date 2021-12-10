<!DOCTYPE html>
<html lang="eng">
<head>
<!--Main body and title of the webpage-->
    <title>Astronauts Form</title>

<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<div> 

<!--added back page button to go to the main page-->
<a href="index.php">Back to Main Page</a>

<?php
/*here im including my connection file in order to connect to the database*/
include "db_connection.php";

/*here im including the validation file in order to validate the inputs in our forms*/
include "validation.php";

/*used if and else statement to print out the inserted data*/
    if(isset($_POST['create'])){
        echo 'Data Submitted.' . "<br>";
        $name = $_POST["name"];
        $nomission = $_POST["nomission"];

// below delaring a variable sql, which will contain a query for the insertion into the database
        $sql = "INSERT INTO astronaut(name, no_missions) VALUES ('$name', $nomission)";
 
//using an if statement to run the query on the database
        if(!mysqli_query($connection, $sql)) {
            die("Error:" .mysqli_error($connection));
        }
        else{
            echo "Data inserted";
        }
    }
    ?>

<!--created the form for ASTRONAUTS and fulfilled all the requirements needed-->
    <form action="astronauts.php" method="post">
        <div class="container">

        <div class="row">
        <div class="col-sm-3">
            <h1>Astronauts Form</h1>
            <p>Fill all the details with correct values</p>
            <hr class="mb-3">
<!-- <label for="astronaut_id"><b>Astronauts ID</b></label>
<input class="form-control" type="integer" name="mission_id" required> -->

            <label for="name"><b>Name</b></label>
            <input class="form-control" type="text" name="name" required>
            <label for="nomission"><b>No Mission</b></label>
            <input class="form-control" type="text" name="nomission" required>
            <hr class="mb-3">
            <input class="btn btn-primary"  type="submit" name="create" value="SUBMIT">
        
        </div>
        </div>
    </form>
</div>
</body>
</html>