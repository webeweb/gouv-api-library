<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Model\Attribute;

use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Model\Attribute\TestIntegerNombrePeriodesTrait;

/**
 * Integer nombre périodes trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Model\Attribute
 */
class IntegerNombrePeriodesTraitTest extends AbstractTestCase
{

    /**
     * Tests the setNombrePeriodes() method.
     *
     * @return void
     */
    public function testSetNombrePeriodes(): void {

        $obj = new TestIntegerNombrePeriodesTrait();

        $obj->setNombrePeriodes(4);
        $this->assertEquals(4, $obj->getNombrePeriodes());
    }

}