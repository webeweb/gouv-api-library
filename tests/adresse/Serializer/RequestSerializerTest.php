<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Tests\Serializer;

use WBW\Library\GouvApi\Adresse\Request\ReverseCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\ReverseRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchRequest;
use WBW\Library\GouvApi\Adresse\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Tests serializeReverseCsvRequest()
     *
     * @return void
     */
    public function testSerializeReverseCsvRequest(): void {

        // Set a Reverse CSV request mock.
        $arg = new ReverseCsvRequest();
        $arg->setData("data");

        $res = RequestSerializer::serializeReverseCsvRequest($arg);
        $this->assertCount(1, $res);

        $this->assertEquals("data", $res["data"]);
    }

    /**
     * Tests serializeReverseRequest()
     *
     * @return void
     */
    public function testSerializeReverseRequest(): void {

        // Set a Reverse request mock.
        $arg = new ReverseRequest();
        $arg->setLat(48.789);
        $arg->setLon(2.789);

        $res = RequestSerializer::serializeReverseRequest($arg);
        $this->assertCount(2, $res);

        $this->assertEquals(48.789, $res["lat"]);
        $this->assertEquals(2.789, $res["lon"]);
    }

    /**
     * Tests serializeSearchCsvRequest()
     *
     * @return void
     */
    public function testSerializeSearchCsvRequest(): void {

        // Set a Search CSV request mock.
        $arg = new SearchCsvRequest();
        $arg->setData("data");

        $res = RequestSerializer::serializeSearchCsvRequest($arg);
        $this->assertCount(1, $res);

        $this->assertEquals("data", $res["data"]);
    }

    /**
     * Tests serializeSearchRequest()
     *
     * @return void
     */
    public function testSerializeSearchRequest(): void {

        // Set a Search request mock.
        $arg = new SearchRequest();
        $arg->setQ("q");
        $arg->setLimit(15);
        $arg->setAutocomplete(false);
        $arg->setLat(48.789);
        $arg->setLon(2.789);
        $arg->setPostcode("postcode");
        $arg->setCityCode("cityCode");
        $arg->setType(SearchRequest::TYPE_STREET);

        $res = RequestSerializer::serializeSearchRequest($arg);
        $this->assertCount(8, $res);

        $this->assertEquals("q", $res["q"]);
        $this->assertEquals(15, $res["limit"]);
        $this->assertEquals(0, $res["autocomplete"]);
        $this->assertEquals(48.789, $res["lat"]);
        $this->assertEquals(2.789, $res["lon"]);
        $this->assertEquals("postcode", $res["postcode"]);
        $this->assertEquals("cityCode", $res["citycode"]);
        $this->assertEquals(SearchRequest::TYPE_STREET, $res["type"]);
    }
}
