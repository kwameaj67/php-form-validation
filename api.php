<?php

include 'db_connection.php';

$conn = OpenConnection();



//validation 
 function postValidation(){
if(!isset($_POST["firstname"]) || empty($_POST["firstname"])){
    echo "Enter firstname <br> ";
   
}
    if (isset($_POST["lastname"]) || empty($_POST["lastname"]))
    {
        echo "Enter lastname <br> ";    
    }
if(isset($_POST["studentID"]) || empty($_POST["studentID"]))
{
    echo "Enter a studentID";
    
}
 if(isset($_POST["email"]) || empty($_POST["email"]))
{
    echo "Email is required. Enter an email";
  
}
if(isset($_POST["password"]) || empty($_POST["password"]) || isset($_POST["repassword"]) || empty($_POST["repassword"]))
{
    echo "Password doesnt match! <br>";
    exit();
}
                             }
   postValidation();
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$studID = $_POST["studentID"];
$email = $_POST["email"];
$password = $_POST["password"];
$re_password = $_POST["repassword"];

// function checkvalidation ($firstname,$lastname,$studID,$email,$password,$re_password){
// }

//email
// $emptyemail = empty($email);

//     $filter_email = filter_var($email, FILTER_VALIDATE_EMAIL);
// if(!$filter_email){
//     $formaterr = "Invalid email format";
//     echo $formaterr;
//     exit();
// }
//  if($emptyemail){
//     $emailerr = "Email is required";
//     echo $emailerr;
//     exit();
// }

//  if($password !== $re_password)
// {
//     $passworderr= "Your password does not match! <br>";
//     echo $passworderr;
//     exit();
// }
//  if(empty($email) || empty($firstname) || empty($lastname) || empty($studID)|| empty($email) || empty($password) || empty($re_password))
// {
//     $fieldserr = "You did not fill all the fields!";
//     echo $fieldserr;
//     exit();
// } 

//query goes here
$sql = "INSERT into user_info (firstname,lastname,studentid,email,password) VALUES ('$firstname','$lastname','$studID','$email','$password')";

if($conn->multi_query($sql)){
    echo "New record is added successfully";
}
else
{ 
 echo "Error" .$sql ."<br>".$conn->error;
 }

echo " Connected Successfully";


CloseConnection($conn); 



