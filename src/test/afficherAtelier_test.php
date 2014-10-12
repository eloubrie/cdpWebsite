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
    $this->click("link=a");
    $this->waitForPageToLoad("30000");
  }
}
?>