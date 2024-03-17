<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Request;

use WBW\Library\GouvApi\Common\Response\AbstractResponse;
use WBW\Library\GouvApi\Entreprise\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Entreprise\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringSirenTrait;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Unités légales request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Request
 */
class UnitesLegalesRequest extends AbstractRequest implements SubstituableRequestInterface {

    use StringSirenTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/api/sirene/v3/unites_legales:siren";

    /**
     * Constructor.
     *
     * @param string|null $siren The SIREN.
     */
    public function __construct(string $siren = null) {
        parent::__construct();

        $this->setSiren($siren);
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeUnitesLegalesResponse($rawResponse);
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
            ":siren" => null !== $this->getSiren() ? "/{$this->getSiren()}" : "",
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return RequestSerializer::serializeUnitesLegalesRequest($this);
    }
}
