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
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

use EdouardKombo\PhpObjectsContract\Contract\Elements\Interfaces\SetGetInterfaces;

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
     * @var mixed
     */
    protected $data;
    
    /**
     * Read something
     *
     * @return mixed
     */
    public function set()
    {
        
    }
    
    /**
     * Write something
     *
     * @return mixed
     */
    public function get()
    {
        
    }
}
