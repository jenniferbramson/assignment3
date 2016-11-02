<?php 

  class ParentClass {
    private $breed;
    private $fame;

    public function __construct($breed, $fame) {
      $this->breed = $breed;
      $this->fame = $fame;
    }

    public function getBreed() {
      return $this->breed;
    }

    public function getFame() {
      return $this->fame;
    }

    public function speak() {
      return "Meow.";
    }
  }


