<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Geo\Tests\Traits\Strings;

use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Geo\Tests\Fixtures\Traits\Strings\TestStringGeometryTrait;

/**
 * String geometry trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Model\Attribute
 */
class StringGeometryTraitTest extends AbstractTestCase {

    /**
     * Test setGeometry()
     *
     * @return void
     */
    public function testSetGeometry(): void {

        $obj = new TestStringGeometryTrait();

        $obj->setGeometry("geometry");
        $this->assertEquals("geometry", $obj->getGeometry());
    }
}
