<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Response;

use WBW\Library\GouvAPI\Common\Response\AbstractResponse as BaseResponse;
use WBW\Library\GouvAPI\Entreprise\Model\Meta;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Response
 */
abstract class AbstractResponse extends BaseResponse {

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