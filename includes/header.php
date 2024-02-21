<header>
    <h1>Vegan Eats</h1>
    <button id="menu-icon" class = "hidden">
        <span class = "three-bars">&#9776;</span>
    </button>
    <nav>
        <ul id="nav-list" class = "hidden">
            <li class="<?php echo $page_title == 'index' ? 'active_page': ''; ?>"><a href="index.php">Welcome</a></li>
            <li class="<?php echo $page_title == 'page2' ? 'active_page': ''; ?>"><a href="page2.php">Vegan Breakfast Recipes</a></li>
            <li class="<?php echo $page_title == 'page3' ? 'active_page': ''; ?>"><a href="page3.php">Vegan Lunch Recipes</a></li>
            <li class="<?php echo $page_title == 'page4' ? 'active_page': ''; ?>"><a href="page4.php">Vegan Dinner Recipes</a></li>
            <li class="<?php echo $page_title == 'page5' ? 'active_page': ''; ?>"><a href="page5.php">Vegan Nutritional Insights and Cooking Tips</a></li>
        </ul>
    </nav>
</header>
