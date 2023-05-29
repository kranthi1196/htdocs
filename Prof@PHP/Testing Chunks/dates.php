<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates Application</title>
    <script></script>
    
    <script type="text/javascript">
		var my_var = [];
		var btn = document.createElement("DIV");
		document.body.appendChild(btn);
		btn.className = "deal__dates";
		$.each(my_var, function(index, value) {
			var btn1 = document.createElement("DIV");
			btn1.className = "deal__year";
			btn1.id = "deal__year_" + index;
			btn.appendChild(btn1);
			var btn2 = document.createElement("DIV");
			btn2.className = "deal__months";
			btn1.appendChild(btn2);
			for (var j = 0;j <= value.length; j++) {
				if(my_var[index][j] != undefined){
					if(j == 0){
						var btn3 = document.createElement("DIV");
						btn3.className = "deal__yearName";
						btn2.appendChild(btn3);
						var newStr1 = my_var[index][j].replace('~', ' ');
						btn3.innerHTML = newStr1;
					}else{
						var btn4 = document.createElement("DIV");
						btn4.className = "deal__month";
						btn2.appendChild(btn4);
						var dates1 = my_var[index][j].split("~");
						var myname = '<span> '+ dates1[0] + '</span><span> '+ dates1[1] +'</span>';
						var newStr = myname.replace(undefined, '');
						btn4.innerHTML = newStr;
					}
				}
			}
		});
</script>

</head>
<body>
<form method="POST" action="" id="">

<p class=""><h3 >DATES FORMAT</h3></p>
 <textarea name="text" id="text" style="width:1000px; height:300px" required>
 </textarea><br><br>
 <label>Contact No./DID </label><input type="text" name="didnum" id="num_input" style="width:500px; height:30px" required /><br><br>
<input type="submit" name="submit" value="submit" id="register" style="font-size:18px"/>
</form>
</body>
</html>


<?php

if(isset($_REQUEST['submit'])){

$text = $_REQUEST['text'];

//if(str_ends_with($text, 'pp.')) {
//str_replace('pp.', 'pp', $text);
//echo $text;
//echo '<pre>'.$text.'</pre>';  
//}

//$arr = explode('.', $text);
//$text1 = print_r($arr);
//foreach ($arr as $tex){

//echo $tex;

echo '<pre>'.$text.'</pre>';

//}
//echo '<pre>'.$text1.'</pre>';

}



?>