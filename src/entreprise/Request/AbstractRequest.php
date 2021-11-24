<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Request;

use WBW\Library\GouvApi\Common\Request\AbstractRequest as BaseRequest;
use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Integers\IntegerPerPageTrait;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Request
 */
abstract class AbstractRequest extends BaseRequest {

    use IntegerPageTrait;
    use IntegerPerPageTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }
}