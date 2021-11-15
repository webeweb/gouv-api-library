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
use WBW\Library\GouvAPI\Entreprise\Tests\Fixtures\Model\Attribute\TestStringTrancheEffectifsTrait;

/**
 * String tranche effectifs trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Model\Attribute
 */
class StringTrancheEffectifsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrancheEffectifs() method.
     *
     * @return void
     */
    public function testSetTrancheEffectifs(): void {

        $obj = new TestStringTrancheEffectifsTrait();

        $obj->setTrancheEffectifs("trancheEffectifs");
        $this->assertEquals("trancheEffectifs", $obj->getTrancheEffectifs());
    }

}