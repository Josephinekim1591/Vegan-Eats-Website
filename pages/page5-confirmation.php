<?php
$page_title = 'page5-confirmation';

$user_email = $_POST['user_email'];
$selected_interests = implode(', ', $_POST['interests'] ?? []);

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
    <!-- Source: All of the text on this page is original work by Josephine Kim-->
    <?php include 'includes/header.php'; ?>
    <main class = "adjust-page">
        <h2>Newsletter Sign Up Confirmation</h2>
        <section class = "confirmation-message">
            <!-- Source: Original work by Josephine Kim-->
            <p>Thank you for signing up! Here are the details of your submission:</p>

            <dl>
                <dt>Email:</dt>
                <dd><?php echo htmlspecialchars($user_email); ?></dd>
                <dt>Selected Interests:</dt>
                <dd><?php echo htmlspecialchars($selected_interests); ?></dd>
            </dl>
        </section>
    </main>
    <footer>
        <blockquote>
            <!-- Source: Original work by Josephine Kim-->
            <p class = "quote-1">"Vegan cooking is an art, and like all arts, it's open to interpretation and innovation. Embrace the creative possibilities of plant-based cuisine."<br>— The Vegan Eats Team</p>
        </blockquote>
        <?php include('includes/copyright.php'); ?>
    </footer>
    <script src="/public/scripts/jquery-3.7.1.js"></script>
    <script src="/public/scripts/hamburger-menu.js"></script>
</body>
</html>
