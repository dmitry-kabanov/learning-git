<?php

chdir(__DIR__);

if (file_exists('autoloader.php'))
{
    require_once 'autoloader.php';
}
else
{
    exit('ERROR: No autoloader found.');
}