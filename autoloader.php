<?php

require_once __DIR__ . '/src/ClassLoader.php';

$classLoader = new ClassLoader();
$classLoader->addDir('src');
$classLoader->register();
