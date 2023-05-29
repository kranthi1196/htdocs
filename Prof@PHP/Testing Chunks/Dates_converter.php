<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
if(isset($_REQUEST['submit'])){
    $dates = $_POST['dates'];
    
    
    /* if(str_contains($data, 'pp.')){
        $data = str_replace('pp.', '<div class="deal__year" id="deal__year_1"><div class="deal__months"><div class="deal__yearName">', $data);
        $data = str_replace('pp', '', $data);
        $data = str_replace('pp', '', $data);
        $data = str_replace('pp', '', $data); 
        
    } */
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates Converter</title>
</head>
<body>
    <center><h2>Dates Converter</h2></center>
    <center><textarea type="text" name="dates" id="" style="height: 250px; width:60%;"></textarea><br><br><br>
    <input type="button" name="submit" id="" value="submit" style="height: 35px; width:80px; font-size:18px;">
    </center>

    <?php echo $dates; ?>
</body>
</html>



