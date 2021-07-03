<?php
echo "Hello";
echo "\n";
//variable
$name = "Bangladesh";
$age = 12;
$question = "How are you?";
$word = "age";

echo 'Hello '.$name;
echo "\n";

echo 'Hello $name';
echo "\n";
echo "Hello {$name}";

echo "\n";

echo $$word;

echo "\n";

echo "Hello {$name}, {$question}";