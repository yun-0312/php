<?php
function outputNumber($a) {
    echo "引数の値は" . $a . "です";
    return;
}
outputNumber(3);

function outputHello() {
    echo "Hello world";
}
outputHello();

function text($number1, $number2) {
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 4);
echo $total;

function num($num1, $num2) {
    $value = $num1 * $num2;
    return $value;
}
echo num(5, 1);
echo "<br />";

function point($score1, $score2, $score3) {
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo "合計点は{$total}なので合格です";
    } else {
        echo "合計点は{$total}なので不合格です";
    }
}
point(0, 100
,100);
echo "<br />;

function triangle($bottom, $height) {
    $tri = $bottom * $height / 2;
    return $tri;
}

function square($bottom, $height) {
    $squ = $bottom * $height;
    return $squ;
}

function trapezoid($top, $bottom, $height) {
    $tra = ($top + $bottom) * $height / 2;
    return $tra;
}

echo triangle(2, 5);
echo "<br />";
echo square(2, 5);
echo "<br />";
echo trapezoid(5, 3, 10);