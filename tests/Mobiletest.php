<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require dirname(__DIR__) . '/app/Mobile.php';

final class Mobiletest extends TestCase
{
    public function testGetNameWithValidValue()
    {
      //  $utils = new Utils();
      //  $this->assertEquals("Axel", $utils->get_name(1981, 6, 16));
    }
    public function firsttest()
    {
      $mobile = new Mobile();
      $this->assertTrue($mobile->create(2));
    }
}
