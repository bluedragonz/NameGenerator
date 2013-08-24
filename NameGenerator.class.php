<?php

class NameGenerator {

  private $_glue;

  public function __construct($glue = ' ') {

    $this->_first = array("Sarah", "Aaliyah", "Anna", "Arianna", "Ellie", "Steven", "Mary");
    $this->_last = array("Moore", "Martin", "Jackson", "Thompson", "White", "Young", "Hall");
    $this->_glue = $glue;
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
