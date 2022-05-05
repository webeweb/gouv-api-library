<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Request\Region;

use WBW\Library\GouvApi\Common\Model\Attribute\StringNomTrait;
use WBW\Library\GouvApi\Geo\Request\AbstractRequest;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Régions request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Request\Region
 */
class RegionsRequest extends AbstractRequest implements SubstituableRequestInterface {

    use StringNomTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/regions:code";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubstituables(): array {
        return [
            ":code" => null !== $this->getCode() ? "/{$this->getCode()}" : "",
        ];
    }
}
