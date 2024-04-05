<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Response;

use WBW\Library\GouvApi\Geo\Model\Region;
use WBW\Library\GouvApi\Geo\Response\RegionsResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Régions response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Response
 */
class RegionsResponseTest extends AbstractTestCase {

    /**
     * Test addRegion()
     *
     * @return void
     */
    public function testAddRegion(): void {

        // Set a Région mock.
        $region = new Region();

        $obj = new RegionsResponse();

        $obj->addRegion($region);
        $this->assertSame($region, $obj->getRegions()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegionsResponse();

        $this->assertEquals([], $obj->getRegions());
    }
}
