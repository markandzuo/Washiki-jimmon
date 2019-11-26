<nav>
    <ul>
        <?php
        print '<li class="';
        if ($path_parts['filename'] == "index") {
            print 'activePage';
        }
        print '">';
        print '<a href="index.php">HOME</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "food") {
            print 'activePage';
        }
        print '">';
        print '<a href="food.php">FOOD</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "view") {
            print 'activePage';
        }
        print '">';
        print '<a href="view.php">VIEW</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "rail") {
            print 'activePage';
        }
        print '">';
        print '<a href="rail.php">RAIL</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "share") {
            print 'activePage';
        }
        print '">';
        print '<a href="share.php">SHARE</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "about") {
            print 'activePage';
        }
        print '">';
        print '<a href="about.php">ABOUT</a>';
        print '</li>';
        ?>
    </ul>
</nav>
