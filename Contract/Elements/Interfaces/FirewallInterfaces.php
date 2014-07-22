<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Firewall
 * @package   Interface
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     0.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

/**
 * Some creation final actions
 *
 * @category Firewall
 * @package  Interface
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface FirewallInterfaces
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
    public function checkIfPropertyExists($property, $class);
}
