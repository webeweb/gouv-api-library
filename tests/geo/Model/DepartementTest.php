<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Geo\Tests\Model;

use WBW\Library\GouvApi\Geo\Model\Departement;
use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;

/**
 * Département test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Model
 */
class DepartementTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Departement();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeRegion());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getScore());
    }
}
