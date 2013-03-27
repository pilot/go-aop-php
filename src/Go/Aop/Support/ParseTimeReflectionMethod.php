<?php
/**
 * Go! OOP&AOP PHP framework
 *
 * @copyright     Copyright 2012, Lissachenko Alexander <lisachenko.it@gmail.com>
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

namespace Go\Aop\Support;

/**
 * Parse-time reflection method to use a trick with serialization for ReflectionMethod when class is not loaded yet
 */
class ParseTimeReflectionMethod /* extends ReflectionMethod*/
{

    /**
     * Class name
     *
     * @var string
     */
    public $class;

    /**
     * Name of the method
     *
     * @var string
     */
    public $name;

    /**
     * Parse-time reflection method stub
     *
     * @param string $class Name of the class
     * @param string $name Name of the method
     */
    public function __construct($class, $name)
    {
        $this->class = $class;
        $this->name  = $name;
    }

    /**
     * Stub method
     *
     * @return bool
     */
    public function isProtected()
    {
        return false;
    }

    /**
     * Stub method
     *
     * @param bool $accessible
     */
    public function setAccessible($accessible)
    {
        //
    }
}
