<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Entreprise\Tests\Traits\Strings;

use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Traits\Strings\TestStringNombrePeriodesTrait;

/**
 * String nombre périodes trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Traits\Strings
 */
class StringNombrePeriodesTraitTest extends AbstractTestCase {

    /**
     * Test setNombrePeriodes()
     *
     * @return void
     */
    public function testSetNombrePeriodes(): void {

        $obj = new TestStringNombrePeriodesTrait();

        $obj->setNombrePeriodes("nombrePeriodes");
        $this->assertEquals("nombrePeriodes", $obj->getNombrePeriodes());
    }
}
