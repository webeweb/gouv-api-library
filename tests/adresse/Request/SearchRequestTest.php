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

namespace WBW\Library\GouvApi\Adresse\Tests\Request;

use WBW\Library\GouvApi\Adresse\Request\SearchRequest;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;

/**
 * Search request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Tests\Request
 */
class SearchRequestTest extends AbstractTestCase {

    /**
     * Test enumTypes()
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $res = [
            SearchRequest::TYPE_HOUSE_NUMBER,
            SearchRequest::TYPE_LOCALITY,
            SearchRequest::TYPE_MUNICIPALITY,
            SearchRequest::TYPE_STREET,
        ];
        $this->assertEquals($res, SearchRequest::enumTypes());
    }

    /**
     * Test setAutocomplete()
     *
     * @return void
     */
    public function testSetAutocomplete(): void {

        $obj = new SearchRequest();

        $obj->setAutocomplete(true);
        $this->assertTrue($obj->getAutocomplete());
    }

    /**
     * Test setLimit()
     *
     * @return void
     */
    public function testSetLimit(): void {

        $obj = new SearchRequest();

        $obj->setLimit(1);
        $this->assertEquals(1, $obj->getLimit());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/search/", SearchRequest::RESOURCE_PATH);

        $this->assertEquals("housenumber", SearchRequest::TYPE_HOUSE_NUMBER);
        $this->assertEquals("locality", SearchRequest::TYPE_LOCALITY);
        $this->assertEquals("municipality", SearchRequest::TYPE_MUNICIPALITY);
        $this->assertEquals("street", SearchRequest::TYPE_STREET);

        $obj = new SearchRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(SearchRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getQ());
        $this->assertNull($obj->getLimit());
        $this->assertNull($obj->getAutocomplete());
        $this->assertNull($obj->getLat());
        $this->assertNull($obj->getLon());
        $this->assertNull($obj->getType());
    }
}
