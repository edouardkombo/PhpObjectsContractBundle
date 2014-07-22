<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Http
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Abstractions;

use EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces\HttpInterfaces;

/**
 * Abstraction of HttpInterfaces :)
 *
 * @category Http
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class HttpAbstractions implements HttpInterfaces
{
    
    /**
     * Send something via $_GET method
     * 
     * @return mixed
     */
    public function get()
    {
        
    }
    
    /**
     * Send something via $_POST method
     * 
     * @return mixed
     */
    public function post()
    {
        
    }
    
    /**
     * Send something via $_PUT method
     * 
     * @return mixed
     */
    public function put()
    {
        
    }
    
    /**
     * Send something via $_HEAD method
     * 
     * @return mixed
     */
    public function head()
    {
        
    }
    
    /**
     * Send something via $_DELETE method
     * 
     * @return mixed
     */
    public function delete()
    {
        
    }
}