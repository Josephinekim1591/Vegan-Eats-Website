<?php
$page_title = 'page2';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Vegan Eats</title>

  <link rel="stylesheet" type="text/css" href="styles/site.css">
</head>



<body>
    <?php include('includes/header.php'); ?>

    <main>
        <h2 class = "page-headings">Vegan Breakfast Recipes</h2>
        <!-- Source: (original work) Josephine Kim -->
        <p class = "paragraphs">Discover a variety of vegan breakfast options to kickstart your day with energy and flavor.</p>

        <div class = "ingredient-section">
            <h3 class = "ingredient-title">1. Vegan Smoothie Bowl</h3>
            <!-- Source: https://plantbasedandbroke.com/super-simple-raspberry-banana-smoothie-bowl/ -->
            <figure>
                <img src="images/vegan-smoothie-bowl.jpg" alt="Vegan Smoothie Bowl">
                <figcaption class = "picture-citation">
                    Source: <cite><a href="https://plantbasedandbroke.com/super-simple-raspberry-banana-smoothie-bowl/">Plant
                        Based and Broke</a></cite>
                </figcaption>
            </figure>
            <h4>Ingredients:</h4>
                <ul>
                    <!-- Source: https://plantbasedandbroke.com/super-simple-raspberry-banana-smoothie-bowl/ -->
                    <li>1 frozen banana</li>
                    <li>1 cup of frozen mixed berries</li>
                    <li>1 cup of almond milk</li>
                </ul>
            <h4>Recipe:</h4>
                <ol>
                    <!-- Source: https://plantbasedandbroke.com/super-simple-raspberry-banana-smoothie-bowl/ -->
                    <li>Blend the frozen banana, frozen berries, and almond milk until smooth.</li>
                    <li>Pour into a bowl.</li>
                    <li>Top with sliced fruits, granola, and chia seeds.</li>
                </ol>
        </div>

        <div class = "ingredient-section">
            <h3 class = "ingredient-title">2. Vegan Pancakes</h3>
            <!-- Source: https://chefani.com/vegan-pancakes/ -->
            <figure>
                <img src="images/vegan-pancakes.jpg" alt="Vegan Pancakes">
                <figcaption class = "picture-citation">
                    Source: <cite><a href="https://chefani.com/vegan-pancakes/">Chef Ani</a></cite>
                </figcaption>
            </figure>
            <h4>Ingredients:</h4>
            <ul>
                <!-- Source: https://chefani.com/vegan-pancakes/ -->
                <li>1 cup of flour</li>
                <li>1 tablespoon of sugar</li>
                <li>2 teaspoons of baking powder</li>
                <li>A pinch of salt</li>
                <li>1 cup of almond milk</li>
                <li>2 tablespoons of vegetable oil</li>
            </ul>
            <h4>Recipe:</h4>
            <ol>
                <!-- Source: https://chefani.com/vegan-pancakes/ -->
                <li>Mix the flour, sugar, baking powder, and salt in a bowl.</li>
                <li>Add the almond milk and vegetable oil. Mix until smooth.</li>
                <li>Cook the pancakes on a hot griddle until golden brown.</li>
            </ol>
        </div>

        <div class = "ingredient-section">
            <h3 class = "ingredient-title">3. Tofu Scramble</h3>
            <!-- Source: https://plantbasedonabudget.com/favorite-tofu-scamble/ -->
            <figure>
                <img src="images/vegan-tofu-scramble.jpg" alt="Tofu Scramble">
                <figcaption class = "picture-citation">
                    Source: <cite><a href="https://www.istockphoto.com/photos/happy-chef">Plant-Based on a Budget</a></cite>
                </figcaption>
            </figure>
            <h4>Ingredients:</h4>
            <ul>
                <!-- Source: https://plantbasedonabudget.com/favorite-tofu-scamble/ -->
                <li>1 block of firm tofu</li>
                <li>Diced bell peppers</li>
                <li>Onions</li>
                <li>Spinach</li>
                <li>Turmeric</li>
                <li>Black salt (for an eggy flavor)</li>
                <li>Black pepper</li>
            </ul>
            <h4>Recipe:</h4>
            <ol>
                <!-- Source: https://plantbasedonabudget.com/favorite-tofu-scamble/ -->
                <li>Crumble the tofu into a pan and sauté with diced vegetables.</li>
                <li>Season with turmeric, black salt, and black pepper.</li>
            </ol>
        </div>
    </main>
    <footer>
        <?php include('includes/copyright.php'); ?>
    </footer>
    <script src="scripts/jquery-3.7.1.js"></script>
    <script src="scripts/hamburger-menu.js"></script>
</body>

</html>
