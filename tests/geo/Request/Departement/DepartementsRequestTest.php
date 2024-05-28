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
use WBW\Library\GouvApi\Geo\Request\Departement\DepartementsRequest;
use WBW\Library\GouvApi\Geo\Response\DepartementsResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Départements request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Request\Departement
 */
class DepartementsRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new DepartementsRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(DepartementsResponse::class, $res);
    }

    /**
     * Test getSubstituables()
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new DepartementsRequest();

        $this->assertEquals([":code" => ""], $obj->getSubstituables());

        $obj->setCode("code");
        $this->assertEquals([":code" => "/code"], $obj->getSubstituables());
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new DepartementsRequest();

        $res = $obj->serializeRequest();
        $this->assertEquals([], $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/departements:code", DepartementsRequest::RESOURCE_PATH);

        $obj = new DepartementsRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);
        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(DepartementsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
