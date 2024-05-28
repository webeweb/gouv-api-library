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

namespace WBW\Library\GouvApi\Geo\Tests\Serializer;

use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Response\DepartementsResponse;
use WBW\Library\GouvApi\Geo\Response\RegionsResponse;
use WBW\Library\GouvApi\Geo\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeCommunesResponse()
     *
     * @return void
     */
    public function testDeserializeCommunesResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeCommunesResponse.json");

        $res = ResponseDeserializer::deserializeCommunesResponse($rawResponse);
        $this->assertInstanceOf(CommunesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertCount(393, $res->getCommunes());

        $this->assertEquals("L'Abergement-Clémenciat", $res->getCommunes()[0]->getNom());
        $this->assertEquals("01001", $res->getCommunes()[0]->getCode());
        $this->assertEquals("01", $res->getCommunes()[0]->getCodeDepartement());
        $this->assertEquals("84", $res->getCommunes()[0]->getCodeRegion());
        $this->assertNull($res->getCommunes()[0]->getCentre());
        $this->assertNull($res->getCommunes()[0]->getContour());
        $this->assertNull($res->getCommunes()[0]->getSurface());
        $this->assertEquals(767, $res->getCommunes()[0]->getPopulation());
        $this->assertNull($res->getCommunes()[0]->getScore());
        $this->assertNull($res->getCommunes()[0]->getDepartement());
        $this->assertNull($res->getCommunes()[0]->getRegion());
    }

    /**
     * Test deserializeCommunesResponse()
     *
     * @return void
     */
    public function testDeserializeCommunesResponseWithBadResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeCommunesResponse($rawResponse);
        $this->assertInstanceOf(CommunesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertCount(0, $res->getCommunes());
    }

    /**
     * Test deserializeCommunesResponse()
     *
     * @return void
     */
    public function testDeserializeCommunesResponseWithGeoJSON(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeCommunesResponseWithGeoJSON.json");

        $res = ResponseDeserializer::deserializeCommunesResponse($rawResponse);
        $this->assertInstanceOf(CommunesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertCount(1, $res->getCommunes());

        $this->assertEquals("Versailles", $res->getCommunes()[0]->getNom());
        $this->assertEquals("78646", $res->getCommunes()[0]->getCode());
        $this->assertEquals("78", $res->getCommunes()[0]->getCodeDepartement());
        $this->assertEquals("11", $res->getCommunes()[0]->getCodeRegion());
        $this->assertNotNull($res->getCommunes()[0]->getCentre());
        $this->assertNotNull($res->getCommunes()[0]->getContour());
        $this->assertEquals(2615.45, $res->getCommunes()[0]->getSurface());
        $this->assertEquals(85346, $res->getCommunes()[0]->getPopulation());
        $this->assertEquals("78000", $res->getCommunes()[0]->getCodesPostaux()[0]);
        $this->assertEquals(1, $res->getCommunes()[0]->getScore());
        $this->assertNotNull($res->getCommunes()[0]->getDepartement());
        $this->assertNotNull($res->getCommunes()[0]->getRegion());
    }

    /**
     * Test deserializeDepartementsResponse()
     *
     * @return void
     */
    public function testDeserializeDepartementsResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeDepartementsResponse.json");

        $res = ResponseDeserializer::deserializeDepartementsResponse($rawResponse);
        $this->assertInstanceOf(DepartementsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertCount(5, $res->getDepartements());

        $this->assertEquals("Calvados", $res->getDepartements()[0]->getNom());
        $this->assertEquals("14", $res->getDepartements()[0]->getCode());
        $this->assertEquals("28", $res->getDepartements()[0]->getCodeRegion());
        $this->assertNull($res->getDepartements()[0]->getScore());
    }

    /**
     * Test deserializeDepartementsResponse()
     *
     * @return void
     */
    public function testDeserializeDepartementsResponseWithBadResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeDepartementsResponse($rawResponse);
        $this->assertInstanceOf(DepartementsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertCount(0, $res->getDepartements());
    }

    /**
     * Test deserializeRegionsResponse()
     *
     * @return void
     */
    public function testDeserializeRegionsResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRegionsResponse.json");

        $res = ResponseDeserializer::deserializeRegionsResponse($rawResponse);
        $this->assertInstanceOf(RegionsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertCount(18, $res->getRegions());

        $this->assertEquals("Guadeloupe", $res->getRegions()[0]->getNom());
        $this->assertEquals("01", $res->getRegions()[0]->getCode());
        $this->assertNull($res->getRegions()[0]->getScore());
    }

    /**
     * Test deserializeRegionsResponse()
     *
     * @return void
     */
    public function testDeserializeRegionsResponseWithBadResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeRegionsResponse($rawResponse);
        $this->assertInstanceOf(RegionsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertCount(0, $res->getRegions());
    }
}
