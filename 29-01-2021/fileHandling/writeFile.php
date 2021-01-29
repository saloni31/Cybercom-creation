<?php

$handle = fopen("names.txt", "w");

fwrite($handle, "Saloni \nUrvashi \n");
fwrite($handle, "Komal");

fclose($handle);
echo "Written successfully.";