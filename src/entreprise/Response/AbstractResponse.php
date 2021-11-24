<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Response;

use WBW\Library\GouvApi\Common\Response\AbstractResponse as BaseResponse;
use WBW\Library\GouvApi\Entreprise\Model\Meta;
use WBW\Library\Traits\Strings\StringMessageTrait;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Response
 */
abstract class AbstractResponse extends BaseResponse {

    use StringMessageTrait;

    /**
     * Meta.
     *
     * @var Meta|null
     */
    protected $meta;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the meta.
     *
     * @return Meta|null Returns the meta.
     */
    public function getMeta(): ?Meta {
        return $this->meta;
    }

    /**
     * Set the meta.
     *
     * @param Meta|null $meta The meta.
     * @return AbstractResponse Returns this response.
     */
    public function setMeta(?Meta $meta): AbstractResponse {
        $this->meta = $meta;
        return $this;
    }
}