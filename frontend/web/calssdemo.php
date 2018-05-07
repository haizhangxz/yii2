<?php
class base{
	  public static function configure($object, $properties)
    {
      
        foreach ($properties as $name => $value) {
            //$object->$name = $value;
        }

        return $object;
    }
}
class A{
	public $test = '20';
	public function  __construct($config =[]){
		 if (!empty($config)) {
            base::configure($this, $config);
        }
	}
}
class B extends A{
	public $test = '10';
}

$demo = new B(['test'=>100]);
print_r ($demo->test);