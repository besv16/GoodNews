<?php

require __DIR__.'/header.php';

$posts = [
  ['title' => 'Titel nummer 1', 'year' => 2016],
  ['title' => 'Titel nummer 2', 'year' => 2017],
  ['title' => 'Titel nummer 2', 'year' => 2017],
  ['title' => 'Titel nummer 2', 'year' => 2017],
  ['title' => 'Titel nummer 2', 'year' => 2017],
  ['title' => 'Titel nummer 2', 'year' => 2017],
  ['title' => 'Titel nummer 2', 'year' => 2017],
  ['title' => 'Titel nummer 2', 'year' => 2017],
  ['title' => 'Titel nummer 2', 'year' => 2017],
];

foreach ($posts as $post) {
  ?>

  <div id="title"><?php echo $post['title'];?></div>
  <div id="year"><?php echo $post['year'];?></div>

  <?php
}

require __DIR__.'/footer.php';
