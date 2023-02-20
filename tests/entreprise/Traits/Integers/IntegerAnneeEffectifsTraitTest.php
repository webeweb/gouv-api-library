<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Traits\Integers;

use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Traits\Integers\TestIntegerAnneeEffectifsTrait;

/**
 * Integer année effectifs trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Traits\Integers
 */
class IntegerAnneeEffectifsTraitTest extends AbstractTestCase {

    /**
     * Tests setAnneeEffectifs()
     *
     * @return void
     */
    public function testSetAnneeEffectifs(): void {

        $obj = new TestIntegerAnneeEffectifsTrait();

        $obj->setAnneeEffectifs(2021);
        $this->assertEquals(2021, $obj->getAnneeEffectifs());
    }

}
