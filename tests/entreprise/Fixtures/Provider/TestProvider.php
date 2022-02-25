<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Provider;

use WBW\Library\GouvApi\Entreprise\Provider\AbstractProvider;

/**
 * Test provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Provider
 */
class TestProvider extends AbstractProvider {

    /**
     * {@inheritDoc}
     */
    public function getVersion(): int {
        return 0;
    }
}
