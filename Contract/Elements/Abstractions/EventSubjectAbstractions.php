<?php

/**
 * Main docblock
 *
 * PHP version 5
 *
 * @category  EventSubject
 * @package   Abstractions
 * @author    Edouard Kombo <edouard.kombo@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @version   GIT: 1.0.0
 * @link      http://creativcoders.wordpress.com
 * @since     1.0.0
 */
namespace EdouardKombo\PhpObjectsContractBundle\Contract\Elements\Abstractions;

/**
 * EventSubjectAbstraction class is a part of the observer design pattern.
 *
 * @category EventSubject
 * @package  Abstractions
 * @author   Edouard Kombo <edouard.kombo@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://creativcoders.wordpress.com
 */
abstract class EventSubjectAbstractions implements \SplSubject
{
    
    /**
     *
     * @var object 
     */
    private $_observers;    
    
    /**
     * Attach observers
     * 
     * @param \SplObserver $event Event
     * 
     * @return EdouardKombo\PhpObjectsContract\Contract\Elements\Abstractions\EventSubjectAbstraction
     */
    public function attach(\SplObserver $event)
    {		
        $this->_observers->attach($event);	
        
        return (object) $this;
    }

    /**
     * Detach obervers
     * 
     * @param \SplObserver $obj Observser
     * 
     * @return EdouardKombo\PhpObjectsContract\Contract\Elements\Abstractions\EventSubjectAbstraction
     */
    public function detach(\SplObserver $obj)
    {    	
        $this->_observers->detach($obj);	        
        
        return (object) $this;
    }

    /**
     * Notify all observers
     * 
     * @param mixed &$args Arguments
     * 
     * @return void
     */
    public function notify(&$args = null)
    {        
        foreach ($this->_observers as $observer) {            
            $observer->update($this, $args);            
        }
    }        
}