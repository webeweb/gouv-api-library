<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Provider;

use WBW\Library\GouvApi\Entreprise\Provider\AbstractProvider;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("https://entreprise.data.gouv.fr", AbstractProvider::ENDPOINT_PATH);

        $obj = new TestProvider();

        $this->assertEquals(AbstractProvider::ENDPOINT_PATH, $obj->getEndpointPath());
    }
}
