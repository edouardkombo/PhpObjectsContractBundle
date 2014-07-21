<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Iterator
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Abstractions;

/**
 * IteratorAbstractions class is a family of methods to set and get something. 
 *
 * @category Iterator
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class IteratorAbstractions implements \Iterator
{
    /**
     *
     * @var integer
     */
    protected $position = 0;
    
    /**
     *
     * @var array
     */
    protected $injected = array();  

    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct()
    {
        $this->position = 0;
    }

    /**
     * Reset
     * 
     * @return void
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * Return current value
     * 
     * @return string
     */
    public function current()
    {
        return $this->injected[$this->position];
    }

    /**
     * Return the key of the array
     * 
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Increment the position
     * 
     * @return void
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * Check if the value exists
     * 
     * @return boolean
     */
    public function valid()
    {
        return isset($this->injected[$this->position]);
    }
}