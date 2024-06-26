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
 * Search CSV request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Request
 */
class SearchCsvRequest extends AbstractCsvRequest {

    /**
     * Resource path.
     *
     * @var string
     */
    public const RESOURCE_PATH = "/search/csv/";

    /**
     * Columns.
     *
     * @var string[]
     */
    private $columns;

    /**
     * Result columns.
     *
     * @var string[]
     */
    private $resultColumns;

    /**
     * Constructor.
     *
     * @param string|null $data The data.
     */
    public function __construct(string $data = null) {
        parent::__construct($data);

        $this->setColumns([]);
        $this->setResultColumns([]);
    }

    /**
     * Add a column.
     *
     * @param string $column The column.
     * @return SearchCsvRequest Returns this search CSV request.
     */
    public function addColumn(string $column): SearchCsvRequest {
        $this->columns[] = $column;
        return $this;
    }

    /**
     * Add a result column.
     *
     * @param string $resultColumn The result column.
     * @return SearchCsvRequest Returns this search CSV request.
     */
    public function addResultColumn(string $resultColumn): SearchCsvRequest {
        $this->resultColumns[] = $resultColumn;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeSearchCsvResponse($rawResponse);
    }

    /**
     * Get the columns.
     *
     * @return string[] Returns the columns.
     */
    public function getColumns(): array {
        return $this->columns;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * Get the result columns.
     *
     * @return string[] Returns the result columns.
     */
    public function getResultColumns(): array {
        return $this->resultColumns;
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return RequestSerializer::serializeSearchCsvRequest($this);
    }

    /**
     * Set the columns.
     *
     * @param string[] $columns The columns.
     * @return SearchCsvRequest Returns this search CSV request.
     */
    public function setColumns(array $columns): SearchCsvRequest {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Set the result columns.
     *
     * @param string[] $resultColumns The result columns.
     * @return SearchCsvRequest Returns this search CSV request.
     */
    protected function setResultColumns(array $resultColumns): SearchCsvRequest {
        $this->resultColumns = $resultColumns;
        return $this;
    }
}
