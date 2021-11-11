<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Request\Region;

use WBW\Library\GouvAPI\Geo\Model\Attribute\StringNomTrait;
use WBW\Library\GouvAPI\Geo\Request\AbstractRequest;

/**
 * Régions request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Request\Region
 */
class RegionsRequest extends AbstractRequest {

    use StringNomTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/regions";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return $this->implodeResourcePath(self::RESOURCE_PATH);
    }
}