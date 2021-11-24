<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Provider;

use Exception;
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * API v3 provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Provider
 */
class APIv3ProviderTest extends AbstractTestCase {

    /**
     * Tests the etablissements() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testEtablissements(): void {

        // Set an Etablissements request.
        $request = new EtablissementsRequest();
        $request->setPage(2);
        $request->setPerPage(50);

        $obj = new APIv3Provider($this->logger);

        $res = $obj->etablissements($request);
        $this->assertInstanceOf(EtablissementsResponse::class, $res);
    }

    /**
     * Tests the etablissements() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testEtablissementsWithSiret(): void {

        // Set an Etablissements request.
        $request = new EtablissementsRequest("35027346200019");

        $obj = new APIv3Provider($this->logger);

        $res = $obj->etablissements($request);
        $this->assertInstanceOf(EtablissementsResponse::class, $res);
    }

    /**
     * Tests the unitesLegales() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testUniteLegales(): void {

        // Set an UniteLegales request.
        $request = new UnitesLegalesRequest();
        $request->setPage(2);
        $request->setPerPage(50);

        $obj = new APIv3Provider($this->logger);

        $res = $obj->unitesLegales($request);
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);
    }

    /**
     * Tests the unitesLegales() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testUniteLegalesWithSiren(): void {

        // Set an UniteLegales request.
        $request = new UnitesLegalesRequest("350273462");

        $obj = new APIv3Provider($this->logger);

        $res = $obj->unitesLegales($request);
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new APIv3Provider($this->logger);

        $this->assertEquals(3, $obj->getVersion());
    }
}