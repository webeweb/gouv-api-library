<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Request;

use WBW\Library\GouvAPI\Common\Request\AbstractRequest as BaseRequest;
use WBW\Library\GouvAPI\Geo\Model\Attribute\ArrayFieldsTrait;
use WBW\Library\Traits\Strings\StringCodeTrait;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Request
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