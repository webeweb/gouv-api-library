<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Response;

use WBW\Library\GouvAPI\Entreprise\Model\Etablissement;
use WBW\Library\GouvAPI\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvAPI\Entreprise\Tests\AbstractTestCase;

/**
 * Etablissements response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Response
 */
class EtablissementsResponseTest extends AbstractTestCase {

    /**
     * Tests the addEtablissement() method.
     *
     * @return void
     */
    public function testAddEtablissement(): void {

        // Set an Etablissement mock.
        $etablissement = new Etablissement();

        $obj = new EtablissementsResponse();

        $obj->addEtablissement($etablissement);
        $this->assertSame($etablissement, $obj->getEtablissements()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EtablissementsResponse();

        $this->assertEquals([], $obj->getEtablissements());
    }
}