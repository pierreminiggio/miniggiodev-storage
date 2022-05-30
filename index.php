<?php

$currentFolder = './';
$files = scandir($currentFolder);

echo '<ul>';

foreach($files as $file) {
   if (is_dir($currentFolder . '/' . $file)) {
      echo '<li>' . $file . '</li>';
   }
}

echo '</ul>';
