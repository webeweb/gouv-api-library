<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Model\Attribute;

use WBW\Library\GouvAPI\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvAPI\Entreprise\Tests\Fixtures\Model\Attribute\TestStringUpdatedAtTrait;

/**
 * String updated at trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Model\Attribute
 */
class StringUpdatedAtTraitTest extends AbstractTestCase {

    /**
     * Tests the setUpdatedAt() method.
     *
     * @return void
     */
    public function testSetUpdatedAt(): void {

        $obj = new TestStringUpdatedAtTrait();

        $obj->setUpdatedAt("updatedAt");
        $this->assertEquals("updatedAt", $obj->getUpdatedAt());
    }

}