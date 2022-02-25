<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Model;

use WBW\Library\GouvApi\Geo\Model\Region;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Région test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Model
 */
class RegionTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Region();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getScore());
    }
}
