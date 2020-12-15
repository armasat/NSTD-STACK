# NSTD-STACK
Non standard stack implementation class with internal iterator for PHP

## Description
The nstd_stack is a non standard implementation of a stack data structure with an internal iterator. The class provides the classic pop() and empty() methods for reading the stack, while also providing new abilities to read the stack without removing elements using the cycle() and end() methods. 

## Usage
```php
//include the nstd_stack class
include('nstd_stack.php');

//create new stack
$myStack = new nstd_stack();

//push items to the stack
$myStack->push("orange");
$myStack->push("yellow");
$myStack->push("blue");
$myStack->push("red");

// top() get the top-most element off the stack without removing it
$topItem = $myStack->top();

// pop() pop the top-most item off the stack
$popItem = $myStack->pop();

//print the stack items using the internal iterator cycle() and end() methods(preserves items in the stack)
while(!$myStack->end()){
  $item = $myStack->cycle();
  echo $item.PHP_EOL;
}

//print the stack items using the classic pop() and empty() methods
while(!$myStack->empty()){
  $item = $myStack->pop();
  echo $item.PHP_EOL;
}
```
### Further,
If you would like to check out another example, see the file driver.php. Feel free to reach out or contribute to the code, there is plenty more that could be added to this!
