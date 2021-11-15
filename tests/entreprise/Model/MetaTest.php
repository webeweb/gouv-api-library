<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Model;

use WBW\Library\GouvAPI\Entreprise\Model\Meta;
use WBW\Library\GouvAPI\Entreprise\Tests\AbstractTestCase;

/**
 * Meta test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Model
 */
class MetaTest extends AbstractTestCase {

    /**
     * Tests the setTotalPages() method.
     *
     * @return void
     */
    public function testSetTotalPages(): void {

        $obj = new Meta();

        $obj->setTotalPages(1);
        $this->assertEquals(1, $obj->getTotalPages());
    }

    /**
     * Tests the setTotalResults() method.
     *
     * @return void
     */
    public function testSetTotalResults(): void {

        $obj = new Meta();

        $obj->setTotalResults(1);
        $this->assertEquals(1, $obj->getTotalResults());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Meta();

        $this->assertNull($obj->getPage());
        $this->assertNull($obj->getPerPage());

        $this->assertNull($obj->getTotalPages());
        $this->assertNull($obj->getTotalResults());
    }
}