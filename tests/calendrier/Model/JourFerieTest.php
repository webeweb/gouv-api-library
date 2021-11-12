<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Calendrier\Tests\Model;

use WBW\Library\GouvAPI\Calendrier\Model\JourFerie;
use WBW\Library\GouvAPI\Calendrier\Tests\AbstractTestCase;

/**
 * Jour férié test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Calendrier\Tests\Model
 */
class JourFerieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new JourFerie();

        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getNom());
    }
}