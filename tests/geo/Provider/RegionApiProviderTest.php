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

namespace WBW\Library\GouvApi\Geo\Tests\Provider;

use Throwable;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\GouvApi\Geo\Provider\ApiProvider;
use WBW\Library\GouvApi\Geo\Request\Region\CommunesRequest;
use WBW\Library\GouvApi\Geo\Request\Region\DepartementsRequest;
use WBW\Library\GouvApi\Geo\Request\Region\RegionsRequest;
use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Response\DepartementsResponse;
use WBW\Library\GouvApi\Geo\Response\RegionsResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Région API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Provider
 */
class RegionApiProviderTest extends AbstractTestCase {

    /**
     * Test communes()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCommunes(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();
        $request->setCode("11");

        $obj = new ApiProvider($this->logger);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(CommunesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
            $this->assertEquals(500, $ex->getCode());
            $this->assertEquals("Call API provider failed", $ex->getMessage());
        }
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
        $request->setCode("11");

        $obj = new ApiProvider($this->logger);

        $res = $obj->sendRequest($request);
        $this->assertInstanceOf(DepartementsResponse::class, $res);
    }

    /**
     * Test regions()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRegions(): void {

        // Set a Régions request mock.
        $request = new RegionsRequest();

        $obj = new ApiProvider($this->logger);

        $res = $obj->sendRequest($request);
        $this->assertInstanceOf(RegionsResponse::class, $res);
    }
}
