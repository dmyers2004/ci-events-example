###################
CodeIgniter Events Library
###################

I plan on releasing a stripped down version of my CodeIgniter Framework extensions soon...

but, I figured this could be used as is now.

It includes the following methods:

::

 public register($name,$closure,$priority=0);

 public trigger($name,&$a=null,&$b=null,&$c=null,&$d=null,&$e=null,&$f=null,&$g=null,&$h=null);

 public has_event($name);

 public events();

 public clear();
 
 
Changes to: /application/controllers/Welcome.php (example to trigger events)

Changes to: /application/views/welcome_message.php (view to show links to examples)

New: /application/libraries/Event.php (the events library)

New: /application/libraries/Some_random_lib.php (a example library which registers some listeners)

New: /application/views/input.php (show output from the controller changes)
