<form action="Lab_2_Опалев_П-811.php" method="get">
	N: <input type="text" name="name1">
	<input type="submit" name="submit" value="Отправить" />
</form>
<?php
$n=$_REQUEST['name1'];
$ar1=array();
for ($i=0; $i < $n; $i++) {
	$ar1[]=$i*2;
}
echo "1. ";
foreach ($ar1 as $key => $value) {
	echo "$value ";
}
echo "<br>";

$ar2=array(26,17,136,12,79,15);
foreach ($ar2 as $value) {
	$result+=$value*$value;
}
echo "2. $result<br>";

echo "3. ";
$ar3=array(1,2,3,4,5,6,7,8,9);
foreach ($ar3 as $value) {
	echo "$value";
}
echo "<br>";

$arr=array(4,2,5,19,13,0,10);
foreach ($arr as $key) {
	$count+=1;
}
echo "4. Количество элементов массива ARR = $count<br>";

$ar5 = array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
echo "5. ";
foreach ($ar5 as $value) {
	if ($value == 'Февраль') {
		echo "<b>$value</b> ";
		$month=$value;
	}
	else echo "$value ";
}
echo "<br>$month<br>";

$ar6=array();
echo "6. ";
for ($i=0; $i < $n; $i++) {
	$ar6[]=rand(1,100);
}
foreach ($ar6 as $value) {
	echo "$value ";
}
echo "<br>";
$p=1;
foreach ($ar6 as $key => $value) {
	if ($value > 0 && ($key % 2 == 0))
		$p*=$value;
	if ($value > 0 && ($key % 2 == 1))
		echo "$value ";
}
echo "<br>Произведение парных индексов и больше нуля = $p<br>";

echo "<br>7.";
$ar7=array($title=array('Мандарины','Молоко','Батон'),$description=array('Фрукты','Молочные изделия','Хлебобулочные изделия'),$price=array(20,50,30));
foreach ($title as $key => $value) {
	echo "<h2>$value</h2> ";
}
foreach ($description as $key => $value) {
	echo "<p>$value</p> ";
}
foreach ($price as $key => $value) {
	echo "<a href=\"Lab_2.php\">$value</a> ";
}

?>