<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/cdpWebsite/vue/");
  }

  public function testMyTestCase()
  {
    $this->open("/cdpWebsite/vue/");
    $this->click("link=listeAteliers.php");
    $this->waitForPageToLoad("30000");
    $this->click("css=input[type=\"button\"]");
    $this->waitForPageToLoad("30000");
    $this->type("name=TA", "tt");
    $this->type("name=TH", "tt");
    $this->type("name=TY", "tt");
    $this->type("name=HR", "tt");
    $this->type("id=LAB", "tt");
    $this->type("id=LI", "tt");
    $this->type("id=DR", "0");
    $this->type("id=CA", "0");
    $this->type("name=HR", "0000-00-00");
    $this->click("id=in");
    $this->waitForPageToLoad("30000");
  }
}
?>