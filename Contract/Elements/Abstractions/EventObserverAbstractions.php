<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  EventObserver
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     0.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Abstractions;

/**
 * EventObserverAbstractions class is part of the observer design pattern.
 *
 * @category EventObserver
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class EventObserverAbstractions implements \SplObserver
{
    /**
     *
     * @var array $states 
     */
    private $states = array();

    /**
     * Get the state
     * 
     * @return array
     */
    public function getStates()
    {
        return (array) $this->states;
    }

    /**
     * Add a new state
     * 
     * @param string  $state      State to add
     * @param integer $stateValue level
     * 
     * @return \EdouardKombo\PhpObjectsContract\Contract\Elements\Abstractions\EventObserverAbstraction
     */
    public function addState($state, $stateValue = 1)
    {
        $this->states[$state] = $stateValue;
        
        return (object) $this;
    }
    
    /**
     * Remove a state
     * 
     * @param string $state State
     * 
     * @return boolean
     */    
    public function removeState($state)
    {
        if ($this->hasState($state)) {
            unset($this->states[$state]);
            $result = true;   
        }
        
        $result = false;
        
        return (boolean) $result;
    }

    /**
     * Check if state exists
     * 
     * @param string $state State
     * 
     * @return boolean
     */
    public function hasState($state)
    {
        return (boolean) isset($this->states[$state]);        
    }			
    
    /**
     * Update subjects that are observed
     * 
     * @param \SplSubject $subject Subject to notify
     * @param mixed       &$arg    Arguments
     * 
     * @return mixed
     */
    public function update(\SplSubject $subject, &$arg = null)
    {
        
    }    
}