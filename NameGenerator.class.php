<?php

class NameGenerator {

  private $_glue;

  public function __construct($glue = ' ') {

    $this->_first = array("Sarah", "Aaliyah", "Anna", "Arianna", "Ellie", "Steven", "Mary",
    "Merlin", "Martha", "Stewart", "Claire", "Shannon", "Michelle", "Chad", "Betty", "Heather",
    "Leona", "Mallory,", "David", "Larry", "Richard", "Damion", "Brandon", "Carl", "Amanda");
    
    $this->_last = array("Moore", "Martin", "Jackson", "Thompson", "White", "Young", "Hall",
    "Gallagher", "Way", "Fortini", "Giovani", "Fay", "Morgan", "Simpson", "Rutledge", "Stark",
    "Herring", "Fields", "Tyson", "Wagner", "Rivera", "Chambers", "Cash", "Hogan", "Weeks");
    
    $this->_glue = $glue;
  }
  
  function __destruct() {
  }

  public function next() {
    $first = $this->_first[array_rand($this->_first)];
    $last = $this->_last[array_rand($this->_last)];

    return $first . $this->_glue . $last;
  }

}

$obj = new NameGenerator();
echo $obj->next();

?>
