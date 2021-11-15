<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Request;

use WBW\Library\GouvAPI\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvAPI\Entreprise\Tests\Fixtures\Request\TestRequest;

/**
 * Abstract request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Request
 */
class AbstractRequestTest extends AbstractTestCase {

    /**
     * Tests the __coonstruct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestRequest();

        $this->assertNull($obj->getPage());
        $this->assertNull($obj->getPerPage());
    }
}