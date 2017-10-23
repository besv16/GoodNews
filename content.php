<?php

require __DIR__.'/header.php';

$posts = [
  [
  'title' => 'DeLorean Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Beatrice Svensson', 'ID' => 0],
  'date' => '2017-10-23',
  'likes' => 2
  ],
  [
  'title' => 'Doctor Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Kajsa Taipale', 'ID' => 1],
  'date' => '2017-10-20',
  'likes' => 3
  ],
  [
  'title' => 'Batman Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Filip Peterson', 'ID' => 2],
  'date' => '2017-10-10',
  'likes' => 3
  ],
  [
  'title' => 'Hodor Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Emma Alborn', 'ID' => 3],
  'date' => '2017-10-11',
  'likes' => 4
  ],
  [
  'title' => 'Star Trek Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Henrik Bielsten', 'ID' => 4],
  'date' => '2017-10-13',
  'likes' => 3
  ],
  [
  'title' => 'Awesome Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Beatrice Svensson', 'ID' => 0],
  'date' => '2017-10-23',
  'likes' => 2
  ],
  [
  'title' => 'Star Trek Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Henrik Bielsten', 'ID' => 4],
  'date' => '2017-10-13',
  'likes' => 3
  ],
  [
  'title' => 'Lorem Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Kajsa Taipale', 'ID' => 1],
  'date' => '2017-10-20',
  'likes' => 3
  ],
  [
  'title' => 'Bacon Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Emma Alborn', 'ID' => 3],
  'date' => '2017-10-11',
  'likes' => 4
  ],
  [
  'title' => 'Awesome Ipsum',
  'content' => 'Bacon ipsum dolor amet cupim turkey frankfurter shankle picanha jerky porchetta short ribs tri-tip landjaeger. Tri-tip drumstick ribeye, cow frankfurter pork loin brisket burgdoggen kevin biltong spare ribs boudin. Short loin pastrami cupim ball tip, doner ribeye picanha brisket pork belly tri-tip tenderloin turducken salami bresaola. Tri-tip t-bone capicola cupim short loin chicken turducken meatloaf pork belly fatback shank kielbasa meatball corned beef pork loin. Cow ball tip swine shankle chuck pork chop t-bone boudin biltong flank turducken fatback rump short loin tri-tip.',
  'author' => ['fullname' => 'Filip Peterson', 'ID' => 2],
  'date' => '2017-10-10',
  'likes' => 3
  ],

];

$heart_src = 'http://localhost/htdocs/GoodNews/img/heart.png';

foreach ($posts as $post) {

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
