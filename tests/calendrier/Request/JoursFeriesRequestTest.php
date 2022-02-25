<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Calendrier\Tests\Request;

use WBW\Library\GouvApi\Calendrier\Request\JoursFeriesRequest;
use WBW\Library\GouvApi\Calendrier\Tests\AbstractTestCase;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Jours fériés request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Tests\Request
 */
class JoursFeriesRequestTest extends AbstractTestCase {

    /**
     * Tests getSubstituables()
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new JoursFeriesRequest();

        $this->assertEquals([":zone" => null, ":annee" => ""], $obj->getSubstituables());

        $obj->setZone(JoursFeriesRequest::ZONE_METROPOLE);
        $this->assertEquals([":zone" => "metropole", ":annee" => ""], $obj->getSubstituables());

        $obj->setAnnee(2021);
        $this->assertEquals([":zone" => "metropole", ":annee" => "/2021"], $obj->getSubstituables());
    }

    /**
     * Tests setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new JoursFeriesRequest();

        $obj->setAnnee(2021);
        $this->assertEquals(2021, $obj->getAnnee());
    }

    /**
     * Tests setZone()
     *
     * @return void
     */
    public function testSetZone(): void {

        $obj = new JoursFeriesRequest();

        $obj->setZone(JoursFeriesRequest::ZONE_METROPOLE);
        $this->assertEquals(JoursFeriesRequest::ZONE_METROPOLE, $obj->getZone());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/jours-feries/:zone:annee.json", JoursFeriesRequest::RESOURCE_PATH);

        $obj = new JoursFeriesRequest();

        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(JoursFeriesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getZone());
    }
}
