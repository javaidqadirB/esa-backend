<!DOCTYPE html>
<html lang="eng">
<head>

<!--Main body and title of the webpage -->
    <title>Missin Form</title>

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
        $Name= $_POST["Name"];
        $Destination = $_POST["Destination"];
        $Launch_Date = $_POST["Launch_Date"];
        $Type = $_POST["Type"];
        $Crew_Size = $_POST["Crew_Size"];
        $Target_I = $_POST["Target_I"];
       

        // below delaring a variable sql, which will contain a query for the insertion into the database
        $sql = "INSERT INTO mission(mission_Id, Name, Destination, Launch_Date, Type, Crew_Size, Target_ID
        ) VALUES ($mission_id, '$Name', $Destination, $Launch_Date, $Type, $Crew_Size, $Target_I)";
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

     <!--created the form for MISSION and linked to mission.php file  and created all the forms and fulfilled all the requirements needed-->
    <form action="mission.php" method="post">
        <div class="container">

        <div class="row">
        <div class="col-sm-3">
            <h1>Mission Form</h1>
            <p>Fill all the details with correct values</p>
            <hr class="mb-3">

            <label for="mission_id"><b>Mission ID</b></label>
            <input  class="form-control" type="integar" name="mission_id" required>

            <label for="name"><b>Name</b></label>
            <input  class="form-control" type="text" name="name" required>

            <label for="destination"><b>Destination</b></label>
            <input  class="form-control" type="integar" name="destination" required>

            <label for="launch_date"><b>Launch Date</b></label>
            <input  class="form-control" type="integar" name="launch_date" required>

            <label for="type"><b>Type</b></label>
            <input  class="form-control" type="text" name="type" required>

            <label for="crew_size"><b>Crew Size</b></label>
            <input  class="form-control" type="text" name="crew_size" required>

            <label for="target_id"><b>Target ID</b></label>
            <input  class="form-control" type="integar" name="Target_id" required>
            <hr class="mb-3">

            <input class="btn btn-primary"  type="submit" name="create" value="SUBMIT">
        </div>
    </form>
</div>

<!-- 
<?php 
echo $_POST['mission_id'];
?> -->

</body>
</html>



