
<?php
$con = mysqli_connect("localhost","root","1234","ecommerce") or die(mysqli_error($con));
$email= $_POST['emailid'];
$password= $_POST['password'];
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);

$user_registration_query = "insert into user(Firstname,Lastname,Email,Pass) values('','','$email','$password')";
$user_registration_submit= mysqli_query($con, $user_registration_query) or 
die(mysqli_error($con));
echo 'user successfully inserted';
$select_query="SELECT Email,Pass FROM user";
$select_query_result= mysqli_query($con, $select_query)or 
die(mysqli_error($con));
if(mysqli_num_rows==0){
    echo 'no user available';
}
 else {
    mysqli_fetch_array($select_query_result);   
}
$_SESSION['emailid']=$email;
$_SESSION['password']=$password;
header('location:products.php');
?>        
        
        
        

        
        
        
        
        
      