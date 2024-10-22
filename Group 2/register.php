<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From user where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO user(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                
                // Set cookies for email and full name
            setcookie('userEmail', $email, time() + (86400 * 30), "/"); // 30 days
          
              setcookie('userName', "{$row['firstName']} {$row['lastName']}", time() + (86400 * 30), "/");
                
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];

    // Set cookies for email and full name
    setcookie('userEmail', $email, time() + (86400 * 30), "/"); // 30 days
    setcookie('userName', "{$row['firstName']} {$row['lastName']}", time() + (86400 * 30), "/"); // 30 days

   // Debugging line
   echo "Cookie set for userName: " . htmlspecialchars("{$row['firstName']} {$row['lastName']}");

    header("Location: grp2.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>