<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Storing
 * @package   Interfaces
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

/**
 * Some storing final actions
 *
 * @category Storing
 * @package  Interfaces
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface StoringInterfaces
{
    /**
     * Read something
     *
     * @return mixed
     */
    public function read();
    
    /**
     * Write something
     *
     * @return mixed
     */
    public function write();   
}
