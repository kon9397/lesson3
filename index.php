<?php

// 11.1
echo '<h1>11.1</h1>';

$myArray = [37, 0, 50, 46, 34, 46, 0, 13];
var_dump($myArray);

echo '<hr>';

echo '<h1>11.2</h1>';

$myArray = [];
for($i = 0; $i < 10; $i++) {
    $number = rand(0, 100);
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.3 (а)</h1>';

$myArray = [];
for($i = 0; $i < 15; $i++) {
    $number = rand(0, 100) / 100;
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.3 (б)</h1>';

$myArray = [];
for($i = 0; $i < 15; $i++) {
    $number = rand(220, 230) / 10;
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.3 (в)</h1>';

$myArray = [];
for($i = 0; $i < 15; $i++) {
    $number = rand(0, 100) / 10;
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.3 (г)</h1>';

$myArray = [];
for($i = 0; $i < 15; $i++) {
    $number = rand(-500, 500) / 10;
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.3 (д)</h1>';

$myArray = [];
for($i = 0; $i < 15; $i++) {
    $number = rand(0, 10);
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.4</h1>';

$myArray = [];
for($i = 0; $i < 12; $i++) {
    $number = rand(1630, 1900) / 10;
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.5</h1>';

$myArray = [];
for($i = 0; $i < 20; $i++) {
    $number = rand(500, 1000) / 10;
    $myArray[] = $number;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.6</h1>';

$myArray = [];
for($i = 1; $i <= 12; $i++) {
    $myArray[] = $i;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.7</h1>';

$myArray = [];
for($i = 20; $i >= 1; $i--) {
    $myArray[] = $i;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.8 (а)</h1>';

$myArray = [];
for($i = 0; $i < 15; $i++) {
    $number = rand(0, 10);
    $myArray[] = $number;
}

for($i = 0; $i < count($myArray); $i++) {

    for($j = 0; $j < $i+1; $j++) {
        if($myArray[$i] > $myArray[$j]) {
            $temp = $myArray[$i];
            $myArray[$i] = $myArray[$j];
            $myArray[$j] = $temp;
        }
    }
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.8(б)</h1>';

$myArray = [];
for($i = 0; $i < 15; $i++) {
    $number = rand(0, 10);
    $myArray[] = $number;
}

for($i = 0; $i < count($myArray); $i++) {

    for($j = 0; $j < $i+1; $j++) {
        if($myArray[$i] < $myArray[$j]) {
            $temp = $myArray[$i];
            $myArray[$i] = $myArray[$j];
            $myArray[$j] = $temp;
        }
    }
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.9(а)</h1>';

$myArray = [];
$a = rand(1, 10);
$p = rand(1, 10);
$myArray[0] = $a;
for($i = 1; $i <= 10; $i++) {
    $myArray[$i] = $myArray[$i-1] + $p;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.9(б)</h1>';

$myArray = [];
$a = rand(1, 20);
$z = rand(1, 20);
$myArray[0] = $a;
for($i = 1; $i <= 20; $i++) {
    $myArray[$i] = $myArray[$i-1] * $z;
}

var_dump($myArray);

echo '<hr>';

echo '<h1>11.9(в)</h1>';

$myArray = [];
$myArray[0] = rand(1, 10);
$myArray[1] = $myArray[0];

for($i=2; $i < 12; $i++) {
    $myArray[$i] = $myArray[$i-2] + $myArray[$i-1];
}

var_dump($myArray);

echo '<hr>';
echo '<h1>11.10</h1>';

$n = rand(0, 999999);
echo 'Число:' . $n . '<br>';
$numberStr = (string) $n;
$arrayNumber = str_split($numberStr);
$arrayNumber = array_reverse($arrayNumber);

for($i = 0; $i < count($arrayNumber); $i++) {
    $arrayNumber[$i] = (int) $arrayNumber[$i];
}

var_dump($arrayNumber);
echo '<hr>';
echo '<h1>11.11</h1>';

$myArray = [];

for($i = 0; $i < 20; $i++) {
    $myArray[$i] = rand(0, 100);
    for($j = 0; $j < $i; $j++) {
        if($myArray[$i] === $myArray[$j]) {
            $myArray[$i] = rand(0, 100);
        }


    }
}

var_dump($myArray);

echo '<hr>';
echo '<h1>11.12(а)</h1>';

$myArray = [];

$b = 300;
$i = 0;

while($i < 20) {
    $b++;
    if($b % 13 === 0 or $b % 17 === 0) {
        $myArray[$i] = $b;
        $i++;
    }
}

var_dump($myArray);

echo '<h1>11.12(б)</h1>';

$myArray = [];

$i = 0;

while($i < 30) {
    $b = rand(1, 30);

    if($b % $b === 0 or $b % 1 === 0) {
        $myArray[$i] = $b;
        $i++;
    }

}

var_dump($myArray);

?>

<hr>
<h1>1.13</h1>
<?php
    $myArray = [];
    for($i = 0; $i < 30; $i++) {
        $myArray[] = rand(1, 100);
    }
?>
<form method="post">
    <p>Массив: <?php var_dump($myArray); ?></p>
    <p><label for="index">Введите индекс</label></p>
    <input type="text" name="index" id="index">
    <button>Получить</button>
</form>
<p>Ваш значение: <?= $myArray[$_POST['index']] ?></p>
<hr>
<?php

echo '<h1>11.14</h1>';

for($i = 0; $i < count($myArray); $i++) {

    for($j = 0; $j < $i+1; $j++) {
        if($myArray[$i] > $myArray[$j]) {
            $temp = $myArray[$i];
            $myArray[$i] = $myArray[$j];
            $myArray[$j] = $temp;
        }
    }
}
var_dump($myArray);
echo '<hr>';

echo '<h1>11.36</h1>';

$myArray = [];
for($i = 0; $i < 30; $i++) {
    $myArray[] = rand(-1000, 1000);
}

echo 'а)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] >= 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<br>';
echo 'б)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] <= 100) {
        echo $myArray[$i] . ' ';
    }
}

echo '<hr>';


echo '<h1>11.38</h1>';

$myArray = [];
for($i = 0; $i < 30; $i++) {
    $myArray[] = rand(0, 1000);
}

echo 'а)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] >= 10 AND $myArray[$i] <= 99) {
        echo $myArray[$i] . ' ';
    }
}

echo '<br>';
echo 'б)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] >= 100 AND $myArray[$i] <= 999) {
        echo $myArray[$i] . ' ';
    }
}

echo '<hr>';

echo '<h1>11.39</h1>';

$myArray = [];
for($i = 0; $i < 30; $i++) {
    $myArray[] = rand(0, 1000);
}

echo 'а)';
for ($i = 0; $i < count($myArray); $i++) {
    if($i % 2 === 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<br>';
echo 'б)';
for ($i = 0; $i < count($myArray); $i++) {
    if($i % 3 === 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<hr>';

echo '<h1>11.40</h1>';

$myArray = [];
for($i = 0; $i < 30; $i++) {
    $myArray[] = rand(-1000, 1000);
}

echo 'а)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] >= 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<br>';
echo 'б)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] < 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<hr>';

echo '<h1>11.41</h1>';

$myArray = [];
for($i = 0; $i < 30; $i++) {
    $myArray[] = rand(-1000, 1000);
}

echo 'а)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] %2 === 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<br>';
echo 'б)';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] % 2 !== 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<hr>';

echo '<h1>11.42</h1>';

$myArray = [];
for($i = 0; $i < 30; $i++) {
    $myArray[] = rand(-1000, 1000);
}

for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] % 10 === 0) {
        echo $myArray[$i] . ' ';
    }
}

echo '<hr>';

echo '<h1>11.43</h1>';

$myArray = [];
for($i = 0; $i < 30; $i++) {
    $myArray[] = rand(0, 15);
}
echo 'Не было осадков в таких числах: ';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] === 0) {
        echo $i . ' ';
    }
}

echo '<h1>11.44</h1>';

$myArray = [];
for($i = 0; $i < 20; $i++) {
    $myArray[] = rand(0, 38);
}
echo  'Номера неудачников чемпионата: ';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] < 3) {
        echo $i . ' ';
    }
}


echo '<hr>';

echo '<h1>11.44</h1>';

$myArray = [];
for($i = 0; $i < 20; $i++) {
    $myArray[] = rand(0, 38);
}
echo  'Номера неудачников чемпионата: ';
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] < 3) {
        echo $i . ' ';
    }
}


echo '<hr>';