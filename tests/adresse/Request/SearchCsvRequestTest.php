<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Tests\Request;

use WBW\Library\GouvApi\Adresse\Request\SearchCsvRequest;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;

/**
 * Search CSV request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Adresse\Tests\Request
 */
class SearchCsvRequestTest extends AbstractTestCase {

    /**
     * Tests the addColumn() method.
     *
     * @return void
     */
    public function testAddColumn(): void {

        $obj = new SearchCsvRequest();

        $obj->addColumn("column");
        $this->assertEquals(["column"], $obj->getColumns());
    }

    /**
     * Tests the addResultColumn() method.
     *
     * @return void
     */
    public function testAddResultColumn(): void {

        $obj = new SearchCsvRequest();

        $obj->addResultColumn("resultColumn");
        $this->assertEquals(["resultColumn"], $obj->getResultColumns());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/search/csv/", SearchCsvRequest::RESOURCE_PATH);

        $obj = new SearchCsvRequest("data");

        $this->assertEquals(SearchCsvRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertEquals("data", $obj->getData());
        $this->assertEquals([], $obj->getColumns());
        $this->assertEquals([], $obj->getResultColumns());
    }
}