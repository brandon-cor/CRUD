<?php include 'config/connection.php'; ?>
<?php include 'insert.php'; ?>
<?php include 'delete.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Create a Blog Post</title>
</head>

<body>

  <?php
  $sql = 'SELECT * FROM blogs';
  $result = mysqli_query($conn, $sql);
  $blog = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>

  <form method="POST" action="<?php echo htmlspecialchars(
  	$_SERVER['PHP_SELF']
  ); ?>">
    <?php
    $rand = rand();
    $_SESSION['rand'] = $rand;
    ?>

    <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
    <label for='title'>Title:</label><br>
    <input type="text" id="title" name="title" placeholder="Enter your title"><br><br>

    <label for="lname">Description:</label><br>
    <input type="text" id="description" name="description" placeholder="Enter your description"><br><br>

    <label for="lname">Blog:</label><br>
    <textarea class="form-control" id="blog" name="blog" placeholder="Enter your blog!"></textarea>
    <input style="display: block; margin-top: 1em;" type="submit" value="Submit" name="submit">
    <br>
  </form>


<?php foreach ($blog as $item): ?>
<?php echo 'Blog post: ' . $item['id']; ?>
<br>
<?php echo $item['title']; ?>
<br>
<?php echo $item['description']; ?>
<br>
<?php echo $item['blog']; ?>
<br>
<?php echo '<button><a href="?deleteid=' .
	$item['id'] .
	'">Delete</a></button>'; ?>


<hr>
<?php endforeach; ?>

</body>

</html>