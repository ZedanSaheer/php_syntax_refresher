<?php

for ($i = 0; $i < 10; $i++) {
    echo $i;
};

$x = 15;

while ($x < 10) {
    echo 'Number' . $x . '<br>';
};

$post = ['First Post', 'Second Post', 'Third'];

for ($i = 0; $i < count($post); $i++) {
    echo $post[$i];
};

//The above for loop simplified using foreach loop
foreach ($post as $index => $singlePost) {
    echo $index . $singlePost;
}
