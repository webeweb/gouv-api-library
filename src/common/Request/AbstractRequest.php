<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Common\Request;

use WBW\Library\Provider\Request\AbstractRequest as BaseRequest;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Common\Request
 * @abstract
 */
abstract class AbstractRequest extends BaseRequest {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Serialize this request.
     *
     * @return array<string,mixed> Returns this serialized request.
     */
    abstract public function serializeRequest(): array;
}
