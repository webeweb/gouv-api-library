<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Calendrier\Tests\Response;

use WBW\Library\GouvApi\Calendrier\Model\JourFerie;
use WBW\Library\GouvApi\Calendrier\Response\JoursFeriesResponse;
use WBW\Library\GouvApi\Calendrier\Tests\AbstractTestCase;

/**
 * Jours fériés response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Tests\Response
 */
class JoursFeriesResponseTest extends AbstractTestCase {

    /**
     * Test addJourFerie()
     *
     * @return void
     */
    public function testAddJourFerie(): void {

        // Set a Jour férié mock.
        $jourFerie = new JourFerie();

        $obj = new JoursFeriesResponse();

        $obj->addJourFerie($jourFerie);
        $this->assertSame($jourFerie, $obj->getJoursFeries()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new JoursFeriesResponse();

        $this->assertEquals([], $obj->getJoursFeries());
    }
}
