<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $myName = "Ryan";
    $partial = substr($myName, 0, 1);
    print $partial;
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
 $uppercase = strtoupper($myName);
 echo $uppercase;
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
 $lowercase = strtolower($myName);
 echo $lowercase;
    ?>
  </p>
</html>
