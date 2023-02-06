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

use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Unités légales request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Request
 */
class UnitesLegalesRequestTest extends AbstractTestCase {

    /**
     * Tests getSubstituables()
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
     * Tests serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new UnitesLegalesRequest();
        $obj->setPage(2);
        $obj->setPerPage(100);

        $res = $obj->serializeRequest();
        $this->assertCount(2, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(100, $res["per_page"]);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/api/sirene/v3/unites_legales:siren", UnitesLegalesRequest::RESOURCE_PATH);

        $obj = new UnitesLegalesRequest();

        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(UnitesLegalesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getSiren());
    }
}
