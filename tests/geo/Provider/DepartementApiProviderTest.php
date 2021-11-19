<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Provider;

use Exception;
use WBW\Library\GouvApi\Geo\Provider\DepartementApiProvider;
use WBW\Library\GouvApi\Geo\Request\Departement\CommunesRequest;
use WBW\Library\GouvApi\Geo\Request\Departement\DepartementsRequest;
use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Response\DepartementsResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Département API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Geo\Tests\Provider
 */
class DepartementApiProviderTest extends AbstractTestCase
{

    /**
     * Tests the communes() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCommunes(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();
        $request->setCode("01");

        $obj = new DepartementApiProvider($this->logger);

        $res = $obj->communes($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }

    /**
     * Tests the departements() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDepartements(): void {

        // Set a Départements request mock.
        $request = new DepartementsRequest();

        $obj = new DepartementApiProvider($this->logger);

        $res = $obj->departements($request);
        $this->assertInstanceOf(DepartementsResponse::class, $res);
    }
}