<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Security
 * @package   Interfaces
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

/**
 * Some security final actions
 *
 * @category Security
 * @package  Interfaces
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface SecurityInterfaces
{
    /**
     * Crypt something
     * 
     * @return mixed
     */
    public function crypt();
    
    /**
     * Decrypt something
     * 
     * @return mixed
     */
    public function decrypt();
    
    /**
     * Hash something
     * 
     * @return mixed
     */
    public function hash();
    
    /**
     * Unhash something
     * 
     * @return mixed
     */
    public function unhash();    
    
    /**
     * mask something
     * 
     * @return string
     */
    public function mask();
    
    /**
     * UnMask something
     * 
     * @return string
     */
    public function unMask();
    
    /**
     * Clean something
     * 
     * @return string
     */
    public function clean();      
}
