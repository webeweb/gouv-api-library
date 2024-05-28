<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Adresse\Request;

use WBW\Library\GouvApi\Adresse\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Adresse\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Common\Response\AbstractResponse;

/**
 * Reverse CSV request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Request
 */
class ReverseCsvRequest extends AbstractCsvRequest {

    /**
     * Resource path.
     *
     * @var string
     */
    public const RESOURCE_PATH = "/reverse/csv/";

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeReverseCsvResponse($rawResponse);
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
    public function serializeRequest(): array {
        return RequestSerializer::serializeReverseCsvRequest($this);
    }
}
