<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Tests\Response;

use WBW\Library\GouvAPI\Geo\Model\Commune;
use WBW\Library\GouvAPI\Geo\Response\CommunesResponse;
use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;

/**
 * Communes response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Response
 */
class CommunesResponseTest extends AbstractTestCase {

    /**
     * Tests the addCommune() method.
     *
     * @return void
     */
    public function testAddCommune(): void {

        // Set a Commune mock.
        $commune = new Commune();

        $obj = new CommunesResponse();

        $obj->addCommune($commune);
        $this->assertSame($commune, $obj->getCommunes()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CommunesResponse();

        $this->assertEquals([], $obj->getCommunes());
    }
}