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

namespace WBW\Library\GouvApi\Entreprise\Tests\Model;

use WBW\Library\GouvApi\Entreprise\Model\Meta;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * Meta test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Model
 */
class MetaTest extends AbstractTestCase {

    /**
     * Test setTotalPages()
     *
     * @return void
     */
    public function testSetTotalPages(): void {

        $obj = new Meta();

        $obj->setTotalPages(1);
        $this->assertEquals(1, $obj->getTotalPages());
    }

    /**
     * Test setTotalResults()
     *
     * @return void
     */
    public function testSetTotalResults(): void {

        $obj = new Meta();

        $obj->setTotalResults(1);
        $this->assertEquals(1, $obj->getTotalResults());
    }

    /**
     * Test __construct()
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
