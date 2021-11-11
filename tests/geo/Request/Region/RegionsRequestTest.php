<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Tests\Request\Region;

use WBW\Library\GouvAPI\Geo\Request\Region\RegionsRequest;
use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;

/**
 * Régions request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Request\Region
 */
class RegionsRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/regions", RegionsRequest::RESOURCE_PATH);

        $obj = new RegionsRequest();

        $this->assertEquals(RegionsRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getNom());
    }
}