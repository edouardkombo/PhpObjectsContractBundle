<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  OpenClose
 * @package   Interfaces
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @copyright 2013-2014 Edouard Kombo
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     0.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

/**
 * Some final actions for open close
 *
 * @category OpenClose
 * @package  Interfaces
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface OpenCloseInterfaces
{
    /**
     * Open something
     * 
     * @return mixed $this
     */
    public function open();

    /**
     * Close something
     *
     * @return mixed
     */
    public function close();   
}
