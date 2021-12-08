<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Request;

use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Etablissements request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Request
 */
class EtablissementsRequestTest extends AbstractTestCase {

    /**
     * Tests the getSubstituables() method.
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new EtablissementsRequest();

        $this->assertEquals([":siret" => null], $obj->getSubstituables());

        $obj->setSiret("35027346200019");
        $this->assertEquals([":siret" => "/35027346200019"], $obj->getSubstituables());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/api/sirene/v3/etablissements:siret", EtablissementsRequest::RESOURCE_PATH);

        $obj = new EtablissementsRequest();

        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(EtablissementsRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getSiret());
    }
}