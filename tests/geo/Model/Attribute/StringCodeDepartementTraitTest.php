<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Model\Attribute;

use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Geo\Tests\Fixtures\Model\Attribute\TestStringCodeDepartementTrait;

/**
 * String code département trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Geo\Tests\Model\Attribute
 */
class StringCodeDepartementTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeDepartement() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TestStringCodeDepartementTrait();

        $obj->setCodeDepartement("codeDepartement");
        $this->assertEquals("codeDepartement", $obj->getCodeDepartement());
    }
}
