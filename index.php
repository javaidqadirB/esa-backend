<!DOCTYPE html>
<html>
<head>
    <title>ESA Backend Development</title>
    <p>ESA Backend Development Project</p>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
    h1{
  color: red;
  font-size: 50px;
  font-weight: bold;
  font-family: monospace;
  letter-spacing: 7px;
  cursor: pointer
}


p {
  text-shadow: 2px 2px 5px black;
  font-size: 55px;
  font-weight: bold;

}

h1{

    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border: solid goldenrod;
    box-shadow: greenyellow;

}

.container{
    width: 100;
    height: 100vh;
    background-image: url(background.png.png);
    background-position: center;
    background-size: cover;
    padding-left: 5%;
    padding-right: 5%;
    box-sizing: border-box;
    position: relative;
  
}

.container h1{
  border: round 2px goldenrod;
  background-color: black;
  
}


/* Top left text */
.top-left {
  position: absolute;
  top: 120px;
  left: 16px;
 
}

.top-left:hover{
  background-color: greenyellow;
  border: none;
  box-shadow: 5px 5px 10px #484848;
  transition: 0.5s;
}

</style>
</head>
<body>

<!--CARDS-->
<div class="container"></div>
<div class="top-left">
       
            <a href="astronauts.php">
              <h1>ASTRONAUTS</h1>
            </a>

         
            <a href="attends.php">
              <h1>ATTENDS</h1>
          </a>
          
 
         
            <a href="mission.php">
             <h1>MISSION</h1>
          </a>
          

         
            <a href="targets.php">
              <h1>TARGETS</h1> 
            </a>
            </div>
</body>
</html>