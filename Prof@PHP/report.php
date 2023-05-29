<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
    <?php
    $First_Name=$_POST['first_name'];
    $Last_Name=$_POST['last_name'];
    $Email=$_POST['email'];
    $When_it_happend=$_POST['whenithappened'];
    $How_Long=$_POST['howlong'];
    $How_Many=$_POST['howmany'];
    $Describe=$_POST['describe'];
    $What_did_they_do=$_POST['whatdidthey'];
    $Fang=$_POST['fang'];


    echo '<h1> Thanks for Submitting this Form </h1>.<br><br>';

    /*echo '<table>
        <tr> <td>Candidate Name:</td> <td>$First_Name</td></tr>
        <tr> <td>Sur Name:</td> </tr>
        <tr></tr>
    
    </table>'*/
    echo 'Your First Name is '.$First_Name.'<br>';
    echo 'Your Last Name is '.$Last_Name.'<br>';
    echo 'Your Email id is '.$Email.'<br>';
    echo 'Your Fang Seen Status is: '.$Fang.'<br>';
   
    
    ?>
</body>
</html>