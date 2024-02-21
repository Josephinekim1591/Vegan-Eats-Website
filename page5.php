<?php
$page_title = 'page5';
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
    <!-- Source: All of the text on this page is original work by Josephine Kim-->
    <?php include('includes/header.php'); ?>

    <main>
        <section>
            <h2 class = "page-headings">Vegan Nutritional Insights & Cooking Tips</h2>
            <!-- Source: https://www.foxnews.com/us/eating-vegan-diet-promotes-white-masculinity-sociologist-argues -->
            <picture>
                <img  class = "man-shopping" src="images/lastpage.jpg" alt="Person Shopping for Vegetables">
            </picture>
            <cite class = "center-picture-citation">
                Source: <a href="https://www.foxnews.com/us/eating-vegan-diet-promotes-white-masculinity-sociologist-argues">Fox News</a>
            </cite>

            <section class = "last-page-section">
                <h3>The Power of Plant-Based Nutrition</h3>
                <!-- Source: All of the text on this page is original work by Josephine Kim-->
                <p class = "paragraphs">Embracing a vegan lifestyle is not only about compassion for animals but also about nourishing your body with the goodness of plant-based foods. Here, we delve deeper into the nutritional aspects of veganism and how it can benefit your health.</p>

                <div class = "last-page-imbedded-section">
                    <h5>Balanced Nutrient Intake:</h5>
                    <!-- Source: All of the text on this page is original work by Josephine Kim-->
                    <p>A well-planned vegan diet can provide all the essential nutrients your body needs to thrive. Here are some key nutrients and their plant-based sources:</p>
                    <ul class = "spaced-list">
                        <!-- Source: All of the text on this page is original work by Josephine Kim-->
                        <li><strong>Protein:</strong> Contrary to the myth that vegans struggle to get enough protein, plant-based sources like tofu, tempeh, legumes, and quinoa offer an abundance of protein. Incorporating a variety of these foods ensures you meet your protein needs.</li>
                        <li><strong>Calcium:</strong> Leafy greens like kale and collard greens, fortified plant-based milk, and almonds are excellent sources of calcium. These foods contribute to strong bones and teeth.</li>
                        <li><strong>Iron:</strong> Plant-based iron sources include lentils, chickpeas, spinach, and fortified cereals. Pairing iron-rich foods with vitamin C-rich foods like citrus fruits enhances iron absorption.</li>
                        <li><strong>Vitamin B12:</strong> While vitamin B12 is primarily found in animal products, fortified plant-based foods like nutritional yeast, plant-based milk, and breakfast cereals can help vegans meet their B12 requirements. Consider taking a B12 supplement as well.</li>
                        <li><strong>Omega-3 Fatty Acids:</strong> Flaxseeds, chia seeds, and walnuts are rich in omega-3 fatty acids, which support heart and brain health. Including these foods in your diet is essential.</li>
                    </ul>
                </div>

                <div class = "last-page-imbedded-section">
                    <h5>Health Benefits:</h5>
                    <!-- Source: All of the text on this page is original work by Josephine Kim-->
                    <p>Adopting a vegan lifestyle can lead to numerous health benefits, including:</p>
                    <ul class = "spaced-list">
                        <!-- Source: All of the text on this page is original work by Josephine Kim-->
                        <li><strong>Reduced Risk of Chronic Diseases:</strong> Vegan diets are associated with a lower risk of heart disease, high blood pressure, type 2 diabetes, and certain cancers.</li>
                        <li><strong>Weight Management:</strong> The fiber-rich nature of many plant-based foods can aid in weight loss and maintenance.</li>
                        <li><strong>Improved Digestion:</strong> A diet high in fruits, vegetables, and whole grains can promote healthy digestion and regularity.</li>
                        <li><strong>Better Blood Sugar Control:</strong> Vegan diets may improve insulin sensitivity and help manage blood sugar levels.</li>
                    </ul>
                </div>
            </section>

            <section class = "last-page-section">
                <h3>Cooking Tips and Tricks</h3>
                <!-- Source: All of the text on this page is original work by Josephine Kim-->
                <p class = "paragraphs">Whether you're new to vegan cooking or a seasoned pro, these tips and tricks will help you elevate your culinary skills and create delicious plant-based dishes.</p>

                <ol class = "spaced-list">
                    <!-- Source: All of the text on this page is original work by Josephine Kim-->
                    <li><strong>Embrace Plant-Based Ingredients:</strong> Explore a wide range of plant-based ingredients, from tofu and seitan to nutritional yeast and aquafaba. These versatile ingredients can mimic the textures and flavors of animal-based foods.</li>
                    <li><strong>Experiment with Spices and Herbs:</strong> Spices and herbs are your best friends in the kitchen. They can transform a simple dish into a flavor-packed masterpiece. Get creative with cumin, paprika, turmeric, basil, and more.</li>
                    <li><strong>Learn Flavor Pairing:</strong> Understanding which flavors complement each other is key to creating well-balanced dishes. For example, pair sweet and spicy elements, like a mango salsa with a spicy bean dish, for a delightful contrast.</li>
                    <li><strong>Master Plant-Based Proteins:</strong> To create satisfying and protein-rich meals, experiment with plant-based proteins like tempeh, seitan, and legumes. Marinating and seasoning these proteins can enhance their taste.</li>
                    <li><strong>Make Your Own Sauces and Dressings:</strong> Homemade sauces and dressings are healthier and allow you to control the ingredients. Try making creamy cashew-based dressings, tahini sauces, or homemade tomato sauces.</li>
                    <li><strong>Plan Balanced Meals:</strong> Ensure your meals include a variety of food groups. Incorporate grains, legumes, vegetables, and healthy fats to create well-rounded dishes that provide essential nutrients.</li>
                    <li><strong>Meal Prep for Convenience:</strong> Spend a day meal prepping to make weeknight dinners a breeze. Cook grains, chop vegetables, and prepare sauces in advance to save time.</li>
                    <li><strong>Get Creative with Leftovers:</strong> Transform leftover dishes into new creations. For example, use yesterday's roasted vegetables in a grain bowl or turn extra pasta into a pasta salad.</li>
                    <li><strong>Keep a Well-Stocked Pantry:</strong> Stock your pantry with essential vegan ingredients like canned beans, pasta, grains, canned tomatoes, and various spices. This ensures you have the basics for creating meals.</li>
                    <li><strong>Learn from the Vegan Community:</strong> Join online vegan communities, follow vegan cooking blogs, and watch instructional videos. Learning from others can inspire you and introduce you to new recipes and techniques.</li>
                </ol>
            </section>
        </section>
        <section>
            <h2>Sign Up for Our Newsletter</h2>
            <form id="newsletter-signup" action="page5-confirmation.php" method="post" novalidate>
                <p>Subscribe to receive recipes and updates directly to your inbox.</p>
                <label for="user-email">Email:</label>
                <input type="email" id="user-email" name="user_email" required>

                <fieldset>
                    <legend>Select your areas of interest:</legend>
                    <label><input type="checkbox" name="interests[]" value="Vegan Breakfast Recipes"> Vegan Breakfast Recipes</label>
                    <label><input type="checkbox" name="interests[]" value="Vegan Lunch Recipes"> Vegan Lunch Recipes</label>
                    <label><input type="checkbox" name="interests[]" value="Vegan Dinner Recipes"> Vegan Dinner Recipes</label>
                    <label><input type="checkbox" name="interests[]" value="Events and Updates"> Events and Updates</label>
                </fieldset>

                <button class="sign-up-button" type="submit">Subscribe</button>
            </form>
        </section>

        <footer>
            <blockquote>
                <!-- Source: Original work by Josephine Kim-->
                <p class = "quote-1">"Vegan cooking is an art, and like all arts, it's open to interpretation and innovation. Embrace the creative possibilities of plant-based cuisine."<br>— The Vegan Eats Team</p>
            </blockquote>
            <?php include('includes/copyright.php'); ?>
        </footer>
    </main>
    <script src="scripts/jquery-3.7.1.js"></script>
    <script src="scripts/hamburger-menu.js"></script>
</body>
</html>
