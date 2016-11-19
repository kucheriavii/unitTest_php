<?php  
	require 'vendor/autoload.php';
	require 'sqrt_class.php';

	class sqrt_classTest extends PHPUnit_Framework_TestCase {

	/**
	* @dataProvider providerSq
	*/
		public function testSq($a,$b){
			$ob = new sqrt_class();
			$this->assertEquals($a, $ob->sq($b));
		}
		public function providerSq () {
			return array(
					array(2,4),
					array(1,100),
					array(5,25),
					array(2,40)
				);
		}
	}

?>