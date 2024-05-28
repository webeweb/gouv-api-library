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

namespace WBW\Library\GouvApi\Calendrier\Tests\Request;

use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\GouvApi\Calendrier\Model\ZoneInterface;
use WBW\Library\GouvApi\Calendrier\Request\JoursFeriesRequest;
use WBW\Library\GouvApi\Calendrier\Response\JoursFeriesResponse;
use WBW\Library\GouvApi\Calendrier\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;

/**
 * Jours fériés request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Tests\Request
 */
class JoursFeriesRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new JoursFeriesRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(JoursFeriesResponse::class, $res);
    }

    /**
     * Test getSubstituables()
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new JoursFeriesRequest();

        $this->assertEquals([":zone" => null, ":annee" => ""], $obj->getSubstituables());

        $obj->setZone(ZoneInterface::ZONE_METROPOLE);
        $this->assertEquals([":zone" => "metropole", ":annee" => ""], $obj->getSubstituables());

        $obj->setAnnee(2021);
        $this->assertEquals([":zone" => "metropole", ":annee" => "/2021"], $obj->getSubstituables());
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new JoursFeriesRequest();

        $this->assertEquals([], $obj->serializeRequest());
    }

    /**
     * Test setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new JoursFeriesRequest();

        $obj->setAnnee(2021);
        $this->assertEquals(2021, $obj->getAnnee());
    }

    /**
     * Test setZone()
     *
     * @return void
     */
    public function testSetZone(): void {

        $obj = new JoursFeriesRequest();

        $obj->setZone(ZoneInterface::ZONE_METROPOLE);
        $this->assertEquals(ZoneInterface::ZONE_METROPOLE, $obj->getZone());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/jours-feries/:zone:annee.json", JoursFeriesRequest::RESOURCE_PATH);

        $obj = new JoursFeriesRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);
        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(JoursFeriesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getZone());
    }
}
