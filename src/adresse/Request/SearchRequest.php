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

use WBW\Library\Common\Traits\Floats\FloatLatTrait;
use WBW\Library\Common\Traits\Floats\FloatLonTrait;
use WBW\Library\Common\Traits\Strings\StringQTrait;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;
use WBW\Library\GouvApi\Adresse\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Adresse\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;
use WBW\Library\GouvApi\Common\Response\AbstractResponse;

/**
 * Search request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Request
 */
class SearchRequest extends AbstractRequest {

    use FloatLatTrait;
    use FloatLonTrait;
    use StringQTrait;
    use StringTypeTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    public const RESOURCE_PATH = "/search/";

    /**
     * Type "house number".
     *
     * @var string
     */
    public const TYPE_HOUSE_NUMBER = "housenumber";

    /**
     * Type "locality".
     *
     * @var string
     */
    public const TYPE_LOCALITY = "locality";

    /**
     * Type "municipality".
     *
     * @var string
     */
    public const TYPE_MUNICIPALITY = "municipality";

    /**
     * Type "street".
     *
     * @var string
     */
    public const TYPE_STREET = "street";

    /**
     * Autocomplete.
     *
     * @var bool|null
     */
    private $autocomplete;

    /**
     * City code.
     *
     * @var string|null
     */
    private $cityCode;

    /**
     * Limit.
     *
     * @var int|null
     */
    private $limit;

    /**
     * Postcode.
     *
     * @var string|null
     */
    private $postcode;

    /**
     * Constructor.
     *
     * @param string|null $q The query.
     */
    public function __construct(string $q = null) {
        parent::__construct();

        $this->setQ($q);
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeSearchResponse($rawResponse);
    }

    /**
     * Enumerate the types.
     *
     * @return string[] Returns the types.
     */
    public static function enumTypes(): array {

        return [
            self::TYPE_HOUSE_NUMBER,
            self::TYPE_LOCALITY,
            self::TYPE_MUNICIPALITY,
            self::TYPE_STREET,
        ];
    }

    /**
     * Get the autocomplete.
     *
     * @return bool|null Returns the autocomplete.
     */
    public function getAutocomplete(): ?bool {
        return $this->autocomplete;
    }

    /**
     * Get the city code.
     *
     * @return string|null Returns the city code.
     */
    public function getCityCode(): ?string {
        return $this->cityCode;
    }

    /**
     * Get the limit.
     *
     * @return int|null Returns the limit.
     */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Get the postcode.
     *
     * @return string|null Returns the postcode.
     */
    public function getPostcode(): ?string {
        return $this->postcode;
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
        return RequestSerializer::serializeSearchRequest($this);
    }

    /**
     * Get the autocomplete.
     *
     * @param bool|null $autocomplete The autocomplete.
     * @return SearchRequest Returns this search request.
     */
    public function setAutocomplete(?bool $autocomplete): SearchRequest {
        $this->autocomplete = $autocomplete;
        return $this;
    }

    /**
     * Set the city code.
     *
     * @param string|null $cityCode The city code.
     * @return SearchRequest Returns this search request.
     */
    public function setCityCode(?string $cityCode): SearchRequest {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * Set the limit.
     *
     * @param int|null $limit The limit.
     * @return SearchRequest Returns this search request.
     */
    public function setLimit(?int $limit): SearchRequest {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Set the postcode.
     *
     * @param string|null $postcode The postcode.
     * @return SearchRequest Returns this search request.
     */
    public function setPostcode(?string $postcode): SearchRequest {
        $this->postcode = $postcode;
        return $this;
    }
}
