<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>SIGN UP</title>
    <script language="javascript">
        function verif(){
            if(document.getElementById("tx1").value==""){alert("please enter your username");return false;}
            if(document.getElementById("pass1").value==""){alert("please enter your password");return false;}
            if(document.getElementById("pass2").value==""){alert("please enter your password");return false;}
            if(document.getElementById("email").value==""){alert("please enter your Eamil");return false;}
            if(document.getElementById("email").value.indexOf('@')==-1){alert("email incorrect");return false;}
            if(document.getElementById("pass1").value!=document.getElementById("pass2").value){alert("please enter your same password");return false;}
        }


    </script>
</head>
<body>
    
    <form  action="signupprojet.php" method="POST"><h1>Signup</h1>
    <input type="text"   id="tx1"  name ="user" placeholder="username">
    <input type="email"   id="email"  name = "email" placeholder="Email">
    <input type="password"   id="pass1"  name = "pass" placeholder="Password">
    <input type="password"  id="pass2" name = "pass2" placeholder="Confirm Password">
    <input type="submit"  name="submit" value="signup" onclick="verif()"> 
    </form>
    <?php 
if(isset($_POST['submit'] )){
$fullname=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];

$conn = mysqli_connect('localhost','root','','projetdev');

$sql= "INSERT INTO inscription(username, email, password) VALUES ('$fullname','$email','$pass')";
mysqli_query($conn,$sql);}

?>



    
</body>
</html>
