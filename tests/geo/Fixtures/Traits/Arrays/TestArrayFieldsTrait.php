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

namespace WBW\Library\GouvApi\Geo\Tests\Fixtures\Traits\Arrays;

use WBW\Library\GouvApi\Geo\Traits\Arrays\ArrayFieldsTrait;

/**
 * Test array fields trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Tests\Fixtures\Traits\Arrays
 */
class TestArrayFieldsTrait {

    use ArrayFieldsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setFields([]);
    }
}
