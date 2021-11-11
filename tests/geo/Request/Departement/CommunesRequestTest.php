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

use WBW\Library\GouvAPI\Geo\Request\Departement\CommunesRequest;
use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;
use WBW\Library\Provider\API\SubstituableRequestInterface;

/**
 * Communes request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Request\Departement
 */
class CommunesRequestTest extends AbstractTestCase {

    /**
     * Tests the getSubstituables() method.
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new CommunesRequest();

        $obj->setCode("code");
        $this->assertEquals([":code" => "code"], $obj->getSubstituables());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/departements/:code/communes", CommunesRequest::RESOURCE_PATH);

        $obj = new CommunesRequest();

        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(CommunesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getFormat());
        $this->assertNull($obj->getGeometry());
    }
}