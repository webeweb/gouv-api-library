<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Tests\Request;

use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Adresse\Tests\Fixtures\Request\TestCsvRequest;

/**
 * Abstract CSV request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Tests\Request
 */
class AbstractCsvRequestTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestCsvRequest("data");

        $this->assertEquals("data", $obj->getData());
    }
}
