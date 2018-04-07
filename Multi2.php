<FONT FACE="Impact" SIZE=6 COLOR="Black">
<?php 
$n1=$_POST['nu1'];
$n2=$_POST['nu2'];

for($tabla=1; $tabla<=$n1; $tabla++)
{
	echo"<center><table border=2 cellsacing=10 width=100></center>";
	echo"<center><tr><th colspan=5> Tabla del $tabla </th></tr></center>";
	
	for($i=1; $i<=$n2; $i++)
 {
 	echo "<center><tr><td align=center>$tabla</td>
 	 <td align=center>x</td>
 	 <td align=center>$i</td>
 	 <td align=center>=</td>
 	 <td align=center></center>".($tabla*$i) . "</td>
 	 </tr>";
 }
 echo "</table> <br/>";
}

 ?>