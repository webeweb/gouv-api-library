<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Tests\Response;

use WBW\Library\GouvApi\Adresse\Model\Adresse;
use WBW\Library\GouvApi\Adresse\Response\AdressesResponse;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;

/**
 * Adresses response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Adresse\Tests\Response
 */
class AdressesResponseTest extends AbstractTestCase {

    /**
     * Tests the addAdresse() method.
     *
     * @return void
     */
    public function testAddAdresse(): void {

        // Set an Adresse mock.
        $adresse = new Adresse();

        $obj = new AdressesResponse();

        $obj->addAdresse($adresse);
        $this->assertSame($adresse, $obj->getAdresses()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AdressesResponse();

        $this->assertEquals([], $obj->getAdresses());
    }
}