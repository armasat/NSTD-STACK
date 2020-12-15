<?php
class nstd_stack{
  private $stack;
  private $index;

  //construct stack
  public function __construct(){
      $this->stack = [];
      $this->index = 0;
  }

  //recursively print items in stack
  public function print(){
    print_r($this->stack);
  }

  //pop item off the stack
  public function pop(){
    if(count($this->stack)>0){
      $topItem = $this->stack[0];
      unset($this->stack[0]);
      $this->stack = array_values($this->stack);
      return $topItem;
    }else{
      return false;
    }
  }

  //get top most element in stack
  public function top(){
    $empty = (count($this->stack)==0);
    if(!$empty){
      return $this->stack[0];
    }else{
      return false;
    }
  }

  //push item to the stack
  public function push($item){
      array_unshift($this->stack,$item);
  }

  //clear items in the stack
  public function clear(){
    $this->stack = [];
    $this->index = 0;
  }

  //checks if the stack is empty
  public function empty(){
    $empty = (count($this->stack)==0);
      if($empty){
        return true;
      }else {
        return false;
      }
  }

  //reset the iterator index to 0
  public function restart(){
    $this->index = 0;
  }

  //increase the iterator index by 1
  public function iterate(){
    ++$this->index;
  }

  //get the iterator index value
  public function position(){
    return $this->index;
  }

  //get current value at iterator index
  public function current(){
    $empty = (count($this->stack)==0);
      if(!$empty){
        return $this->stack[$this->index];
      }
  }

  //returns the current item and iterates the index by 1
  public function cycle(){
    $currentItem = $this->current();
    $this->iterate();
    return $currentItem;
  }

  //checks if the item at the iterator index isset
  public function valid(){
    return isset($this->stack[$this->index]);
  }

  //check if the iterator index is <= max stack length
  public function end(){
    $end = ( ($this->index) == (count($this->stack)) );
    if($end){
      $this->restart();
      return true;
    }else{
      return false;
    }
  }
}
?>
