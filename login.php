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
 
$email=$_POST['email'];
$passward=$_POST['passward'];
 
$stmt=$conn->prepare("select * from student where email = ?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows > 0)
{
$data = $stmt_result->fetch_assoc();
if($data['passward'] =$passward){
echo "<script>window.open('gyms.html','_self')</script>";
}
else{
echo "  fild deltils invalid email or passward ";
}
}
else
{
echo "<h2>invalid email or password </h2>";
}
 }
?>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
body{
    margin: 0;
    padding: 0;
    background: url( https://thumbs.dreamstime.com/b/closeup-portrait-muscular-man-workout-barbell-gym-brutal-bodybuilder-athletic-six-pack-perfect-abs-shoulders-55122231.jpg) no-repeat;
    background-size: cover;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
 .first{
     width: 250px;
     top: 50px;
     left: 40%;
     position: absolute;
     color: white;
     margin: 10px;
     
      
 }
 .first h1{
    float: left;
    font-size: 40px;
    border-bottom: 6px solid rgb(16, 17, 16);
    margin-bottom: 50px;
     padding-bottom: 13px 0;
 }
 .text{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 2px solid rgb(11, 12, 11);
 }
</style>
<script src="https://use.fontawesome.com/3cd8e57c08.js"></script>
<body>
    <div class="first">
         
            <h1>Login</h1>
        <form action="" method="post"> 
        <div class="text">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text"  name="email" placeholder="username">
        </div>

        <div class="text"> 
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <input type="password" name="passward" placeholder="password">
        </div>
        
             <input type="submit" value="login" name="submit">
<a  href="#" >reset password</a>
            <hr>
            <h3>Create new account <a href="sign.php">signup</a></h3> 
        </form>
    </div>
</body>
</html>