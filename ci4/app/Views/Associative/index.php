<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title;?></title>
</head>
<body>
    <h3><?= $page_body;?></h3>
    <h4>Subjects List :</h4>
    <ul><?Php
        if(count($subjects)>0/*!empty($subjects)*/){
        foreach ($subjects as $sub){
            echo "<li>$sub</li>";
            }
         }
         else{
            echo "Sorry! No Records are Found.";
         }
        ?>
    </ul>

</body>
</html>