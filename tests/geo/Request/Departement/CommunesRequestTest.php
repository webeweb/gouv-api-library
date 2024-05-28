<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Geo\Tests\Request\Departement;

use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;
use WBW\Library\GouvApi\Geo\Request\Departement\CommunesRequest;
use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Communes request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Request\Departement
 */
class CommunesRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new CommunesRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }

    /**
     * Test getSubstituables()
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new CommunesRequest();

        $obj->setCode("code");
        $this->assertEquals([":code" => "code"], $obj->getSubstituables());
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new CommunesRequest();

        $res = $obj->serializeRequest();
        $this->assertEquals([], $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/departements/:code/communes", CommunesRequest::RESOURCE_PATH);

        $obj = new CommunesRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);
        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(CommunesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getFormat());
        $this->assertNull($obj->getGeometry());
    }
}
