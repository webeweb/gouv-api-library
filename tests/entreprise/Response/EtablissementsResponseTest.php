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

namespace WBW\Library\GouvApi\Entreprise\Tests\Response;

use WBW\Library\GouvApi\Entreprise\Model\Etablissement;
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * Etablissements response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Response
 */
class EtablissementsResponseTest extends AbstractTestCase {

    /**
     * Test addEtablissement()
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
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EtablissementsResponse();

        $this->assertEquals([], $obj->getEtablissements());
    }
}
