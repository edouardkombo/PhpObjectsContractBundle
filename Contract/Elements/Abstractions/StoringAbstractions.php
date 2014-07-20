<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Storing
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContract\Contract\Elements\Interfaces;

use EdouardKombo\PhpObjectsContract\Contract\Elements\Interfaces\StoringInterfaces;

/**
 * Abstraction of StoringInterfaces
 *
 * @category Storing
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class StoringAbstractions implements StoringInterfaces
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
    public function read()
    {
        
    }
    
    /**
     * Write something
     *
     * @return mixed
     */
    public function write()
    {
        
    }
}
