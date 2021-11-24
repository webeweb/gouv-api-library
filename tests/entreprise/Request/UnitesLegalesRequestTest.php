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
use WBW\Library\Provider\API\SubstituableRequestInterface;

/**
 * Unités légales request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Request
 */
class UnitesLegalesRequestTest extends AbstractTestCase {

    /**
     * Tests the getSubstituables() method.
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
     * Tests the __construct() method.
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