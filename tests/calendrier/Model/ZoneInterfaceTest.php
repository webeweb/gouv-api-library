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

namespace WBW\Library\GouvApi\Calendrier\Tests\Model;

use WBW\Library\GouvApi\Calendrier\Model\ZoneInterface;
use WBW\Library\GouvApi\Calendrier\Tests\AbstractTestCase;

/**
 * Zone interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Tests\Model
 */
class ZoneInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("alsace-moselle", ZoneInterface::ZONE_ALSACE_MOSELLE);
        $this->assertEquals("guadeloupe", ZoneInterface::ZONE_GUADELOUPE);
        $this->assertEquals("guyane", ZoneInterface::ZONE_GUYANE);
        $this->assertEquals("la-reunion", ZoneInterface::ZONE_LA_REUNION);
        $this->assertEquals("martinique", ZoneInterface::ZONE_MARTINIQUE);
        $this->assertEquals("mayotte", ZoneInterface::ZONE_MAYOTTE);
        $this->assertEquals("metropole", ZoneInterface::ZONE_METROPOLE);
        $this->assertEquals("nouvelle-caledonie", ZoneInterface::ZONE_NOUVELLE_CALEDONIE);
        $this->assertEquals("polynesie-francaise", ZoneInterface::ZONE_POLYNESIE_FRANCAISE);
        $this->assertEquals("saint-barthelemy", ZoneInterface::ZONE_SAINT_BARTHELEMY);
        $this->assertEquals("saint-martin", ZoneInterface::ZONE_SAINT_MARTIN);
        $this->assertEquals("saint-pierre-et-miquelon", ZoneInterface::ZONE_SAINT_PIERRE_MIQUELON);
        $this->assertEquals("wallis-et-futuna", ZoneInterface::ZONE_WALLIS_FUTUNA);
    }
}
