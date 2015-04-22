<?php
/**
* Orange Framework Extension
*
* This content is released under the MIT License (MIT)
*
* @package	CodeIgniter / Orange
* @author	Don Myers
* @license	http://opensource.org/licenses/MIT	MIT License
* @link	https://github.com/dmyers2004
*/
class Event {
	protected $listeners = [];

	/*
		priorities are set using the unix nice levels
		http://www.computerhope.com/unix/unice.htm
		
		In short - the lower the number the higher the priority
			 100 High
				0  Normal
			-100 Low
	*/
	public function register($name, $closure, $priority=0) {
		log_message('debug', 'event::register::'.$name);

		$this->listeners[$name][$priority][] = $closure;
		
		/* chainable */
		return $this;
	}

	public function trigger($name,&$a=null,&$b=null,&$c=null,&$d=null,&$e=null,&$f=null,&$g=null,&$h=null) {
		log_message('debug', 'event::trigger::'.$name);

		if ($this->has_event($name)) {
			$events = $this->listeners[$name];

			ksort($events);

			foreach ($events as $priority) {
				foreach ($priority as $event) {
					/* call closure */
					$event($a,$b,$c,$d,$e,$f,$g,$h);
				}
			}
		}
		
		/* chainable */
		return $this;
	}

	public function has_event($name) {
		return (isset($this->listeners[$name]) && count($this->listeners[$name]) > 0);
	}

	/* This is more for debugging since it's pretty raw data */
	public function events() {
		return array_keys($this->listeners);
	}
	
	/* This is more for testing since it clears the listeners array */
	public function clear() {
		$this->listeners = [];

		/* chainable */
		return $this;
	}

} /* end Event */