<?php

$fp = fopen(getcwd()."/test.txt", "w");

fwrite($fp, "hello");

chmod(getcwd()."/test.txt", 0777);

unlink(getcwd()."/test.txt");

fclose($fp);

?>
