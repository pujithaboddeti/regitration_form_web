<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$suc_id=$_POST['sucid'];
$campus=$_POST['campus'];
$mobile_num=$_POST['mnum'];
$email=$_POST['email'];
$country=$_POST['country'];
$location=$_POST['cloc'];
$city=$_POST['city'];
$degree=$_POST['degree'];
$skills=$_POST['skills'];

$user='root';
$pw='';
$db='registration';
$con=mysqli_connect('localhost',$user,$pw,$db) or die("unable to connect");
if($con)
{
$sql="insert into `register`(firstname,lastname,suc_id,campus,mobile,email,country,location,city,degree,skills)
values('$first_name','$last_name','$suc_id','$campus','$mobile_num','$email','$country','$location','$city','$degree','$skills')";
$res=mysqli_query($con,$sql);
if($res)
echo "data inserted sucessfully";
else
die(mysqli_error($con));
}
else{
die(mysqli_error($con));
}
} 
?>


