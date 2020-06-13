<?php

// substr ( string $string , int $start [, int $length ] ) : string
// Возвращает подстроку строки string, начинающейся с start символа по счету и длиной length символов.

$str = substr("Philipp", 0, -2);
var_dump($str);