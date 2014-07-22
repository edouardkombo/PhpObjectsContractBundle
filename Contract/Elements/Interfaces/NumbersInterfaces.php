<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Numbers
 * @package   Interfaces
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     0.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

/**
 * Some numbers final actions
 *
 * @category Numbers
 * @package  Interfaces
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface NumbersInterfaces
{
    /**
     * Increment something
     *
     * @return mixed
     */
    public function increment();
    
    /**
     * Decrement something
     *
     * @return mixed
     */
    public function decrement();
    
    /**
     * Divide something
     *
     * @return mixed
     */
    public function divide();
    
    /**
     * Multiply something
     *
     * @return mixed
     */
    public function multiply();    
}
