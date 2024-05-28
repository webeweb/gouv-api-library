<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Entreprise\Request;

use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\GouvApi\Common\Response\AbstractResponse;
use WBW\Library\GouvApi\Entreprise\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Entreprise\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringSiretTrait;

/**
 * Etablissements request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Request
 */
class EtablissementsRequest extends AbstractRequest implements SubstituableRequestInterface {

    use StringSiretTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    public const RESOURCE_PATH = "/api/sirene/v3/etablissements:siret";

    /**
     * Constructor.
     *
     * @param string|null $siret The SIRET.
     */
    public function __construct(string $siret = null) {
        parent::__construct();

        $this->setSiret($siret);
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeEtablissementsResponse($rawResponse);
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
            ":siret" => null !== $this->getSiret() ? "/{$this->getSiret()}" : "",
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return RequestSerializer::serializeEtablissementsRequest($this);
    }
}
