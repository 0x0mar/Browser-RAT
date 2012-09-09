<?php

class Load {

// for setting up template
  function template( $data = null, $file_name, $directory = null )
  {
    // includes for directories
    if($directory == "firstLevel")
    {
      if( is_array($data) )
      {
       extract($data);
      }
      include 'templates/' . $file_name; // remove ../
    }
    else if($directory == "secondLevel")
    {
      if( is_array($data) )
      {
       extract($data);
      }
      include '../templates/' . $file_name;
    }
    else if($directory == "thirdLevel")
    {
      if( is_array($data) )
      {
       extract($data);
      }
      include '../../templates/' . $file_name;
    }
  }

// for extracting data
  function view( $data = null )  // $this->load->view;
  {
     if( is_array($data) ){
       extract($data);
   // Take items from socitive array and extract varibles
   //  Example:
   //          array(
   //                $first => 'jeff',
   //                $last => 'wayne');
   // Instead of using $data[$first] it will now be $first
      }
  }
} // END class Load
