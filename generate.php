<?php

$newMale = rand(0, 13);
$newFemale = rand(0, 11);

$file = 'current_combo.json';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current = '{"male":' . $newMale . ',"female":' . $newFemale . "}";
// Write the contents back to the file
file_put_contents($file, $current);

//header("Location: https://fedoratricks.com/fff/current_combo.json");
echo "k";
?>
