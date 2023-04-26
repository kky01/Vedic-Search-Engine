<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedas</title> 
    <style>
        input{
            width : 650px; 
            height : 40px; 
            border - radius : 5px; 
            border : 2px solid green; 
        } 

        #searchbtn{
            width : 150px; 
            height : 35px; 
            border - radius : 10px; 
            border : 2px solid  blue; 
            color : solid blue; 
            font-size : 20px; 
        } 
        #searchbtn:hover {
            background-color : blue;
            color:white;
        }
    </style>
</head>
<body> 
    <br><br><br><br>    
     <center><img src="searchlogo.jpg" width = "25%" ></center>  
     <form action="result.php" method ="GET">
     <br> 
     <center><input type="text" name = "search" ></center>
     <br> <br>
     <center><input type="submit" name = "searchbtn" id ="searchbtn" value = "Search" ></center>
    </form>
    </body>
</html>