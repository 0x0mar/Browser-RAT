<?php

class Model { // logic

  // Find out where we are so we can display the right page
  public function test()
  {
    return array(
      'test' => 'this is test data'
    );
  }

// Prepend ".." for send level folder structs  
  public function secondLevel()
  {
    return array(
      'level' => '..'
    );
  }

  // Return Author Information
  public function author_info()
  {
    // Author info
    return array(
      'first' => 'Christopher',
      'last' => 'Woodall'
    );    
  }
}

?>
