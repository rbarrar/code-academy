<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    $myName = "Ryan";
    print strpos($myName, 'n');
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos($myName, 'h') === false) {
        print "Sorry, no 'h' in 'Ryan'";
    }
    ?>
    </p>
</html>
