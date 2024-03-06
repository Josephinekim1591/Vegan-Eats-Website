<?php
$page_title = 'index';
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
        <!-- Source: All of the text on this page is original work by Josephine Kim-->
        <section>
            <h2 class = "welcome-heading"> Welcome to Vegan Eats</h2>
            <!-- Source: https://www.health.harvard.edu/blog/phytonutrients-paint-your-plate-with-the-colors-of-the-rainbow-2019042516501 -->
            <picture>
                <img class="rainbow" src="/public/images/vegan-rainbow.jpg" alt="Vegan Rainbow"/>
            </picture>
            <cite class="center-picture-citation">
                Source: <a href="https://www.health.harvard.edu/blogphytonutrients-paint-your-plate-with-the-colors-of-the-rainbow-2019042516501">Harvard Health Publishing</a>
            </cite>

        </section>
        <section class = "intro">
            <h2 class = "intro-header">Introduction</h2>
            <!-- Source: Original work by Josephine Kim-->
            <p>Welcome to Vegan Eats, your ultimate destination for all things plant-based and delicious. Whether you're a
                seasoned vegan, a curious beginner, or simply someone who appreciates a good meal, you've come to the right
                place. We are dedicated to sharing the joys of vegan cuisine, from mouthwatering recipes to helpful tips and
                resources.</p>
        </section>
        <section class="what-we-offer">
            <h2>What We Offer</h2>
            <div class = "what-we-offer-section">
                <h3>1. Recipes Galore</h3>
                <!-- https://theveganreview.com/vegan-recipes-vegan-recipes-uk/ -->
                <figure>
                    <img class = "recipes-galore-img" src="/public/images/recipes-galore.jpg" alt="Recipes Galore">
                    <figcaption class = "picture-citation">
                        <cite>
                            Source: <a href="https://theveganreview.com/vegan-recipes-vegan-recipes-uk/">The Vegan Review</a>
                        </cite>
                    </figcaption>
                </figure>
                <!-- Source: Original work by Josephine Kim-->
                <p>Dive into our extensive collection of vegan recipes, carefully curated to cater to all tastes and skill
                    levels. From quick and easy weekday meals to indulgent weekend treats, our recipes will inspire your
                    culinary creativity.</p>
            </div>
            <div class = "what-we-offer-section">
                <h3>2. Nutritional Insights</h3>
                <!-- https://clipart-library.com/happy-people.html -->
                <figure>
                    <img class = "nutritional-insights-img" src="/public/images/nutritional-insights.jpg" alt="Nutritional Insights">
                    <figcaption>
                        <cite class = "picture-citation">
                            Source: <a href="https://clipart-library.com/happy-people.html">Clipart Library</a>
                        </cite>
                    </figcaption>
                </figure>
                <!-- Source: Original work by Josephine Kim-->
                <p>Discover the health benefits of a plant-based diet. We provide valuable insights into the nutritional aspects
                    of veganism, ensuring you make informed choices for your well-being.</p>
            </div>
            <div class = "what-we-offer-section">
                <h3>3. Cooking Tips and Tricks</h3>
                <!-- https://www.istockphoto.com/photos/happy-chef -->
                <figure>
                    <img class = "cooking-tips-img" src="/public/images/cooking-tips-and-tricks.jpg" alt="Cooking Tips and Tricks">
                    <figcaption>
                        <cite class = "picture-citation">
                            Source: <a href="https://www.istockphoto.com/photos/happy-chef">iStock Photos</a>
                        </cite>
                    </figcaption>
                </figure>
                <!-- Source: Original work by Josephine Kim-->
                <p>Whether you're a kitchen novice or a seasoned pro, our cooking tips and tricks will help you master the art
                    of vegan cooking. Learn about essential ingredients, cooking techniques, and time-saving hacks.</p>
            </div>
        </section>
        <div id="shadow" class="hidden"></div>
            <footer class = "about">
                <h2 class = "aboutus-title">About Us</h2>
                <blockquote>
                    <p class = "quote-1">"Cooking is an art, and vegan cuisine is our masterpiece."<br>— The Vegan Eats Team</p>
                </blockquote>
                <!-- Source: Original work by Josephine Kim-->
                <p>Learn more about our dedicated team of vegan food enthusiasts who are committed to bringing you the best
                    plant-based recipes and resources.</p>
                <p>Join us on this exciting journey to explore the world of vegan cuisine, nourish your body, and contribute to
                    a more sustainable planet. Welcome to Vegan Eats - where every meal is a celebration of compassion and
                    flavor.</p>
                <button id= "contactme">Contact Me</button>
                <div id = "myModal" class = "hidden">
                    <div class="modal-content">
                        <button id="close">&times;</button>
                        <!-- Source: Original work by Josephine Kim-->
                        <p> Hello! I am Josephine Kim, a student at Cornell University and I am the creator of this website.</p>
                        <p> If there are any questions or concerns regarding the content of this website or veganism in general, you may contact me, via email or phone number. I will get back you within five business days.</p>
                        <p>Email: josephinekim1591@gmail.com</p>
                        <p>Phone: (1)929-888-5695</p>
                    </div>
                </div>
                <?php include('includes/copyright.php'); ?>
            </footer>
    </main>

    <script src="/public/scripts/jquery-3.7.1.js"></script>
    <script src="/public/scripts/hamburger-menu.js"></script>
    <script src="/public/scripts/modal.js"></script>
</body>

</html>
