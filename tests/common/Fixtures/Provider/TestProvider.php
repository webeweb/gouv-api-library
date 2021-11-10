<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Common\Tests\Fixtures\Provider;

use WBW\Library\GouvAPI\Common\Provider\AbstractProvider;

/**
 * Test provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Common\Tests\Fixtures\Provider
 */
class TestProvider extends AbstractProvider {

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath(): string {
        return "";
    }
}