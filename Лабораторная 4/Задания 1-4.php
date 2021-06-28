<!DOCTYPE html>
<html>
    <head> 
    </head>
    <body>
	
	<img src="Задания 1-6.png" width="50%"></br></br>
	
	
        <?php

//Сумма цифр числа
        echo "<b>Задание 1</b> </br>";
      $x="123";
      $arr= str_split($x); //приводим к массиву
echo "Сумма всех цифр числа $x = ",array_sum($arr),'</br></br></br>';



//Количество повторяющихся цифр в числе
echo "<b>Задание 2</b> </br>";
        $number = "442158755745";
        $search = "5";
        $count = substr_count($number, $search);//возвращает заданную часть исходной строки
    echo "Цифра $search встречается в числе $number $count раз </br></br></br>";



//Нахождение чисел, которые делятся на 5 (20 .. 45) и суммы этих чисел.
    echo "<b>Задание 3</b> </br>";
    $sum1=0;
    for ($i=20; $i<=45; $i++)
    {if (fmod($i, 5) == 0) 
    {$sum1=$sum1+$i;}      
    }
echo "Сумма чисел 20...45, которые без остатка делятся на 5 = $sum1.</br></br></br>";



// Массив из случайных значений, места максимального и минимального поменяли местами
 echo "<b>Задание 4</b> </br>";
$arr4 = array(5);
for ($i1=0; $i1<=5; $i1++)
{$arr4[$i1]=rand(-10, 10);
}
print_r($arr4);
$max1=max($arr4);
$min1=min($arr4);
echo "</br>Максимальное значение = ".$max1."</br>";
echo "Минимальное значение = ".$min1."</br>";
$key_max = array_search($max1, $arr4); 
$key_min= array_search($min1, $arr4); 
$p=0;
$p=$arr4[$key_max];
$arr4[$key_max]=$arr4[$key_min];
$arr4[$key_min]=$p;
print_r($arr4);  



     ?>
    </body>
</html>

