<?php if ($handle = opendir('resources/')) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        $path = "resources/".$entry;
      }
    }
    closedir($handle);
}
$key = file_get_contents($path);
echo $key;
?>