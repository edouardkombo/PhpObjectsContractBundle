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
 * @since     1.0.0
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
     * Set something
     * 
     * @return mixed
     */
    public function set();
    
    /**
     * Get something
     * 
     * @return mixed
     */
    public function get();     
}
