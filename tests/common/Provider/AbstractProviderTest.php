<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Common\Tests\Provider;

use WBW\Library\GouvApi\Common\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Common\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Common\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
    }
}
