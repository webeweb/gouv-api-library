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

use WBW\Library\GouvApi\Geo\Model\Commune;
use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Communes response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Response
 */
class CommunesResponseTest extends AbstractTestCase {

    /**
     * Test addCommune()
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
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CommunesResponse();

        $this->assertEquals([], $obj->getCommunes());
    }
}
