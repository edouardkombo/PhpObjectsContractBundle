<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Firewall
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     0.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Abstractions;

use EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces\FirewallInterfaces;

/**
 * Abstraction of FirewallInterfaces
 *
 * @category Firewall
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class FirewallAbstractions implements FirewallInterfaces
{
    
    /**
     * Check if property exists in class
     * 
     * @param string $property Class property
     * @param Object $class    Class object
     * 
     * @return boolean
     * @throws ErrorException
     */
    public function checkIfPropertyExists($property, $class)
    {
        $message = "ErrorException: Unknown property '$property'. ";
        $message .= "To list valid properties, open SetGetContract class"; 

        if (!isset($class->{$property})) {
            throw new \ErrorException($message); 
        }           
        
        return true;        
    }
}