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

namespace WBW\Library\GouvApi\Entreprise\Tests\Serializer;

use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Test serializeEtablissementsRequest()
     *
     * @return void
     */
    public function testSerializeEtablissementsRequest(): void {

        // Set an Etablissements request mock.
        $arg = new EtablissementsRequest();
        $arg->setPage(2);
        $arg->setPerPage(100);

        $res = RequestSerializer::serializeEtablissementsRequest($arg);
        $this->assertCount(2, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(100, $res["per_page"]);
    }

    /**
     * Test serializeUnitesLegalesRequest()
     *
     * @return void
     */
    public function testSerializeUnitesLegalesRequest(): void {

        // Set an Unités légales request mock.
        $arg = new UnitesLegalesRequest();
        $arg->setPage(2);
        $arg->setPerPage(100);

        $res = RequestSerializer::serializeUnitesLegalesRequest($arg);
        $this->assertCount(2, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(100, $res["per_page"]);
    }
}
