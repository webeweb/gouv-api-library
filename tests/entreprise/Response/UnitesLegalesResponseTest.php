<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Response;

use WBW\Library\GouvAPI\Entreprise\Model\UniteLegale;
use WBW\Library\GouvAPI\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvAPI\Entreprise\Tests\AbstractTestCase;

/**
 * UnitesLegales response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Response
 */
class UnitesLegalesResponseTest extends AbstractTestCase {

    /**
     * Tests the addUniteLegale() method.
     *
     * @return void
     */
    public function testAddUniteLegale(): void {

        // Set an Unité légale mock.
        $uniteLegale = new UniteLegale();

        $obj = new UnitesLegalesResponse();

        $obj->addUniteLegale($uniteLegale);
        $this->assertSame($uniteLegale, $obj->getUnitesLegales()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new UnitesLegalesResponse();

        $this->assertEquals([], $obj->getUnitesLegales());
    }
}