<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Traits\Arrays;

use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Geo\Tests\Fixtures\Traits\Arrays\TestArrayFieldsTrait;

/**
 * Array fields trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Traits\Arrays
 */
class ArrayFieldsTraitTest extends AbstractTestCase {

    /**
     * Test aadField()
     *
     * @return void
     */
    public function testAddField(): void {

        $obj = new TestArrayFieldsTrait();

        $obj->addField("field");
        $this->assertEquals("field", $obj->getFields()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayFieldsTrait();

        $this->assertEquals([], $obj->getFields());
    }
}
