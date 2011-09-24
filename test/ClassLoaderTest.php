<?php
require_once __DIR__ . '/../src/ClassLoader.php';

class ClassLoaderTest extends PHPUnit_Framework_TestCase
{
    public function testLoadClassIsSuccessful()
    {
        $loader = new ClassLoader();
        $loader->addDir('test/_fixture/');
        $loader->loadClass('Foo');

        $this->assertTrue(class_exists('Foo'));
    }
    
    public function testLoadClassIsSuccessfulWhenOmittingTrailingSlash()
    {
        $loader = new ClassLoader();
        $loader->addDir('test/_fixture');
        $loader->loadClass('Bar');

        $this->assertTrue(class_exists('Bar'));
    }
}
