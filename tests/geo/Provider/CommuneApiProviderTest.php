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
use WBW\Library\GouvApi\Geo\Request\Commune\CommunesRequest;
use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Commune API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Provider
 */
class CommuneApiProviderTest extends AbstractTestCase {

    /**
     * Tests communes()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCommunes(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();

        $obj = new ApiProvider($this->logger);

        $res = $obj->sendRequest($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }

    /**
     * Tests communes()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCommunesWithCode(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();
        $request->setCode("75056");

        $obj = new ApiProvider($this->logger);

        $res = $obj->sendRequest($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }
}
