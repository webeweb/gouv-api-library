<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Tests\Provider;

use Exception;
use WBW\Library\GeoJson\Model\FeatureCollection;
use WBW\Library\GouvApi\Adresse\Provider\ApiProvider;
use WBW\Library\GouvApi\Adresse\Request\ReverseCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\ReverseRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchRequest;
use WBW\Library\GouvApi\Adresse\Response\ReverseCsvResponse;
use WBW\Library\GouvApi\Adresse\Response\SearchCsvResponse;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Adresse\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase
{

    /**
     * Tests the reverse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReverse(): void {

        // Set a Reverse request mock.
        $arg = new ReverseRequest(49.897443, 2.290084);

        $obj = new ApiProvider($this->logger);

        $res = $obj->reverse($arg);
        $this->assertInstanceOf(FeatureCollection::class, $res);

        $this->assertCount(1, $res->getFeatures());

        $this->assertEquals("draft", $res->getForeignMember("version"));
        $this->assertEquals("BAN", $res->getForeignMember("attribution"));
        $this->assertNotNull($res->getForeignMember("licence"));
        $this->assertEquals(1, $res->getForeignMember("limit"));
    }

    /**
     * Tests the reverseCsv() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReverseCsv(): void {

        // Set a data mock.
        $data = realpath(__DIR__ . "/../Fixtures/Request/ReverseCsvRequest.csv");

        // Set a Reverse request mock.
        $arg = new ReverseCsvRequest($data);

        $obj = new ApiProvider($this->logger);

        $res = $obj->reverseCsv($arg);
        $this->assertInstanceOf(ReverseCsvResponse::class, $res);

        $this->assertNotNull($res->getRawResponse());
        $this->assertNotEquals([], $res->getAdresses());
    }

    /**
     * Tests the search() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearch(): void {

        // Set a Search request mock.
        $arg = new SearchRequest("8 bd du port");

        $obj = new ApiProvider($this->logger);

        $res = $obj->search($arg);
        $this->assertInstanceOf(FeatureCollection::class, $res);

        $this->assertCount(5, $res->getFeatures());

        $this->assertEquals("draft", $res->getForeignMember("version"));
        $this->assertEquals("BAN", $res->getForeignMember("attribution"));
        $this->assertNotNull($res->getForeignMember("licence"));
        $this->assertEquals($arg->getQ(), $res->getForeignMember("query"));
        $this->assertEquals(5, $res->getForeignMember("limit"));
    }

    /**
     * Tests the searchCsv() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchCsv(): void {

        // Set a data mock.
        $data = realpath(__DIR__ . "/../Fixtures/Request/SearchCsvRequest.csv");

        // Set a Search request mock.
        $arg = new SearchCsvRequest($data);

        $obj = new ApiProvider($this->logger);

        $res = $obj->searchCsv($arg);
        $this->assertInstanceOf(SearchCsvResponse::class, $res);

        $this->assertNotNull($res->getRawResponse());
        $this->assertNotEquals([], $res->getAdresses());
    }

    /**
     * Tests the searchCsv() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchCsvWithColumns(): void {

        // Set a data mock.
        $data = realpath(__DIR__ . "/../Fixtures/Request/SearchCsvRequest.csv");

        // Set a Search request mock.
        $arg = new SearchCsvRequest($data);
        $arg->addColumn("adresse");
        $arg->addColumn("postcode");
        $arg->addResultColumn("result_id");
        $arg->addResultColumn("result_score");

        $obj = new ApiProvider($this->logger);

        $res = $obj->searchCsv($arg);
        $this->assertInstanceOf(SearchCsvResponse::class, $res);

        $this->assertNotNull($res->getRawResponse());
        $this->assertNotEquals([], $res->getAdresses());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("https://api-adresse.data.gouv.fr", ApiProvider::ENDPOINT_PATH);

        $obj = new ApiProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
        $this->assertEquals(ApiProvider::ENDPOINT_PATH, $obj->getEndpointPath());
    }
}
