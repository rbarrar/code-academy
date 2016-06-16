<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    print rand(1, 6);
    $name = "Ryan-Jacob-Barrar";
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $last = strlen($name)-1;
    $start = rand(0, $last);
    print substr($name, $start, 1);
    ?>
    </p>
</html>
