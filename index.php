<?php

$text = $_GET["text"];

$paint = file_get_contents("http://api.bridge-ads.ir/paintText/?text=$text");

echo($paint);
