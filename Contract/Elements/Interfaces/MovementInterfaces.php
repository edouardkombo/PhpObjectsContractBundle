<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  Movement
 * @package   Interfaces
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Interfaces;

/**
 * Some movement final actions
 *
 * @category Movement
 * @package  Interfaces
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
interface MovementInterfaces
{
    /**
     * Move up
     *
     * @return mixed
     */
    public function up();
    
    /**
     * Move down
     *
     * @return mixed
     */
    public function down();
    
    /**
     * Move left
     *
     * @return mixed
     */
    public function left();
    
    /**
     * Move right
     *
     * @return mixed
     */
    public function right();    
}
