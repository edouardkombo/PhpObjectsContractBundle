<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Numbers
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContract\Contract\Elements\Abstractions;

use EdouardKombo\PhpObjectsContract\Contract\Elements\Interfaces\NumbersInterfaces;

/**
 * Abstraction of NumbersInterfaces
 *
 * @category Numbers
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class NumbersAbstractions implements NumbersInterfaces
{
    /**
     *
     * @var integer
     */
    protected $numberA;
    
    /**
     *
     * @var integer
     */
    protected $numberB;    
    
    /**
     * Increment something
     *
     * @return integer
     */
    public function increment()
    {
        return (integer) ++$this->numberA;
    }
    
    /**
     * Decrement something
     *
     * @return integer
     */
    public function decrement()
    {
         return (integer) --$this->numberA;       
    }
    
    /**
     * Divide something
     *
     * @return integer
     */
    public function divide()
    {
        return (integer) $this->numberA / $this->numberB;
    }
    
    /**
     * Multiply something
     *
     * @return integer
     */
    public function multiply()
    {
        return (integer) $this->numberA * $this->numberB;        
    }
}