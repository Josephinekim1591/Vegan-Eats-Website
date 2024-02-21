<?php
$page_title = 'page3';
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
        <h2 class = "page-headings">Vegan Lunch Recipes</h2>
        <!-- Source: (original work) Josephine Kim -->
        <p class = "paragraphs">Discover a range of satisfying vegan lunch options that will keep you energized and focused throughout the
            day.</p>

            <div class = "ingredient-section">
                <h3 class = "ingredient-title">1. Vegan Lentil Soup</h3>
                <!-- Source: https://www.eatingwell.com/recipe/7873236/vegan-lentil-soup/ -->
                <figure>
                    <img src="images/vegan-lentil-soup.jpg" alt="Vegan Lentil Soup">
                    <figcaption class = "picture-citation">
                        Source: <cite><a href="https://www.eatingwell.com/recipe/7873236/vegan-lentil-soup/">Eating
                            Well</a></cite>
                    </figcaption>
                </figure>

                <h4>Ingredients:</h4>
                <ul>
                    <!-- Source: https://www.eatingwell.com/recipe/7873236/vegan-lentil-soup/ -->
                    <li>Onions</li>
                    <li>Carrots</li>
                    <li>Celery</li>
                    <li>Olive oil</li>
                    <li>Red lentils</li>
                    <li>Vegetable broth</li>
                    <li>Cumin</li>
                </ul>
                <h4>Recipe:</h4>
                <ol>
                    <!-- Source: https://www.eatingwell.com/recipe/7873236/vegan-lentil-soup/ -->
                    <li>Sauté onions, carrots, and celery in olive oil until softened.</li>
                    <li>Add red lentils, vegetable broth, and a pinch of cumin.</li>
                    <li>Simmer until lentils are tender.</li>
                </ol>
            </div>

            <div class = "ingredient-section">
                <h3 class = "ingredient-title">2. Vegan Falafel Wrap</h3>
                <!-- Source: https://ordinaryvegan.net/vegan-falafel-baked/ -->
                <figure>
                    <img src="images/vegan-falafel-wrap.jpg" alt="Vegan Falafel Wrap">
                    <figcaption class = "picture-citation">
                        Source: <cite><a href="https://ordinaryvegan.net/vegan-falafel-baked/">Ordinary Vegan</a></cite>
                    </figcaption>
                </figure>
                <h4>Ingredients:</h4>
                <ul>
                    <!-- Source: https://ordinaryvegan.net/vegan-falafel-baked/ -->
                    <li>Chickpeas</li>
                    <li>Garlic</li>
                    <li>Lemon juice</li>
                    <li>Spices</li>
                    <li>Tahini sauce</li>
                    <li>Fresh veggies</li>
                </ul>
                <h4>Recipe:</h4>
                <ol>
                    <!-- Source: https://ordinaryvegan.net/vegan-falafel-baked/ -->
                    <li>Blend chickpeas, garlic, lemon juice, and spices in a food processor.</li>
                    <li>Form the mixture into patties and bake until crispy.</li>
                    <li>Serve in a tortilla with tahini sauce and fresh veggies.</li>
                </ol>
            </div>

            <div class = "ingredient-section">
                <h3 class = "ingredient-title">3. Quinoa and Black Bean Salad</h3>
                <!-- Source: https://www.fromachefskitchen.com/vegan-thai-red-curry/ -->
                <figure>
                    <img src="images/vegan-pancakes.jpg" alt="Quinoa and Black Bean Salad">
                    <figcaption class = "picture-citation">
                        Source: <cite><a href="https://www.fromachefskitchen.com/vegan-thai-red-curry/">From a Chef's
                            Kitchen</a></cite>
                    </figcaption>
                </figure>
                <h4>Ingredients:</h4>
                <ul>
                    <!-- Source: https://www.fromachefskitchen.com/vegan-thai-red-curry/ -->
                    <li>Quinoa</li>
                    <li>Black beans</li>
                    <li>Corn</li>
                    <li>Diced tomatoes</li>
                    <li>Chopped cilantro</li>
                    <li>Lime juice</li>
                    <li>Olive oil</li>
                    <li>Chili powder</li>
                </ul>
                <h4>Recipe:</h4>
                <ol>
                    <!-- Source: https://www.fromachefskitchen.com/vegan-thai-red-curry/ -->
                    <li>Cook quinoa and mix with black beans, corn, diced tomatoes, and chopped cilantro.</li>
                    <li>Dress with lime juice, olive oil, and a pinch of chili powder.</li>
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
