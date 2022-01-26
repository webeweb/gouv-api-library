<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Common\Tests\Model\Attribute;

use WBW\Library\GouvApi\Common\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Common\Tests\Fixtures\Model\Attribute\TestStringNomTrait;

/**
 * String nom trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Common\Tests\Model\Attribute
 */
class StringNomTraitTest extends AbstractTestCase {

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new TestStringNomTrait();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }
}
