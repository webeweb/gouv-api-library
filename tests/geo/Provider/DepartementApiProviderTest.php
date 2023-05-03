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

use Throwable;
use WBW\Library\GouvApi\Geo\Provider\ApiProvider;
use WBW\Library\GouvApi\Geo\Request\Departement\CommunesRequest;
use WBW\Library\GouvApi\Geo\Request\Departement\DepartementsRequest;
use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Response\DepartementsResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Département API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Provider
 */
class DepartementApiProviderTest extends AbstractTestCase {

    /**
     * Test communes()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCommunes(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();
        $request->setCode("01");

        $obj = new ApiProvider($this->logger);

        $res = $obj->sendRequest($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }

    /**
     * Test departements()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testDepartements(): void {

        // Set a Départements request mock.
        $request = new DepartementsRequest();

        $obj = new ApiProvider($this->logger);

        $res = $obj->sendRequest($request);
        $this->assertInstanceOf(DepartementsResponse::class, $res);
    }
}
