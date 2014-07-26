<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  SetGet
 * @package   Interfaces
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     0.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

/**
 * Some security final actions
 *
 * @category SetGet
 * @package  Interfaces
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface SetGetInterfaces
{
    /**
     * Set a value
     * 
     * @param mixed $value
     */
    public function set($value);
    
    /**
     * Get a value
     * 
     * @return mixed
     */
    public function get();
    
    /**
     * Easily assign a value to a property from external classes
     * 
     * @param string $property Class property
     * @param string $value    Value to assign
     */
    public function setParameter($property, $value);     
}
