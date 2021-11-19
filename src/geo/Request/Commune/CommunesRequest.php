<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Request\Commune;

use WBW\Library\GouvApi\Geo\Model\Attribute\StringGeometryTrait;
use WBW\Library\GouvApi\Geo\Request\AbstractRequest;
use WBW\Library\Provider\API\SubstituableRequestInterface;
use WBW\Library\Traits\Strings\StringFormatTrait;

/**
 * Communes request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Geo\Request\Commune
 */
class CommunesRequest extends AbstractRequest implements SubstituableRequestInterface
{

    use StringFormatTrait;
    use StringGeometryTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/communes:code";

    /**
     * {@inheritDoc}
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