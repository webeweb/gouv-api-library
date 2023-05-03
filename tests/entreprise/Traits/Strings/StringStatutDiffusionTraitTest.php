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
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Traits\Strings\TestStringStatutDiffusionTrait;

/**
 * String statut diffusion trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Traits\Strings
 */
class StringStatutDiffusionTraitTest extends AbstractTestCase {

    /**
     * Test setStatutDiffusion()
     *
     * @return void
     */
    public function testSetStatutDiffusion(): void {

        $obj = new TestStringStatutDiffusionTrait();

        $obj->setStatutDiffusion("statutDiffusion");
        $this->assertEquals("statutDiffusion", $obj->getStatutDiffusion());
    }

}
