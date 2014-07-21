<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Communication
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

use EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces\CommunicationInterfaces;

/**
 * Abstraction of CommunicationInterfaces
 *
 * @category Communication
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class CommunicationAbstractions implements CommunicationInterfaces
{
    
    /**
     *
     * @var mixed
     */
    protected $datas;
    
    /**
     * Send something
     * 
     * @return mixed
     */
    public function send()
    {
        
    }
    
    /**
     * Receive something
     * 
     * @return mixed
     */
    public function receive()
    {
        
    }
}
