<?php
$x = rand(250, 420) /10;
if($x > 0){
    echo "<div style='color:red;'>$x Тепло!</div>";
}
if($x = 0){
    echo "<div style='color:orange;'>$x Не мороз и не тепло</div>";
}
if($x < 0){
    echo "<div style='color:blue;'>$x Мороз!</div>";
}