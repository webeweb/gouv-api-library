<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Serializer;

use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase
{

    /**
     * Tests the serializeEtablissementsRequest() method.
     *
     * @return void
     */
    public function testSerializeEtablissementsRequest(): void {

        // Set an Etablissements request mock.
        $request = new EtablissementsRequest();
        $request->setPage(2);
        $request->setPerPage(100);

        $res = RequestSerializer::serializeEtablissementsRequest($request);
        $this->assertCount(2, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(100, $res["per_page"]);
    }

    /**
     * Tests the serializeUnitesLegalesRequest() method.
     *
     * @return void
     */
    public function testSerializeUnitesLegalesRequest(): void {

        // Set an Unités légales request mock.
        $request = new UnitesLegalesRequest();
        $request->setPage(2);
        $request->setPerPage(100);

        $res = RequestSerializer::serializeUnitesLegalesRequest($request);
        $this->assertCount(2, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(100, $res["per_page"]);
    }
}