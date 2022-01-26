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
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Model\Attribute\TestStringNomenclatureActivitePrincipaleTrait;

/**
 * String nomenclatureactivité principale trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Model\Attribute
 */
class StringNomenclatureActivitePrincipaleTraitTest extends AbstractTestCase {

    /**
     * Tests the setNomenclatureActivitePrincipale() method.
     *
     * @return void
     */
    public function testSetNomenclatureActivitePrincipale(): void {

        $obj = new TestStringNomenclatureActivitePrincipaleTrait();

        $obj->setNomenclatureActivitePrincipale("nomenclatureActivitePrincipale");
        $this->assertEquals("nomenclatureActivitePrincipale", $obj->getNomenclatureActivitePrincipale());
    }

}
