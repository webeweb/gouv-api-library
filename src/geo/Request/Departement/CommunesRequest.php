<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Request\Departement;

use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\Common\Traits\Strings\StringFormatTrait;
use WBW\Library\GouvApi\Common\Response\AbstractResponse;
use WBW\Library\GouvApi\Geo\Request\AbstractRequest;
use WBW\Library\GouvApi\Geo\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Geo\Traits\Strings\StringGeometryTrait;

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
    public const RESOURCE_PATH = "/departements/:code/communes";

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeCommunesResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * {@inheritDoc}
     */
    public function getSubstituables(): array {

        return [
            ":code" => $this->getCode(),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return [];
    }
}
