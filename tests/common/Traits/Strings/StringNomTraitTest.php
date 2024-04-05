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

namespace WBW\Library\GouvApi\Common\Tests\Traits\Strings;

use WBW\Library\GouvApi\Common\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Common\Tests\Fixtures\Traits\Strings\TestStringNomTrait;

/**
 * String nom trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Common\Tests\Traits\Strings
 */
class StringNomTraitTest extends AbstractTestCase {

    /**
     * Test setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new TestStringNomTrait();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }
}
