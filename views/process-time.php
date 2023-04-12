<?php
// Check if the form has been submitted
if (isset($_POST['vlozit'])) {

  // Get the form data and store it in variables
  $monday_start = $_POST['monday_start'];
  $monday_end = $_POST['monday_end'];
  $wednesday_start = $_POST['wednesday_start'];
  $wednesday_end = $_POST['wednesday_end'];
  $friday_start = $_POST['friday_start'];
  $friday_end = $_POST['friday_end'];

  // Open the text file for writing
  $file = fopen("../data.txt", "w");

  // Write the form data to the file
  fwrite($file, "monday_start=$monday_start\n");
  fwrite($file, "monday_end=$monday_end\n");
  fwrite($file, "wednesday_start=$wednesday_start\n");
  fwrite($file, "wednesday_end=$wednesday_end\n");
  fwrite($file, "friday_start=$friday_start\n");
  fwrite($file, "friday_end=$friday_end\n");

  // Close the file
  fclose($file);
  header(('Location: home.php'));
}

// Open the text file for reading
$file = fopen("../data.txt", 'r');

// Read the data from the file and store it in variables
while ($line = fgets($file)) {
  list($name, $value) = explode('=', $line);
  ${$name} = trim($value);
}

// Close the file
fclose($file);

?>

