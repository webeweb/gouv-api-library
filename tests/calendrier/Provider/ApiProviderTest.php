<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Calendrier\Tests\Provider;

use Throwable;
use WBW\Library\GouvApi\Calendrier\Model\ZoneInterface;
use WBW\Library\GouvApi\Calendrier\Provider\ApiProvider;
use WBW\Library\GouvApi\Calendrier\Request\JoursFeriesRequest;
use WBW\Library\GouvApi\Calendrier\Response\JoursFeriesResponse;
use WBW\Library\GouvApi\Calendrier\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Test joursFeries()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testJoursFeries(): void {

        // Set a Jours fériés request mock.
        $arg = new JoursFeriesRequest(ZoneInterface::ZONE_METROPOLE);
        $arg->setAnnee(2021);

        $obj = new ApiProvider($this->logger);

        $res = $obj->sendRequest($arg);
        $this->assertInstanceOf(JoursFeriesResponse::class, $res);

        $this->assertCount(11, $res->getJoursFeries());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("https://calendrier.api.gouv.fr", ApiProvider::ENDPOINT_PATH);

        $obj = new ApiProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
        $this->assertEquals(ApiProvider::ENDPOINT_PATH, $obj->getEndpointPath());
    }
}
