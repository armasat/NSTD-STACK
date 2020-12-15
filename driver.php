<?php
include('nstd_stack.php');

echo "Let's create a stack and add some colors to it with push()...".PHP_EOL;
sleep(4);
// create stack
$myStack = new nstd_stack();

// push a few values to the stack
echo "push red".PHP_EOL;
sleep(2);
$myStack->push("red");
echo "push blue".PHP_EOL;
sleep(2);
$myStack->push("blue");
echo "push yellow".PHP_EOL;
sleep(2);
$myStack->push("yellow");
echo "push brown".PHP_EOL;
sleep(2);
$myStack->push("brown");


echo "Let's pop off the most recent item placed in the stack and print it...".PHP_EOL;
sleep(4);
// pop the most recent item off the stack
$item = $myStack->pop();
// Let's print this value
echo $item.PHP_EOL;

//print the rest of the stack
echo "Let's print the rest of the stack...".PHP_EOL;
sleep(4);
$myStack->print();

//clear out the stack
echo "Let's clear out the stack...".PHP_EOL;
sleep(4);
$myStack->clear();

//check if the stack is empty
echo "Let's check if the stack is empty...".PHP_EOL;
sleep(4);
if($myStack->empty()){
  echo "The stack is empty".PHP_EOL;
}else{
  echo "The stack is not empty".PHP_EOL;
}

//push some more items to the stack
echo "Let's push some more items to the stack...".PHP_EOL;
sleep(4);
echo "push car".PHP_EOL;
sleep(2);
$myStack->push("car");
echo "push bus".PHP_EOL;
sleep(2);
$myStack->push("bus");
echo "push plane".PHP_EOL;
sleep(2);
$myStack->push("plane");
echo "push train".PHP_EOL;
sleep(2);
$myStack->push("train");

echo "Lets print out that stack using the internal iterator methods cycle() and end()".PHP_EOL;
sleep(4);
//method 1:
while(!$myStack->end()){
  $item = $myStack->cycle();
  echo $item.PHP_EOL;
  sleep(2);
}

echo "Let's print the stack with the classic pop() until empty() technique".PHP_EOL;
sleep(4);
//method 2:
while(!$myStack->empty()){
  $item = $myStack->pop();
  echo $item.PHP_EOL;
  sleep(2);
}

//check if the stack is truly empty
if($myStack->empty()){
  echo "The stack is now empty! The benefit to the internal iterator is you can preserve the stack while also reading it.".PHP_EOL;
}

exit();
?>
