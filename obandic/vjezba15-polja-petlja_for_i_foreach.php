<?php

//6.7 Zadatak 1.

$imena = ['Vita', 'Andrea', 'Marjeta', 'Karla', 'Ema'];

foreach ($imena as $value) {
    echo $value.'<br>';
}

//*******************************************************************************
echo '<hr>';
unset($imena);
//6.7. Zadatak 2. - Ne znam jesam li dobro shvatila tekst ovog zadatka.

$imena = ['0' => 'Vita', 'ime5' => 'Andrea', 'ime4' => 'Marjeta', '3' => 'Karla', '4' => 'Ema'];

echo '<pre>';
print_r($imena);
echo '</pre>';

//*******************************************************************************

echo '<hr>';
unset($imena);
//6.7. Zadatak 3.

$imena = ['Vita', 'Andrea', 'Marjeta', 'Karla', 'Ema'];
sort($imena);

$x = count($imena);
for ($i = 0; $i < $x; $i++) {
    echo $imena[$i].'<br>';
}

//*******************************************************************************

echo '<hr>';
unset($imena);
//6.7. Zadatak 4.

$imena = ['Šimac' => 'Vita', 'Maretić' => 'Andrea', 'Vrcan' => 'Marjeta', 'Borzić' => 'Karla', 'Radanović' => 'Ema'];
ksort($imena);

foreach ($imena as $key => $value) {
    echo 'Ključ '.$key.' ima vrijednost '.$value.'<br>';
}

//*******************************************************************************

echo '<hr>';
//6.7. Zadatak 5.

for ($i = 1; $i <= 100; $i++) {
    $polje[$i] = $i;
}

foreach ($polje as $value) {
    echo $value.' ';
}
