<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Traits\Strings;

use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Geo\Tests\Fixtures\Traits\Strings\TestStringCodeRegionTrait;

/**
 * String code région trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Model\Attribute
 */
class StringCodeRegionTraitTest extends AbstractTestCase {

    /**
     * Test setCodeRegion()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TestStringCodeRegionTrait();

        $obj->setCodeRegion("codeRegion");
        $this->assertEquals("codeRegion", $obj->getCodeRegion());
    }
}
