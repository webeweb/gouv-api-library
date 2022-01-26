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

use WBW\Library\GouvApi\Adresse\Request\ReverseCsvRequest;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;

/**
 * Reverse CSV request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Adresse\Tests\Request
 */
class ReverseCsvRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/reverse/csv/", ReverseCsvRequest::RESOURCE_PATH);

        $obj = new ReverseCsvRequest();

        $this->assertEquals(ReverseCsvRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getData());
    }
}
