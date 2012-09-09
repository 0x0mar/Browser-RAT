<?php

class Controller {
  public $load;			// assign value or class instance
  public $model;
  
  function __construct()
  {
    // Runs automattically when a class is instanciated
    // Create new instances of both load class and model class
    $this->load = new Load();	// $this->load->view('');	
    $this->model = new Model();
    
    // determine what page we are on
    
    if(strpos($_SERVER["SCRIPT_NAME"],"addon"))
    {
      $this -> addon();
    }
    else if(strpos($_SERVER["SCRIPT_NAME"],"system"))
    {
      $this -> system();
    }
    else if(strpos($_SERVER["SCRIPT_NAME"],"stats"))
    {
      $this -> stats();
    }  
    else if(strpos($_SERVER["SCRIPT_NAME"],"login"))
    {
      $this -> login();
    }
    //thrid level has to go before 2nd level for the time being

    else if(strpos($_SERVER["SCRIPT_NAME"],"config"))
    {
      $this -> config();
    }
    else if(strpos($_SERVER["SCRIPT_NAME"],"modules"))
    {
      $this -> modules();
    }
    //first level has to go last
    else
    {  
      $this -> home();
    }
  }
  

  
  function home()
  {
    $data = $this->model->author_info();
    $this->load->template( $data, 'main.php', "firstLevel");
    $this->load->view( $data ); // in view/ directory
    // to load new view $this->load->view('new.php', $data);
    // db access and logic in models and is returned to controller
  }

  function login()
  {
    $data = $this->model->test();
    $this->load->template( $data, 'login.php', "secondLevel");
    $this->load->view( $data );
  }

  function stats()
  {
    $data = $this->model->test();
    $this->load->template( $data, 'stats.php', "secondLevel");
    $this->load->view( $data );
  }

  function modules()
  {
    $data = $this->model->test();
    $this->load->template( $data, 'modules.php', "secondLevel");
    $this->load->view( $data );
  }

  function config()
  {
    $data = $this->model->test();
    $this->load->template( $data, 'config.php', "secondLevel");
    $this->load->view( $data );
  }

  function addon()
  {
    $data = $this->model->test();
    $this->load->template( $data, 'addon.php', "thirdLevel");
    $this->load->view( $data );
  }

  function system()
  {
    $data = $this->model->test();
    $this->load->template( $data, 'system.php', "thirdLevel");
    $this->load->view( $data );
  }

}
