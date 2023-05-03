<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Model;

use WBW\Library\GeoJson\Model\Geometry\Point;
use WBW\Library\GeoJson\Model\Geometry\Polygon;
use WBW\Library\GouvApi\Geo\Model\Commune;
use WBW\Library\GouvApi\Geo\Model\Departement;
use WBW\Library\GouvApi\Geo\Model\Region;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Commune test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Model
 */
class CommuneTest extends AbstractTestCase {

    /**
     * Test setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        // Set a Point mock.
        $centre = new Point();

        $obj = new Commune();

        $obj->setCentre($centre);
        $this->assertSame($centre, $obj->getCentre());
    }

    /**
     * Test setCodesPostaux()
     *
     * @return void
     */
    public function testSetCodesPostaux(): void {

        $obj = new Commune();

        $obj->setCodesPostaux(["codePostal"]);
        $this->assertEquals(["codePostal"], $obj->getCodesPostaux());
    }

    /**
     * Test setContour()
     *
     * @return void
     */
    public function testSetContour(): void {

        // Set a Polygon mock.
        $contour = new Polygon();

        $obj = new Commune();

        $obj->setContour($contour);
        $this->assertSame($contour, $obj->getContour());
    }

    /**
     * Test setDepartement()
     *
     * @return void
     */
    public function testSetDepartement(): void {

        // Set a Département mock.
        $departement = new Departement();

        $obj = new Commune();

        $obj->setDepartement($departement);
        $this->assertSame($departement, $obj->getDepartement());
    }

    /**
     * Test setPopulation()
     *
     * @return void
     */
    public function testSetPopulation(): void {

        $obj = new Commune();

        $obj->setPopulation(1);
        $this->assertEquals(1, $obj->getPopulation());
    }

    /**
     * Test setRegion()
     *
     * @return void
     */
    public function testSetRegion(): void {

        // Set a Région mock.
        $region = new Region();

        $obj = new Commune();

        $obj->setRegion($region);
        $this->assertSame($region, $obj->getRegion());
    }

    /**
     * Test setSurface()
     *
     * @return void
     */
    public function testSetSurface(): void {

        $obj = new Commune();

        $obj->setSurface(0.1);
        $this->assertEquals(0.1, $obj->getSurface());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Commune();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeDepartement());
        $this->assertNull($obj->getCodeRegion());
        $this->assertNull($obj->getCodesPostaux());
        $this->assertNull($obj->getContour());
        $this->assertNull($obj->getDepartement());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPopulation());
        $this->assertNull($obj->getRegion());
        $this->assertNull($obj->getScore());
        $this->assertNull($obj->getSurface());
    }
}
