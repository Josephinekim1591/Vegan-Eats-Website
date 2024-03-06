<?php
$page_title = 'page4';
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
    <?php include('includes/header.php'); ?>

    <main>
        <section>
            <h2 class = "page-headings">Vegan Dinner Recipes</h2>
            <!-- Source: (original work) Josephine Kim -->
            <p class = "paragraphs">Explore a spectrum of satisfying vegan dinner options for a delightful end to your day.</p>

                <div class = "ingredient-section">
                    <h3 class = "ingredient-title">1. Vegan Chili</h3>
                    <!-- Source: https://frommybowl.com/easy-vegan-chili/ -->
                    <figure>
                        <img src="/public/images/vegan-chili.jpg" alt="Vegan Chili">
                        <figcaption class = "picture-citation">
                            Source: <cite><a href="https://frommybowl.com/easy-vegan-chili/">From My Bowl</a></cite>
                        </figcaption>
                    </figure>
                    <h4>Ingredients:</h4>
                    <ul>
                        <!-- Source: https://frommybowl.com/easy-vegan-chili/ -->
                        <li>2 tablespoons of olive oil</li>
                        <li>1 diced onion</li>
                        <li>2 cloves of minced garlic</li>
                        <li>1 diced bell pepper</li>
                        <li>1 can of black beans</li>
                        <li>1 can of kidney beans</li>
                        <li>1 can of diced tomatoes</li>
                        <li>1 cup of vegetable broth</li>
                        <li>2 tablespoons of chili powder</li>
                        <li>Vegan sour cream</li>
                        <li>Chopped green onions</li>
                    </ul>
                    <h4>Recipe:</h4>
                    <ol>
                        <!-- Source: https://frommybowl.com/easy-vegan-chili/ -->
                        <li>Heat olive oil in a large pot.</li>
                        <li>Sauté diced onion, minced garlic, and diced bell pepper until softened.</li>
                        <li>Add black beans, kidney beans, diced tomatoes, vegetable broth, and chili powder.</li>
                        <li>Simmer for 30 minutes, stirring occasionally.</li>
                        <li>Serve with vegan sour cream and chopped green onions.</li>
                    </ol>
                </div>

                <div class = "ingredient-section">
                    <h3 class = "ingredient-title">2. Vegan Spaghetti with Tomato Sauce</h3>
                    <!-- Source: https://thehappypear.ie/low-fodmap-spaghetti-bolognese-recipes/ -->
                    <figure>
                        <img src="/public/images/vegan-spaghetti.jpg" alt="Vegan Spaghetti with Tomato Sauce">
                        <figcaption class = "picture-citation">
                            Source: <cite><a href="https://thehappypear.ie/low-fodmap-spaghetti-bolognese-recipes/">The Happy
                                Pear</a></cite>
                        </figcaption>
                    </figure>
                    <h4>Ingredients:</h4>
                    <ul>
                        <!-- Source: https://thehappypear.ie/low-fodmap-spaghetti-bolognese-recipes/ -->
                        <li>Spaghetti pasta (follow package instructions)</li>
                        <li>2 tablespoons of olive oil</li>
                        <li>2 cloves of minced garlic</li>
                        <li>1 can of crushed tomatoes</li>
                        <li>1 teaspoon of dried basil</li>
                        <li>1 teaspoon of dried oregano</li>
                        <li>Fresh basil leaves for garnish</li>
                    </ul>
                    <h4>Recipe:</h4>
                    <ol>
                        <!-- Source: https://thehappypear.ie/low-fodmap-spaghetti-bolognese-recipes/ -->
                        <li>Cook spaghetti pasta according to package instructions.</li>
                        <li>In a separate pan, heat olive oil.</li>
                        <li>Sauté minced garlic and add crushed tomatoes, dried basil, and dried oregano.</li>
                        <li>Simmer for 15 minutes.</li>
                        <li>Toss cooked spaghetti in the tomato sauce.</li>
                        <li>Garnish with fresh basil leaves.</li>
                    </ol>
                </div>

                <div class = "ingredient-section">
                    <h3 class = "ingredient-title">3. Vegan Thai Red Curry</h3>
                    <!-- Source: https://www.fromachefskitchen.com/vegan-thai-red-curry/ -->
                    <figure>
                        <img src="/public/images/vegan-thai-red-curry.jpg" alt="Vegan Thai Red Curry">
                        <figcaption class = "picture-citation">
                            Source: <cite><a href="https://www.fromachefskitchen.com/vegan-thai-red-curry/">The Real Food
                                Dietitians</a></cite>
                        </figcaption>
                    </figure>
                    <h4>Ingredients:</h4>
                    <ul>
                        <li>2 tablespoons of red curry paste</li>
                        <li>1 can of coconut milk</li>
                        <li>Sliced tofu</li>
                        <li>Sliced bell peppers</li>
                        <li>Sliced zucchini</li>
                        <li>Cooked jasmine rice</li>
                    </ul>
                    <h4>Recipe:</h4>
                    <ol>
                        <li>In a pot, heat red curry paste and coconut milk.</li>
                        <li>Add sliced tofu, sliced bell peppers, and sliced zucchini.</li>
                        <li>Simmer until vegetables are tender.</li>
                        <li>Serve over cooked jasmine rice.</li>
                    </ol>
                </div>
        </section>
        <footer>
            <blockquote>
                <!-- Source: (original work) Josephine Kim -->
                <p class = "quote-1">"Eating vegan isn't just about compassion; it's about creating a harmonious relationship with our planet
                    and nourishing our bodies with wholesome foods."<br>— The Vegan Eats Team</p>
            </blockquote>
            <?php include('includes/copyright.php'); ?>
        </footer>
    </main>
    <script src="/public/scripts/jquery-3.7.1.js"></script>
    <script src="/public/scripts/hamburger-menu.js"></script>
</body>

</html>
