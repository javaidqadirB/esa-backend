<!DOCTYPE html>
<html lang="eng">
  <!--Main body and title of the webpage including paragraph too-->
<head>
    <title>ESA Backend Development</title>
    <p>ESA Backend Development Project</p>
    
  
<!--linked bootstrap for customizing the texts and appearence, I have directly downloaded css and js files-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!--here i have done all the designing or css work-->
<style>

/*designing ang arrangement of all the headings and paragraphs by using style.css and js files*/
    h1{
  color: black;
  font-size: 35px;
  font-weight: bold;
  font-family: monospace;
  letter-spacing: 7px;
  cursor: pointer
}

/*customizing of main Paragraph*/
p {
  text-shadow: 2px 2px 5px black;
  font-size: 55px;
  font-weight: bold;

}

/*changed font size of all the headings and added border and box-shadows*/
h1{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border: solid goldenrod;
    box-shadow: greenyellow;

}

/*customized the container and set into the screen*/
.container{
    width: 100;
    height: 90vh;
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

/*done the hover effect on cards*/
.top-left:hover{
    background-color: skyblue;
    border: solid;
    box-shadow: 5px 5px 10px #484848;
    transition: 0.5s;
}

</style>
</head>
<body>

<!--in this main body, created all the option or button by pressing them we can easily fill up the form-->

<div class="container"></div>
<div class="top-left">

<!--added ASRTONAUTS php file and button for it-->
    <a href="astronauts.php">
    <h1>ASTRONAUTS</h1>
</a>

<!--added ATTENDS php file and button for it-->       
    <a href="attends.php">
    <h1>ATTENDS</h1>
</a>
          
 <!--added MISSION php file and button for it-->
    <a href="mission.php">
    <h1>MISSION</h1>
</a>
          

<!--added TARGETS php file and button for it-->
    <a href="targets.php">
    <h1>TARGETS</h1>
</a> 

<!--added  View TARGETS php file and button for it-->
<a href="viewtarget.php">
    <h1>View TARGETS</h1>
</a> 

<!--added VIEW MISSION php file so we can easily get the data or users and button for it-->
    <a href="viewmission.php">
    <h1>View Mission</h1>
</a>

<!--added  View ATTENDS php file and button for it-->
<a href="viewattends.php">
    <h1>View Attends</h1>
</a> 

<!--added VIEW ASTRONAUTS php file so we can easily get the data or users and button for it-->
            <a href="viewastronauts.php">
              <h1>View Astronauts</h1>
            </a>


            </div>
</body>
</html>