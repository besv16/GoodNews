<pre><?php

  if (isset($_POST['email'])) {
      // Sanitizing (m.h.a filter_var()-funktionen) - filtrera ut data som vi inte vill ha
      // argument: 1. vad vill vi filtrera? 2. hur ska vi bearbeta denna data?
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);


      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Not valid";
      } else {
          echo $email;
      }
  }

?></pre> <!-- line breaks with "pre" -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="form.php" method="post">
    <input type="text" name="email" />
    <button type="submit" value="Submit" height="60px"></button>
  </form>
</body>
</html>
