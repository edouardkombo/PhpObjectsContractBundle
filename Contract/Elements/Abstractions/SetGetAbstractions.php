<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  SetGet
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     0.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Abstractions;

use EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces\SetGetInterfaces;

/**
 * Abstraction of SetGetInterfaces
 *
 * @category SetGet
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class SetGetAbstractions implements SetGetInterfaces
{
    
    /**
     *
     * @var string
     */
    public $cursor;
    
    /**
     * Set a value
     *
     * @return mixed
     */
    public function set($value)
    {
        $this->{$this->cursor} = $value;
        
        return $this;        
    }
    
    /**
     * Get a value
     *
     * @return mixed
     */
    public function get()
    {
        return $this->{$this->cursor};         
    }
}
