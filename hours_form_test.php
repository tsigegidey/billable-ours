<?php
//login_form_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class LoginForm extends WebTestCase {

	  function testpartialHours() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

        $this->setField("hours", "1.5");
		$this->setField("rate", "50");
		$this->clickSubmit("show pay");

		$this->assertResponse(200);
		$this->assertText("You input 1.5  hours at a rate of $50 and your pay is $75");
	}

}
