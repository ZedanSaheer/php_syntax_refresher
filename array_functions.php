 <?php

   $fruits = ['apple', 'orange', 'mango'];

   //Array length
   // echo count($fruits);

   //Search in array
   //Returns boolean result
   // var_dump(in_array('apple', $fruits));

   //Add elements into the array
   $fruits[] = 'grape';
   array_push($fruits, 'pears', 'rasberry');

   //Add elements into front of array
   array_unshift($fruits, 'orange');

   //Remove elements from array
   array_pop($fruits);
   //Remove elements from front
   array_shift($fruits);
   //Remove elements from specific index
   unset($fruits[2]);

   //Split array into two chunks
   $chunked_array = array_chunk($fruits, 2);

   //Concatenate arrays into one array

   $arr1 = [1, 2, 3];
   $arr2 = [4, 5, 6];

   $arr3 = array_merge($arr1, $arr2);

   //Spread operator concatenation
   $arr4 = [...$arr1, ...$arr2];

   $b = ['red', 'orange'];
   $a = ['apple', 'orange'];

   //Arrays are combined as keys and values
   $c = array_combine($a, $b);

   //Returns an array containing the keys
   $keys = array_keys($c);
   // print_r($keys);

   //Flips the keys with values and values with keys
   $flipped = array_flip($c);

   $numbers = range(0, 99);

   // print_r($numbers);

   $newNumbers = array_map(function ($number) {
      return "Number $number";
   }, $numbers);

   // print_r($newNumbers);

   $lessThanSomeNumber = array_filter($numbers, fn ($number) => $number <= 10);

   print_r($lessThanSomeNumber);

   $sum = array_reduce($numbers,fn($carry,$number)=>$carry + $number);

   print_r($sum);
