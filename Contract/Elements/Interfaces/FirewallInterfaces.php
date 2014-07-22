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
     * Handle error or exception
     * 
     * @return mixed
     */
    public function handle();    
}
