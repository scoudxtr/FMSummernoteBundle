<?php

namespace FM\SummernoteBundle\Tests;

use FM\SummernoteBundle\FMSummernoteBundle;

/**
 * Class FMSummernoteBundleTest.
 */
class FMSummernoteBundleTest extends \PHPUnit\Framework\TestCase
{
    public function testBundle()
    {
        $bundle = new FMSummernoteBundle();
        $this->assertInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle', $bundle);
    }
}
