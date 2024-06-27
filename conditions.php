<?php

$age = 20;

if($age >= 18){
 echo 'You are old enough to vote';
}else{
    echo 'Sorry. You are not old enough to vote';
}

$time = date("H");

if($time < 12){
    echo "Good morning";
}else if($time < 17){
    echo "Good Afternoon";
}else{
    echo "Good night";
}