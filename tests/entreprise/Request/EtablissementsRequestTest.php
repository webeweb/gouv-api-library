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
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Etablissements request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Request
 */
class EtablissementsRequestTest extends AbstractTestCase {

    /**
     * Tests deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new EtablissementsRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(EtablissementsResponse::class, $res);
    }

    /**
     * Tests getSubstituables()
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
     * Tests serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new EtablissementsRequest();

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);
    }

    /**
     * Tests __construct()
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
