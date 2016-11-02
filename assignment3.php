<?php 
  require_once('ParentClass.php');
  require_once('ChildClass.php');

  $si = new ChildClass("Si", "siamese", "tan");
  $grumpy = new ChildClass("Eeyore", "grumpy", "grey");
  $origGrumpy = clone($grumpy);
  $ed = new ChildClass("Ed Sheeran", "shorthair", "red");
  $ed->addProfPic("./img/ed.jpeg");

  $im = $grumpy->getImage();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>

    <link rel="stylesheet" href="assignment3.css">
  </head>
  <body>

    <div id="title">
      <h1>Cats</h1>
    </div>

    <section>
      <ul>
        <li>
          <? if(isset($im)) : ?>
            <p>See my awesome pic?</p>
            <img src=<?= $grumpy->getImage(); ?> >
          <? else : ?>
            <p>Oh no! I don't have a pic. Here, let's add one.</p>
            <?= $grumpy->addProfPic("./img/grumpy.jpeg"); ?>
            <img src=<?= $grumpy->getImage(); ?> >
          <? endif; ?>
        </li>
        <li><?= $grumpy; ?></li>
        <li>I am tired of this boring hair. I'm going to dye my hair blue.</li>
        <li><?= $grumpy->dyeHair("blue"); ?></li>
        <li>Now I have <?= $grumpy->getHairColor() ?> hair.</li>
        <li>People keep thinking I'm sad cuz I'm called Eeyore. I'm changing my name to 'Pink Panther'.</li> 
        <li><?= $grumpy->changeName("Pink Panther"); ?></li>
        <li>Ahhhh, much better. Here, let me reintroduce myself.</li>
        <li><?= $grumpy; ?></li>
      </ul>
    </section>

    <section>
      <ul>
        <li><img src= <?= $ed->getImage(); ?> ></li>
        <li><?= $ed; ?></li>
      </ul>   
    </section>

    <section>
      <ul>
        <li><?= $si; ?></li>
        <li id="hide"><?= $am = clone($si); ?></li>
        <li><?= $am->changeName("Am"); ?></li>
        <li>I cloned myself and now there's TWO of us and we are twins! Look:</li>
        <li><?= $am->getName(); ?></li>
        <li><?= $si->getName(); ?></li>
        <li><?= $si->speak(); ?></li>
        <li>Note: I can meow because my parent class can because cats can meow.</li>
      </ul>   
    </section>

  </body>
</html>