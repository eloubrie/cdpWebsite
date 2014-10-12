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
    $this->click("css=img");
    $this->waitForPageToLoad("30000");
    $this->type("id=LAB", "BBBBBBB");
    $this->assertTrue($this->isElementPresent("name=TA"));
    $this->assertTrue($this->isElementPresent("id=in"));
    $this->type("id=DR", "11121211110");
    $this->click("id=in");
    $this->waitForPageToLoad("30000");
  }
}
?>