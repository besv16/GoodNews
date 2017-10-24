<?php

declare(strict_types=1);

require __DIR__.'/header.php';
require __DIR__.'/data.php';
require __DIR__.'/functions.php';


foreach ($posts as $post) {
  // 
  // $newArray = [];
  // array_push($newArray, $post['date']);

  ?>

  <article class="post">
    <div id="title"><?php echo $post['title'];?></div>
    <div id="content"><?php echo $post['content'];?></div>
    <div id="bottom-info">
      <div class="info"><?php echo $post['author']['fullname'];?></div>
      <div class="info"><?php echo $post['date'];?></div>
      <div class="info"><img src="<?php echo $heart_src; ?>" width="12px" height="auto"></img><?php echo " " . $post['likes']; ?></div>
    </div>
  </article>

  <?php

}


require __DIR__.'/footer.php';
