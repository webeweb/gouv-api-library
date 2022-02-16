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

use WBW\Library\GouvApi\Geo\Provider\ApiProvider;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Geo\Tests\Fixtures\Provider\TestApiProvider;

/**
 * Découpage administratif provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Geo\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("https://geo.api.gouv.fr", ApiProvider::ENDPOINT_PATH);

        $obj = new TestApiProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
        $this->assertEquals(ApiProvider::ENDPOINT_PATH, $obj->getEndpointPath());
    }
}
