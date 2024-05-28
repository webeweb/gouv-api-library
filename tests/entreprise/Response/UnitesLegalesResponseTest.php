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

namespace WBW\Library\GouvApi\Entreprise\Tests\Response;

use WBW\Library\GouvApi\Entreprise\Model\UniteLegale;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * UnitesLegales response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Response
 */
class UnitesLegalesResponseTest extends AbstractTestCase {

    /**
     * Test addUniteLegale()
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
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new UnitesLegalesResponse();

        $this->assertEquals([], $obj->getUnitesLegales());
    }
}
