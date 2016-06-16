<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
$the_array = array(5, 2, 0, 3, 1, 00, 4);
    sort($the_array);
    print join(",", $the_array);
	?>
	</p>
	<p>
	<?php
	rsort($the_array);
	print join(", ", $the_array);
	?>
	</p>
</html>
