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

namespace WBW\Library\GouvApi\Common\Provider;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\Common\Provider\AbstractProvider as BaseProvider;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Common\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(LoggerInterface $logger = null) {
        parent::__construct($logger);
    }

    /**
     * Build the configuration.
     *
     * @return array<string,mixed> Returns the configuration.
     */
    private function buildConfiguration(): array {

        return [
            "base_uri"    => $this->getEndpointPath() . "/",
            "debug"       => $this->getDebug(),
            "headers"     => [
                "User-Agent" => "webeweb/gouv-api-library",
            ],
            "synchronous" => true,
        ];
    }

    /**
     * Call the API.
     *
     * @param AbstractRequest $request The request.
     * @param array<string,mixed> $queryData The query data.
     * @param array<string,mixed>[] $postData The post data.
     * @return string Returns the raw response.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    protected function callApi(AbstractRequest $request, array $queryData, array $postData = []): string {

        try {

            $config = $this->buildConfiguration();
            $client = new Client($config);

            $method  = 0 === count($postData) ? "GET" : "POST";
            $uri     = substr($this->buildResourcePath($request), 1);
            $options = [
                "query"     => $queryData,
                "multipart" => $postData,
            ];

            $this->logInfo(sprintf("Call API provider %s %s", $method, $uri), ["config" => $config]);

            $response = $client->request($method, $uri, $options);

            return $response->getBody()->getContents();
        } catch (Throwable $ex) {

            throw new ProviderException("Call API provider failed", 500, $ex);
        }
    }

    /**
     * Get the endpoint path.
     *
     * @return string Returns the endpoint path.
     */
    abstract public function getEndpointPath(): string;
}
