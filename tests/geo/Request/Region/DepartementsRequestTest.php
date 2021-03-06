<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Request\Region;

use WBW\Library\GouvApi\Geo\Request\Region\DepartementsRequest;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Départements request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Request\Region
 */
class DepartementsRequestTest extends AbstractTestCase {

    /**
     * Tests getSubstituables()
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new DepartementsRequest();

        $obj->setCode("code");
        $this->assertEquals([":code" => "code"], $obj->getSubstituables());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/regions/:code/departements", DepartementsRequest::RESOURCE_PATH);

        $obj = new DepartementsRequest();

        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(DepartementsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
