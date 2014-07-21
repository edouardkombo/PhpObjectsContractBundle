<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  OpenClose
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Abstractions;

use EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces\OpenCloseInterfaces;

/**
 * Abstraction of OpenCloseInterfaces
 *
 * @category OpenClose
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class OpenCloseAbstractions implements OpenCloseInterfaces
{
    /**
     *
     * @var mixed
     */
    protected $datas;
    
    /**
     * Open something
     * 
     * @return mixed $this
     */
    public function open()
    {
        
    }

    /**
     * Close something
     *
     * @return mixed
     */
    public function close()
    {
        
    }
}
