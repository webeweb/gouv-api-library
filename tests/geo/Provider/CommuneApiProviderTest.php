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
use WBW\Library\GouvApi\Geo\Provider\CommuneApiProvider;
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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCommunes(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();

        $obj = new CommuneApiProvider($this->logger);

        $res = $obj->communes($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }

    /**
     * Tests communes()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCommunesWithCode(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();
        $request->setCode("75056");

        $obj = new CommuneApiProvider($this->logger);

        $res = $obj->communes($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }
}
