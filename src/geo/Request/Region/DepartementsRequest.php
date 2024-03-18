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

namespace WBW\Library\GouvApi\Geo\Request\Region;

use WBW\Library\GouvApi\Common\Response\AbstractResponse;
use WBW\Library\GouvApi\Geo\Request\AbstractRequest;
use WBW\Library\GouvApi\Geo\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Départements request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Request\Region
 */
class DepartementsRequest extends AbstractRequest implements SubstituableRequestInterface {

    /**
     * Resource path.
     *
     * @avr string
     */
    public const RESOURCE_PATH = "/regions/:code/departements";

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeDepartementsResponse($rawResponse);
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
