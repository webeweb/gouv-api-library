<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Tests\Model;

use WBW\Library\GouvApi\Adresse\Model\Adresse;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;

/**
 * Adresse test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Tests\Model
 */
class AdresseTest extends AbstractTestCase {

    /**
     * Test addColumn()
     *
     * @return void
     */
    public function testAddColumn(): void {

        $obj = new Adresse();

        $obj->addColumn("k", "v");
        $this->assertEquals(["k" => "v"], $obj->getColumns());
    }

    /**
     * Test setCity()
     *
     * @return void
     */
    public function testSetCity(): void {

        $obj = new Adresse();

        $obj->setCity("city");
        $this->assertEquals("city", $obj->getCity());
    }

    /**
     * Test setCityCode()
     *
     * @return void
     */
    public function testSetCityCode(): void {

        $obj = new Adresse();

        $obj->setCityCode("cityCode");
        $this->assertEquals("cityCode", $obj->getCityCode());
    }

    /**
     * Test setContext()
     *
     * @return void
     */
    public function testSetContext(): void {

        $obj = new Adresse();

        $obj->setContext("context");
        $this->assertEquals("context", $obj->getContext());
    }

    /**
     * Test setDistance()
     *
     * @return void
     */
    public function testSetDistance(): void {

        $obj = new Adresse();

        $obj->setDistance("distance");
        $this->assertEquals("distance", $obj->getDistance());
    }

    /**
     * Test setDistrict()
     *
     * @return void
     */
    public function testSetDistrict(): void {

        $obj = new Adresse();

        $obj->setDistrict("district");
        $this->assertEquals("district", $obj->getDistrict());
    }

    /**
     * Test setHouseNumber()
     *
     * @return void
     */
    public function testSetHouseNumber(): void {

        $obj = new Adresse();

        $obj->setHouseNumber("houseNumber");
        $this->assertEquals("houseNumber", $obj->getHouseNumber());
    }

    /**
     * Test setLatitude()
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new Adresse();

        $obj->setLatitude("latitude");
        $this->assertEquals("latitude", $obj->getLatitude());
    }

    /**
     * Test setLongitude()
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new Adresse();

        $obj->setLongitude("longitude");
        $this->assertEquals("longitude", $obj->getLongitude());
    }

    /**
     * Test setOldCity()
     *
     * @return void
     */
    public function testSetOldCity(): void {

        $obj = new Adresse();

        $obj->setOldCity("oldCity");
        $this->assertEquals("oldCity", $obj->getOldCity());
    }

    /**
     * Test setOldCityCode()
     *
     * @return void
     */
    public function testSetOldCityCode(): void {

        $obj = new Adresse();

        $obj->setOldCityCode("oldCityCode");
        $this->assertEquals("oldCityCode", $obj->getOldCityCode());
    }

    /**
     * Test setPostcode()
     *
     * @return void
     */
    public function testSetPostcode(): void {

        $obj = new Adresse();

        $obj->setPostcode("postcode");
        $this->assertEquals("postcode", $obj->getPostcode());
    }

    /**
     * Test setScore()
     *
     * @return void
     */
    public function testSetScore(): void {

        $obj = new Adresse();

        $obj->setScore("score");
        $this->assertEquals("score", $obj->getScore());
    }

    /**
     * Test setStreet()
     *
     * @return void
     */
    public function testSetStreet(): void {

        $obj = new Adresse();

        $obj->setStreet("street");
        $this->assertEquals("street", $obj->getStreet());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Adresse();

        $this->assertEquals([], $obj->getColumns());
        $this->assertNull($obj->getCity());
        $this->assertNull($obj->getCityCode());
        $this->assertNull($obj->getContext());
        $this->assertNull($obj->getDistance());
        $this->assertNull($obj->getDistrict());
        $this->assertNull($obj->getHouseNumber());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getOldCity());
        $this->assertNull($obj->getOldCityCode());
        $this->assertNull($obj->getPostcode());
        $this->assertNull($obj->getScore());
        $this->assertNull($obj->getStreet());
        $this->assertNull($obj->getType());
    }
}
