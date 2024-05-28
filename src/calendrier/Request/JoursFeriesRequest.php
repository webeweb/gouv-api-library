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

namespace WBW\Library\GouvApi\Calendrier\Request;

use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\GouvApi\Calendrier\Model\ZoneInterface;
use WBW\Library\GouvApi\Calendrier\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;
use WBW\Library\GouvApi\Common\Response\AbstractResponse;

/**
 * Jours fériés request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Request
 */
class JoursFeriesRequest extends AbstractRequest implements SubstituableRequestInterface, ZoneInterface {

    /**
     * Resource path.
     *
     * @avr string
     */
    public const RESOURCE_PATH = "/jours-feries/:zone:annee.json";

    /**
     * Année.
     *
     * @var int|null
     */
    private $annee;

    /**
     * Zone.
     *
     * @var string|null
     */
    private $zone;

    /**
     * Constructor.
     */
    public function __construct(string $zone = null) {
        parent::__construct();

        $this->setZone($zone);
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeJoursFeriesResponse($rawResponse);
    }

    /**
     * Get the année.
     *
     * @return int|null Returns the année.
     */
    public function getAnnee(): ?int {
        return $this->annee;
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
            ":zone"  => $this->getZone(),
            ":annee" => null !== $this->getAnnee() ? "/{$this->getAnnee()}" : "",
        ];
    }

    /**
     * Get the zone.
     *
     * @return string|null Returns the zone.
     */
    public function getZone(): ?string {
        return $this->zone;
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return [];
    }

    /**
     * Set the année.
     *
     * @param int|null $annee The année.
     * @return JoursFeriesRequest Returns this jours fériés request.
     */
    public function setAnnee(?int $annee): JoursFeriesRequest {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the zone.
     *
     * @param string|null $zone The zone.
     * @return JoursFeriesRequest Returns this jours fériés request.
     */
    public function setZone(?string $zone): JoursFeriesRequest {
        $this->zone = $zone;
        return $this;
    }
}
