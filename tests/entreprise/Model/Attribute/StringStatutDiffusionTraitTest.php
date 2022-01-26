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
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Model\Attribute\TestStringStatutDiffusionTrait;

/**
 * String statut diffusion trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Model\Attribute
 */
class StringStatutDiffusionTraitTest extends AbstractTestCase {

    /**
     * Tests the setStatutDiffusion() method.
     *
     * @return void
     */
    public function testSetStatutDiffusion(): void {

        $obj = new TestStringStatutDiffusionTrait();

        $obj->setStatutDiffusion("statutDiffusion");
        $this->assertEquals("statutDiffusion", $obj->getStatutDiffusion());
    }

}
