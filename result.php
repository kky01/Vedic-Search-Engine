
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Result By Vedas</title> 
    <style>
        #searchfield{
            width:500px; 
            height: 35px; 
            border-radius:5px;  
            border: 1px solid green ; 
        }
        #gobtn{
            width:100px; 
            height: 39px; 
            border-radius:5px;  
            border: 1px solid green ; 
            background-color : white; 
            font-size : 17px;  
        } 
        #gobtn:hover{ 
            background-color :green; 
            color: white;  
            
        }
    </style>
</head>
<body>
    <form action="" method =" GET">
        <table border = "0" width = "100%" bgcolor = "f2f2f2">
            <tr>
                <td  width = "10%">
                    <a href="index.php"><img src="searchlogo.jpg" width = "100%"></a>
                </td> 
                <td>
                    <input type="text" name ="" id= "searchfield">
                    <input type="submit" name ="" value = "GO!" id= "gobtn">

                </td>
            </tr>
        </table>  
        <table border ="3" >
            <tr>
        <?php
           include("connection.php");   
           if(isset($_GET['seachbtn'])){
            $search = $_GET['search']; 

            if($search ==""){
                echo "Please Write Something in Search Box"; 
                exit(); 
            }

            $query = "select * from add_website where website_keywords like '%$search%'"; 
            $data = mysqli_query($conn, $query); 

            if(mysqli_num_rows($data) < 1){
                echo "No result Found"; 
                exit(); 
            } 
            echo "<a href ='#' style='margin-left:105px;'> More Images For $search </a>";

            while( $row = mysqli_fetch_array($data)){   
                echo "<td> <img src= '$row[4]' width = '200px;'></td> ";
            }
           }
        ?> 
        <tr> 
    </form>
</body>
</html>