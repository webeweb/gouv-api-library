<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Tests\Fixtures\Request;

use WBW\Library\GouvApi\Adresse\Request\AbstractCsvRequest;

/**
 * Test CSV request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Adresse\Tests\Fixtures\Request
 */
class TestCsvRequest extends AbstractCsvRequest
{

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return "";
    }
}