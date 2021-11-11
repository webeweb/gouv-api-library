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

use WBW\Library\GouvAPI\Geo\Model\Departement;
use WBW\Library\GouvAPI\Geo\Response\DepartementsResponse;
use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;

/**
 * Départements response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Response
 */
class DepartementsResponseTest extends AbstractTestCase {

    /**
     * Tests the addDepartement() method.
     *
     * @return void
     */
    public function testAddDepartement(): void {

        // Set a Departement mock.
        $departement = new Departement();

        $obj = new DepartementsResponse();

        $obj->addDepartement($departement);
        $this->assertSame($departement, $obj->getDepartements()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DepartementsResponse();

        $this->assertEquals([], $obj->getDepartements());
    }
}
