<?php

$currentFolder = './';
$files = scandir($currentFolder);

echo '<ul>';

foreach($files as $file) {
   if (in_array($file, ['.', '..', '.git'])) {
      continue;
   }

   if (! is_dir($currentFolder . '/' . $file)) {
      continue;
   }
      
   echo '<li><a href="/' . $file . '">' . $file . '</a></li>';
}

echo '</ul>';
