<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Request\Departement;

use WBW\Library\GouvApi\Geo\Model\Attribute\StringGeometryTrait;
use WBW\Library\GouvApi\Geo\Request\AbstractRequest;
use WBW\Library\Provider\Api\SubstituableRequestInterface;
use WBW\Library\Traits\Strings\StringFormatTrait;

/**
 * Communes request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Request\Departement
 */
class CommunesRequest extends AbstractRequest implements SubstituableRequestInterface {

    use StringFormatTrait;
    use StringGeometryTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/departements/:code/communes";

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
            ":code" => $this->getCode(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function serializeRequest(): array {
        return [];
    }
}
