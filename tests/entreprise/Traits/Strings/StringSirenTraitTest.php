<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Traits\Strings;

use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Traits\Strings\TestStringSirenTrait;

/**
 * String SIREN trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Traits\Strings
 */
class StringSirenTraitTest extends AbstractTestCase {

    /**
     * Test setSiren()
     *
     * @return void
     */
    public function testSetSiren(): void {

        $obj = new TestStringSirenTrait();

        $obj->setSiren("siren");
        $this->assertEquals("siren", $obj->getSiren());
    }
}
