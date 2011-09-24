<?php

class ClassLoader
{
    /**
     * @var string
     */
    private $dir;

    public function addDir($dir)
    {
        $this->dir = $dir;
    }

    public function loadClass($classname)
    {
        require $this->dir . $classname . '.php';
    }
}
