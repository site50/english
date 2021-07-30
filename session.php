
<?php
$link = mysqli_connect('localhost','j1136241','j1136241','j1136241') 
or die("Ошибка " . mysqli_error($link)); 
$query ="SELECT * FROM session";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{$rows = mysqli_num_rows($result); // количество полученных строк
echo "<table><tr><th>Id</th><th>Session_Expires</th><th>Session_Data</th></tr>";
for ($i = 0 ; $i < $rows ; ++$i)
{$row = mysqli_fetch_row($result);
echo "<tr>";
for ($j = 0 ; $j < 3 ; ++$j) 
	echo "<td>$row[$j]</td>";
echo "</tr>"; }
echo "</table>";
mysqli_free_result($result);}// очищаем результат
mysqli_close($link);
?>