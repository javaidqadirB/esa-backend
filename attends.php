<!DOCTYPE html>
<html lang="eng">
<head>

 <!--Main body and title of the webpage including paragraph too-->
        <title>Attends Form</title>

<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div> 
        <?php 

/*here im including my connection file in order to connect to the database*/
        include "db_connection.php";

/*here im including the validation file in order to validate the inputs in our forms*/
        include "validation.php";

/*used if and else statement to print out the inserted data*/
        if(isset($_POST['create'])){
        echo 'Data Submitted.' . "<br>";
            // creating variables and setting them to our form input names using the POST
        $mission_Id = $_POST["mission_Id"];
        $mission_name = $_POST["mission_name"];
        $no_mission = $_POST["no_mission"];
        $astronaut_id = $_POST["astronaut_id"];

// below delaring a variable sql, which will contain a query for the insertion into the database
        $sql = "INSERT INTO attends(mission_Id, mission_name, no_missions, astronaut_id) VALUES ($mission_Id, '$mission_name', $no_mission, '$astronaut_id')";
        
//using an if statement to run the query on the database
        if(!mysqli_query($connection, $sql)) {

// if the query fails or the connection to the database fails, the program should die and display an error message
        die("Error:" .mysqli_error($connection));
        }

// if succesfull print data inserted
        else{
            echo "Data inserted";
        }
    }
        ?>

<!--created the form for ATTENDS and linked to attends.php file  and created all the forms and fulfilled all the requirements needed-->
        <form action="attends.php" method="post">
        <div class="container">

        <div class="row">
        <div class="col-sm-3">
        <h1>Attends Form</h1>
        <p>Fill all the details with correct values</p>
        <hr class="mb-3">

        <label for="mission_id"><b>Mission ID</b></label>
        <input  class="form-control" type="integar" name="mission_id" required>

        <label for="mission_name"><b>Mission Name</b></label>
        <input  class="form-control" type="integar" name="mission_name" required>

        <label for="no_missions"><b>No Missions</b></label>
        <input  class="form-control" type="integar" name="no_missions" required>

        <label for="astronaut_id"><b>Astronauts ID</b></label>
        <input  class="form-control" type="integar" name="mission_id" required>
        <hr class="mb-3">

            <input class="btn btn-primary"  type="submit" name="create" value="SUBMIT">
        </div>
    </form>
</div>


