<?php

	class ChildClass extends ParentClass {

    private $name;
    private $breed;
    private $fame;
    private $image;
    private $hairColor;

    public function __construct($name, $breed, $hairColor) {
      $this->name = $name;
      $this->breed = $breed;
      if ($this->getBreed() === "siamese") {
        $this->fame = "We are siamese if you please! My great grandmother was in Lady and the Trump. ...Wait, sorry, I meant Lady and the Tramp!";
      } elseif ($this->getBreed() === "grumpy") {
        $this->fame = "My second cousin is in allllllllll the memes. You should watch 'Grumpy Cat's Worst Christmas Ever'. Secretly we are Snowshoe Siamese, but you can just think of us as grumpy.";
      } elseif ($this->getBreed() === "shorthair") {
        $this->fame = "Some of us are the gingers of cats, but Garfield made the gingers among us famous. Others are plain old black and white like Tom in Tom and Jerry.";
      } else {
        $this->fame = "I am probably famous too, but Jennifer was too lazy to write out any more of these.";
      }
      $this->hairColor = $hairColor;
      $this->image = null;
    }

    public function addProfPic($imageLink) {
      $this->image = $imageLink;
    }

    public function changeName($name) {
      $this->name = $name;
    }

    public function getOldBreed() {
      return parent::getBreed();
    }

    public function getOldFame() {
      return parent::getFame();
    }

    public function getBreed() {
      return $this->breed;
    }

    public function getFame() {
      return $this->fame;
    }

    public function getImage() {
      return $this->image;
    }

    public function getName() {
      return $this->name;
    }

    public function getHairColor() {
      return $this->hairColor;
    }

    public function dyeHair($color) {
      echo "<!-- Dyeing hair to " . $color . "-->";
      $this->hairColor = $color;
    }

    public function getOwner() {
      return $this->owner;
    }

    public function __toString() {
      $who = "Hi, my name is " . $this->getName() . " and I am a " . $this->getBreed() . " cat.";
      $fashion = "I have a dazzingly " . $this->getHairColor() . " coat.";
      $history = "I have a craaazy history. I might've been a tiger in the past. <br>" . $this->fame;

      return $who . "<br>" . $fashion . "<br>" . $history . "<br>";
    }
		
	}
