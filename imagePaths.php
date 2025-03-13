<?php
$imageDirectory = 'assets/images/';

$imageFiles = array_diff(scandir($imageDirectory), array('.', '..'));

$imagePaths = [];
foreach ($imageFiles as $file) {
    $imagePaths[basename($file, '.' . pathinfo($file, PATHINFO_EXTENSION))] = $imageDirectory . $file;
}

return $imagePaths;
?>
