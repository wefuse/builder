<?php
/**
 * Builder plugin for Craft CMS 3.x
 *
 * An advanced grid like builder field for Craft CMS that uses self created and existing fields.
 *
 * @link      www.wefuse.com
 * @copyright Copyright (c) 2021 WeFuse
 */

namespace builder\buildertests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use builder\builder\Builder;

/**
 * ExampleUnitTest
 *
 *
 * @author    WeFuse
 * @package   Builder
 * @since     0.0.1
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            Builder::class,
            Builder::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
