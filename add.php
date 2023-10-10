<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dbacrud");

    if(isset($_POST['submit']))
      {
         
          $name = $_POST['name'];
         $address = $_POST['address'];
         $mobile = $_POST['mobile'];

         $sql = "insert into student(name,address,mobile)values('$name','$address','$mobile')";


         if(mysqli_query($connection,$sql))
        {
            echo '<script>location.replace("intex.php")</script>';
        }
        else
        {
            echo"some thing error" . $connection->error;

        }
      }






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student crud applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
        <div class = "container">
            </div class = "row">
                </div calss = "col-md-9">
                <div class="card">
                <div class="card-header">
                    <h1> student crud applications</h1>                
                </div>
                <div class="card-body">
                
                <form action = "add.php" method="post">
                <div class="form-group">
                    <label for=>Name</label>
                    <input type="text" name = "name" class="form-control" placeholder="Enter name">
                </div> 

                <div class="form-group">
                    <label for=>Address</label>
                    <input type="text" name = "address" class="form-control" placeholder="Enter Address">
                </div>

                <div class="form-group">
                    <label for=>Mobile</label>
                    <input type="text"  name = "mobile" class="form-control" placeholder="Enter mobile">
                </div> 
                </br> 
                <input type="submit" class="btn btn-primary" name = "submit" value =" Register">
                </form>              



                                </div>



                                
                                </div>                





    
</body>
</html>