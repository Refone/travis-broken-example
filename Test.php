<?php
require "submodule.php";

class Test extends PHPUnit_Framework_TestCase
{
    public function testOnePlusOne() {
        $m = new Module();
		$this->assertEquals($m->test(),1);
  	}
}

?>
