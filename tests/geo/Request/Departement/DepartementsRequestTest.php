<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Tests\Request\Departement;

use WBW\Library\GouvAPI\Geo\Request\Departement\DepartementsRequest;
use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;
use WBW\Library\Provider\API\SubstituableRequestInterface;

/**
 * Départements request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Request\Departement
 */
class DepartementsRequestTest extends AbstractTestCase {

    /**
     * Tests the getSubstituables() method.
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/departements:code", DepartementsRequest::RESOURCE_PATH);

        $obj = new DepartementsRequest();

        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(DepartementsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}