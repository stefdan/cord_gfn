<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body style="background-color: #eee">
<div style="margin:100px 100px 100px 200px; padding:10px; border-style: solid; border-color: #fff;">
<form method="post">
<table>
<h2>PRIMZAHLEN:</h2>
<tr><td style="width: 50px;">
von: </td><td><input type="text" name="anfang" placeholder="der ersten"/></td>
</tr>
<tr><td style="width: 50px;">
bis: </td><td><input type="text" name="ende" placeholder="zur letzten Zahl"/></td>
</tr>
<tr>
<td>
&nbsp;
</td><td style="text-align: right"><input type="submit" /></td>
</tr>
</table>
</form>
<?php  
function Primzahl( $nummer )  
{  

for(  
$zahlen = 2;  
$zahlen*$zahlen <= $nummer;  
$zahlen++ )  
      
if( !($nummer % $zahlen) )  
return FALSE;  
return TRUE;  
}

@$anfang = $_POST['anfang'];  
@$ende = $_POST['ende'];

//echo '<table border=1>';
//echo gettype($anfang);
echo "<table>"."<tr>";
$counter1 = 1;
for 
( 
$zahlen = $anfang;  
$zahlen<$ende;  
$zahlen++
)   
// echo gettype($zahlen);

if 
(Primzahl($zahlen) == TRUE)
{ 

if 
($counter1 == 1) 
{
?>
<tr><td><?php echo $zahlen; ?>
</td><?php		
$counter1++;
} elseif ($counter1 == 10) {
?><td><?php echo $zahlen; ?></td>
<?php
$counter1 = 1;
} else {
?><td><?php echo $zahlen; ?></td>
<?php
$counter1++;
}

//echo "<td>"."$zahlen"."<td>";

}

echo "</tr>"."</table>";

?>
</div>
</body>
</html>