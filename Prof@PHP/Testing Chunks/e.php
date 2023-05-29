<?php
 echo "PHP Encoding & Decoding<br><br>";
// Program to illustrate base64_decode()
// function
$str = 'QW1pdCBEb2RpeWEgKEFEKQ==';
 
echo base64_decode($str).'<br>';
$str2 = 'QW1pdC5hZDFpNEB5YWhvby5jb20='.'<br>';
 
echo base64_decode($str2).'<br>';
$str3 = 'NzYwMDg5ODIxMA=='.'<br>';
 
echo base64_decode($str3).'<br>';

echo base64_decode("S3JhbnRoaUAxMTk2").'<br>';
echo base64_decode("98d34c1758b15b5a359b69c2b08c5767").'<br>';
echo base64_decode("6b02050d042b030407020f0a12091e1111450804451e00").'<br>';


?>
<br>
<br>

<?php
echo "Decoding the Text done here<br><br>";
$str = 'Prof.Brillie';
echo base64_encode($str).'<br>';

$str = '9640735588';
echo base64_encode($str).'<br>';

$str = 'kranthi.marikanti@gmail.com';
echo base64_encode($str).'<br>';
?>