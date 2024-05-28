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

namespace WBW\Library\GouvApi\Geo\Request;

use WBW\Library\Common\Traits\Strings\StringCodeTrait;
use WBW\Library\GouvApi\Common\Request\AbstractRequest as BaseRequest;
use WBW\Library\GouvApi\Geo\Traits\Arrays\ArrayFieldsTrait;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Request
 * @abstract
 */
abstract class AbstractRequest extends BaseRequest {

    use ArrayFieldsTrait;
    use StringCodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setFields([]);
    }
}
