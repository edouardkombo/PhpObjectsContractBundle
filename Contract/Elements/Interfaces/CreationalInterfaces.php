<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Creational
 * @package   Interface
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContract\Contract\Elements\Interfaces;

/**
 * Some creation final actions
 *
 * @category Creational
 * @package  Interface
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface CreationalInterfaces
{
    /**
     * Create something
     * 
     * @return mixed
     */
    public function create();
    
    /**
     * Update something
     * 
     * @return mixed
     */
    public function update();
    
    /**
     * Delete something
     * 
     * @return mixed
     */
    public function delete();    
}
