<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Communication
 * @package   Interface
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContract\Contract\Elements\Interfaces;

/**
 * Some communication final actions
 *
 * @category Communication
 * @package  Interface
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface CommunicationInterfaces
{
    /**
     * Send something
     * 
     * @return mixed
     */
    public function send();
    
    /**
     * Receive something
     * 
     * @return mixed
     */
    public function receive();
}
