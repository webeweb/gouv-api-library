<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Request;

/**
 * Reverse CSV request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Request
 */
class ReverseCsvRequest extends AbstractCsvRequest {

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/reverse/csv/";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }
}
