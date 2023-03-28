 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="test";

$conn = mysqli_connect($servername, $username, $password,$database);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$username=$_POST['username'];
 
$email=$_POST['email'];
$password=$_POST['password'];
 
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
 
 
 
$sql=" insert into student(username, email,password, phoneno,address )
values('$username','$email','$password','$phoneno', '$address')";
if(mysqli_query($conn,$sql))
{
echo "<script>alert('new record inserted')</script>";
echo "<script>window.open('login.php','_self')</script>";
  
}
else
{
echo "error:".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    background: url(  https://www.muscleandfitness.com/wp-content/uploads/2019/02/1109-hammer-curl-biceps-abs.jpg?quality=86&strip=all) no-repeat;
    background-size: cover;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.first{
     width: 400px;
     top: 50px;
     left: 40%;
     position: absolute;
     color: white;
     margin: 10px;
      
 }
 .first1{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
     
    
    border-bottom: 2px solid white;
 }
  
  
</style>
<link rel="stylesheet" href="">
 
<body>
    <div class="first">
        <h2>Register the website</h2>
         <form action="" method="POST">
            <div class="first1">
                 
               username: <input type="text" name="username" id="" placeholder="username">
            </div><br>
            <div class="first1">
                
                email:<input type="email" name="email" placeholder="email">
            </div><br>
            <div class="first1">
                 
                password:<input type="password" name="password" placeholder="password">
            </div><br>
            <div class="first1">
                 
                phone no:<input type="number" name="phoneno" placeholder="phone no">
            </div><br>
            <div class="first1">
                
               Address:<input type="text" name="address" placeholder="current address">
            </div><br>
             >
            <div class="first1">
                 <input type="submit" value="submit" name="submit">
            </div><br>

         </form>
         <h3>already Register <a href="login.php">login</a></h3>
             
              
         
    </div>
</body>
</html>