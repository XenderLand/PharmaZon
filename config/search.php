<?php

// Get the search query from the URL parameter
$query = $_GET['query'];

// Define the directory to search within
$dir = "your_directory_here";

// Define the file extension to search for
$ext = ".html";

// Initialize an empty array to store the search results
$results = array();

// Open the directory and search for matching files
if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "index.php" && $entry != "index.php") {
            if (strpos($entry, $query) !== false && strpos($entry, $ext) !== false) {
                $results[] = $entry;
            }
        }
    }
    closedir($handle);
}

// Output the search results
foreach ($results as $result) {
    echo "<a href=\"$result\">$result</a><br>";
}

?>
