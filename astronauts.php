<!DOCTYPE html>
<html>
<head>
    <title>Astronauts Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div> 
<?php
include "db_connection.php";
    if(isset($_POST['create'])){
        echo 'Data Submitted.' . "<br>";
        $name = $_POST["name"];
        $nomission = $_POST["nomission"];

        $sql = "INSERT INTO astronaut(name, no_missions) VALUES ('$name', $nomission)";

        if(!mysqli_query($connection, $sql)) {
            die("Error:" .mysqli_error($connection));
        }
        else{
            echo "Data inserted";
        }
    }
    ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        //alert('Hello');
       sweetalert2.fire({  
            'title': 'Hello World',
            'text': 'Thank you for using ESA-Backend',
            'type': 'Successfully',

        })
    });
   
</script>
</body>
</html>