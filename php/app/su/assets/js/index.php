<?php
header($_SERVER['SERVER_PROTOCOL'] . 'HTTP/1.0 404 Not Found', true, 404);
die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
?>