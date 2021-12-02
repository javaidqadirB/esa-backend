<!DOCTYPE html>
<html>
<head>
    <title>Targets Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div> 
<?php 
include "db_connection.php";
    if(isset($_POST['create'])){
        echo 'Data Submitted.' . "<br>";
        $id = $_POST["id"];
        $Name = $_POST["Name"];
        $FirstMission	 = $_POST["FirstMission"];
        $Type	 = $_POST["Type"];
        $Nomission	 = $_POST["Nomission"];


        $sql = "INSERT INTO targets(id, Name, First_Mission, Type, No_mission) VALUES ($id, '$FirstMission', $Type, $Nomission)";

        if(!mysqli_query($connection, $sql)) {
            die("Error:" .mysqli_error($connection));
        }
        else{
            echo "Data inserted";
        }
    }
    ?>
    <form action="targets.php" method="post">
        <div class="container">

        <div class="row">
        <div class="col-sm-3">
            <h1>Targets Form</h1>
            <p>Fill all the details with correct values</p>
            <hr class="mb-3">

            <label for="id"><b>ID</b></label>
            <input  class="form-control" type="integar" name="id" required>

            <label for="name"><b>Name</b></label>
            <input  class="form-control" type="text" name="name" required>

            <label for="firstmission"><b>First Mission</b></label>
            <input  class="form-control" type="text" name="firstmission" required>

            <label for="type"><b>Type</b></label>
            <input  class="form-control" type="integar" name="type" required>

            <label for="nomission"><b>No Mission</b></label>
            <input  class="form-control" type="text" name="nomission" required>
            <hr class="mb-3">

            <input class="btn btn-primary"  type="submit" name="create" value="SUBMIT">
        </div>
    </form>
</div>
