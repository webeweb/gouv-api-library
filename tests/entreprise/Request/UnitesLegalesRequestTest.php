<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Request;

use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * Unités légales request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Request
 */
class UnitesLegalesRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new UnitesLegalesRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);
    }

    /**
     * Test getSubstituables()
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new UnitesLegalesRequest();

        $this->assertEquals([":siren" => null], $obj->getSubstituables());

        $obj->setSiren("350273462");
        $this->assertEquals([":siren" => "/350273462"], $obj->getSubstituables());
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new UnitesLegalesRequest();

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/api/sirene/v3/unites_legales:siren", UnitesLegalesRequest::RESOURCE_PATH);

        $obj = new UnitesLegalesRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);
        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(UnitesLegalesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getSiren());
    }
}
