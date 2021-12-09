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
    ul{
  color: black;
  font-size: 35px;
  font-weight: bold;
  font-family: monospace;
  letter-spacing: 7px;
  cursor: pointer  
  
}

/*added hover effect on the links*/

ul::after{
    content:"" ;
    position: absolute;
    background-color: red;
    height: 3px;
    width: 0;
    left: 0;
    bottom: -10px;
}

/*added hover effect on the links*/
ul:hover::after{
    width: 100%;
}
/*customizing of main Paragraph*/
p {
  text-shadow: 2px 2px 5px black;
  font-size: 55px;
  font-weight: bold;
  padding-left: 25%;

}

/*changed font size of all the headings and added border and box-shadows*/
ul{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
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
    position: relative;
  
}

.container ul{
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
    background-color: yellow;
    border: solid;
    box-shadow: 5px 5px 10px #484848;
    transition: 0.5s;
}

nav ul{
    float: left;
    margin-left: 40px;
}

a{
    color: black;
}

</style>
</head>
<body>
    <!--in this main body, created all the option or button by pressing them we can easily fill up the form-->


<div class="container"></div>
<div class="top-left">

<nav>
    <ul>
        <!--added ASRTONAUTS php file and button for it-->
        <li><a href="astronauts.php">Astronaut</a></li>

        <!--added VIEW ASTRONAUTS php file so we can easily get the data or users and button for it-->
        <li><a href="viewastronauts.php">View Astronauts</a></li> <br>

        <!--added MISSION php file and button for it-->
        <li><a href="mission.php">Mission</a></li>

        
        <!--added VIEW MISSION php file so we can easily get the data or users and button for it-->
        <li><a href="viewmission.php">View Mission</a></li><br>

        <!--added ATTENDS php file and button for it-->   
        <li><a href="attends.php">Attends</a></li>

        <!--added  View ATTENDS php file and button for it-->
        <li><a href="viewattends.php">View Attends</a></li><br>

        <!--added TARGETS php file and button for it-->
        <li><a href="targets.php">Targets</a></li>

        <!--added  View Target php file and button for it-->
        <li><a href="viewtarget.php">View Targets</a></li>
        
    </ul>
        </nav>
            </div>
                </body>
                    </html>