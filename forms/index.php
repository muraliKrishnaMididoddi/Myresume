<?php
$counterFile = 'counter.txt';

// Create file if not exists
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Read current count
$viewCount = (int)file_get_contents($counterFile);

// Increment and update
$viewCount++;
file_put_contents($counterFile, $viewCount);
?>

