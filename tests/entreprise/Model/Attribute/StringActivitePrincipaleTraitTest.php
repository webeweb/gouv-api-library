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
use WBW\Library\GouvAPI\Entreprise\Tests\Fixtures\Model\Attribute\TestStringActivitePrincipaleTrait;

/**
 * String activité principale trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Model\Attribute
 */
class StringActivitePrincipaleTraitTest extends AbstractTestCase {

    /**
     * Tests the setActivitePrincipale() method.
     *
     * @return void
     */
    public function testSetActivitePrincipale(): void {

        $obj = new TestStringActivitePrincipaleTrait();

        $obj->setActivitePrincipale("activitePrincipale");
        $this->assertEquals("activitePrincipale", $obj->getActivitePrincipale());
    }

}