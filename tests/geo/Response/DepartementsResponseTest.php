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

namespace WBW\Library\GouvApi\Geo\Tests\Response;

use WBW\Library\GouvApi\Geo\Model\Departement;
use WBW\Library\GouvApi\Geo\Response\DepartementsResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Départements response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Response
 */
class DepartementsResponseTest extends AbstractTestCase {

    /**
     * Test addDepartement()
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
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DepartementsResponse();

        $this->assertEquals([], $obj->getDepartements());
    }
}
