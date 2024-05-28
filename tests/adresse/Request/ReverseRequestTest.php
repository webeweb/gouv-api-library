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

use WBW\Library\GouvApi\Adresse\Request\ReverseRequest;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;

/**
 * Reverse request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Tests\Request
 */
class ReverseRequestTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/reverse/", ReverseRequest::RESOURCE_PATH);

        $obj = new ReverseRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(ReverseRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getLat());
        $this->assertNull($obj->getLon());
    }
}
