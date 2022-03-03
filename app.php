<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To do list</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <div class="add-task">
      <form action="index.php" method="post">
        <input type="text" name="title">
        <button name="add" type="submit">Add new Task</button>
      </form>
    </div>
    <?php
    foreach ($data as $val) { ?>
      <div class="valeur">
        <p> <?php echo $val; ?> </p>
        <div>
          <form action="index.php" method="post">
            <button name="delete" type="submit">x</button>
          </form>
        </div>
      </div>
    <?php
    }
    ?>

  </div>
</body>

</html>
