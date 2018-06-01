<?php

$a = null;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;
//Mostra se um valor for nulo, pula para o próximo.