<!DOCTYPE html>
<html>
<head>
    <title>Attends Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div> 
    <?php 
include "db_connection.php";
    if(isset($_POST['create'])){
        echo 'Data Submitted.' . "<br>";
        $mission_Id = $_POST["mission_Id"];
        $mission_name = $_POST["mission_name"];
        $no_mission = $_POST["no_mission"];
        $astronaut_id = $_POST["astronaut_id"];

        $sql = "INSERT INTO attends(mission_Id, mission_name, no_missions, astronaut_id) VALUES ($mission_Id, '$mission_name', $no_mission, '$astronaut_id')";

        if(!mysqli_query($connection, $sql)) {
            die("Error:" .mysqli_error($connection));
        }
        else{
            echo "Data inserted";
        }
    }
    ?>
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


