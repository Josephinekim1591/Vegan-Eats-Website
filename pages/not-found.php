<?php
$page_title = 'Not Found';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Vegan Eats</title>

  <link rel="stylesheet" type="text/css" href="/public/styles/site.css">
</head>


<body>
  <?php include 'includes/header.php' ?>

  <main class = "adjust-page">
    <h2>Page Not Found</h2>
    <section class = "not-found-message">
      <!-- Source: Original work by Josephine Kim-->
      <p>The page you're looking for doesn't seem to exist. Try using the navigation bar to find the page you're looking for.</p>
    </section>
  </main>

    <footer>
        <?php include('includes/copyright.php'); ?>
    </footer>
    <script src="/public/scripts/jquery-3.7.1.js"></script>
    <script src="/public/scripts/hamburger-menu.js"></script>
</body>

</html>
