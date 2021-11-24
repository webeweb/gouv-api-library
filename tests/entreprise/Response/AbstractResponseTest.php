<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Response;

use WBW\Library\GouvApi\Entreprise\Model\Meta;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Response\TestResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Response
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Tests the setMeta() method.
     *
     * @return void
     */
    public function testSetMeta(): void {

        // Set a Meta mock.
        $meta = new Meta();

        $obj = new TestResponse();

        $obj->setMeta($meta);
        $this->assertSame($meta, $obj->getMeta());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestResponse();

        $this->assertNull($obj->getMessage());

        $this->assertNull($obj->getMeta());
    }
}