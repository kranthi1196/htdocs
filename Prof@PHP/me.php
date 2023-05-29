<?php
$conn=mysqli_connect("localhost","root","","regi");
if(!$conn){
die('connection failed ' .mysqli_connect_error());
}
if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$number=$_POST['number'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$education=$_POST['education'];
 $image=$_POST['image'];
$sql="INSERT INTO details (`name`,`phone`,`email`,`number`,`gender`,`date`,`education`,`image`) VALUES('$name','$phone','$email','$number','$gender','$date','$education','$image')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo 'data cannot inserted into the table';

}
else{
    echo 'data was inserted into the table successfully';
}
}
$query ="SELECT * FROM details";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>