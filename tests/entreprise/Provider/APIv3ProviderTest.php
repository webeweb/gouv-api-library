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

use Throwable;
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v3 provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Provider
 */
class APIv3ProviderTest extends AbstractTestCase {

    /**
     * Test etablissements()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testEtablissements(): void {

        // Set an Etablissements request.
        $request = new EtablissementsRequest();
        $request->setPage(2);
        $request->setPerPage(50);

        $obj = new APIv3Provider($this->logger);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(EtablissementsResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
            $this->assertEquals("Call API provider failed", $ex->getMessage());
        }
    }

    /**
     * Test etablissements()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testEtablissementsWithSiret(): void {

        // Set an Etablissements request.
        $request = new EtablissementsRequest("35027346200019");

        $obj = new APIv3Provider($this->logger);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(EtablissementsResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
            $this->assertEquals("Call API provider failed", $ex->getMessage());
        }
    }

    /**
     * Test unitesLegales()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testUniteLegales(): void {

        // Set an Unités légales request.
        $request = new UnitesLegalesRequest();
        $request->setPage(2);
        $request->setPerPage(50);

        $obj = new APIv3Provider($this->logger);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(UnitesLegalesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
            $this->assertEquals("Call API provider failed", $ex->getMessage());
        }
    }

    /**
     * Test unitesLegales()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testUnitesLegalesWithSiren(): void {

        // Set an Unités légales request.
        $request = new UnitesLegalesRequest("350273462");

        $obj = new APIv3Provider($this->logger);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(UnitesLegalesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
            $this->assertEquals("Call API provider failed", $ex->getMessage());
        }
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new APIv3Provider($this->logger);

        $this->assertEquals(3, $obj->getVersion());
    }
}
