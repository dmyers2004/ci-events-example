<?php 

class some_random_lib {

	public function __construct() {
		/*
		hey i'm some random library that loaded after the events library
		so I am going to register a few listeners
		I could be any php code loaded after event.php
		*/		
	
		$ci = get_instance();
		
		$ci->event->register('red.flare',function(&$input) {
			$input .= ' add some content to $input';
		});
		

		/* this is registered first but has a priority of 0 default */
		$ci->event->register('priority.example',function(&$input) {
			$input .= ' priority.example priority 0 - i\'m just the default level<br>';
		}); /* the default is 0 */

		/* this is registered second but has a priority of 10 lower (unix style levels) */
		$ci->event->register('priority.example',function(&$input) {
			$input .= ' priority.example priority 10 I should go last :( <br>';
		},10);

		/* this is registered last but has a priority of -23 higher (unix style levels) */
		$ci->event->register('priority.example',function(&$input) {
			$input .= ' priority.example priority -23 I should get to go first :) !<br>';
		},-23);

		/*
		this is registered first but has a priority of 0 default
		so this actually goes last
		*/
		$ci->event->register('math.boom',function(&$a,&$b,&$c) {
			$c = '$a('.$a.') + $b('.$b.') = '.($a + $b);			
		}); /* the default is 0 */

		/*
		this is registered last but has a priority of -23 higher (unix style levels)
		so remember it goes first
		*/
		$ci->event->register('math.boom',function(&$a,&$b,&$c) {
			$c = '$a('.$a.') * $b('.$b.') = '.($a * $b);			
		},-999);

		
		$ci->event->register('orders',function(&$a) { $a .= ' add "100"'; },100);
		$ci->event->register('orders',function(&$a) { $a .= ' add "-100"'; },-100);
		$ci->event->register('orders',function(&$a) { $a .= ' add "23"'; },23);
		$ci->event->register('orders',function(&$a) { $a .= ' add "-23"'; },-23);
		$ci->event->register('orders',function(&$a) { $a .= ' add "0"'; },0);
		$ci->event->register('orders',function(&$a) { $a .= ' add "10"'; },10);
		$ci->event->register('orders',function(&$a) { $a .= ' add "-17"'; },-17);
		$ci->event->register('orders',function(&$a) { $a .= ' add "23"'; },23);
		
		
		/*
		if you don't set a priority then it is set to 0
		and the events are triggered in 
		the order they are registered
		*/
	}

} /* end class */