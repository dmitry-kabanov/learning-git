<?php

class ClassLoader
{
    /**
     * @var array
     */
    private $dirs;

    public function addDir($dir)
    {
        $this->dirs[] = rtrim($dir, '/') . '/';
    }

    public function loadClass($classname)
    {
        foreach ($this->dirs as $dir)
        {
            if (file_exists($dir . $classname . '.php'))
            {
                require $dir . $classname . '.php';
                return;
            }
        }
    }

    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }
}
