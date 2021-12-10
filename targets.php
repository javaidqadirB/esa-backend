<!DOCTYPE html>
<html lang="eng">
<head>
<!--Main body and title of the webpage including paragraph too-->
    <title>Targets Form</title>

<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div> 

<!--added back page button to go to the main page-->
<a href="index.php">Back to Main Page</a>

<?php 
//here im including my connection file in order to connect to the database
include "db_connection.php";

//here im including the validation file in order to validate the inputs in our forms
include "validation.php";

/*used if and else statement to print out the inserted data*/
    if(isset($_POST['create'])){
        echo 'Data Submitted.' . "<br>";

// creating variables and setting them to our form input names using the POST
        $Name = $_POST["name"];
        $FirstMission	 = $_POST["firstmission"];
        $Type	 = $_POST["type"];
        $Nomission	 = $_POST["nomission"];

// below delaring a variable sql, which will contain a query for the insertion into the database
        $sql = "INSERT INTO targets(Name, First_Mission, Type, No_mission) VALUES ('$Name', '$FirstMission', '$Type', $Nomission)";

//using an if statement to run the query on the database
        if(!mysqli_query($connection, $sql)) {

// if the query fails or the connection to the database fails, the program should die and display an error message
            die("Error:" .mysqli_error($connection));
        }
        else{

// if succesfull print data inserted
            echo "Data inserted";
        }
    }
    ?>

<!--created the form for TARGET and linked to target.php file  and created all the forms and fulfilled all the requirements needed-->
    <form action="targets.php" method="post">
        <div class="container">

        <div class="row">
        <div class="col-sm-3">
            <h1>Targets Form</h1>
            <p>Fill all the details with correct values</p>
            <hr class="mb-3">

        
            <label for="name"><b>Name</b></label>
            <input  class="form-control" type="text" name="name" required>

            <label for="firstmission"><b>First Mission</b></label>
            <input  class="form-control" type="text" name="firstmission" required>

            <label for="type"><b>Type</b></label>
            <input  class="form-control" type="text" name="type" required>

            <label for="nomission"><b>No Mission</b></label>
            <input  class="form-control" type="integer" name="nomission" required>
            <hr class="mb-3">

            <input class="btn btn-primary"  type="submit" name="create" value="SUBMIT">
        </div>
    </form>
</div>
