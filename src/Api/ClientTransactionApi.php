<?php
/**
 * ClientTransactionApi
 * PHP version 5
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Apache Fineract
 *
 * Apache Fineract is a secure, multi-tenanted microfinance platform  The goal of the Apache Fineract API is to empower developers to build apps on top of the Apache Fineract Platform<br>The [reference app](https://cui.fineract.dev) (username: mifos, password: password) works on the same demo tenant as the interactive links in this documentation  - The API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer) - Find out more about Apache Fineract [here](/fineract-provider/api-docs/apiLive.htm#top) - You can [Try The API From Your Browser](/fineract-provider/api-docs/apiLive.htm#interact) - The Generic Options are available [here](/fineract-provider/api-docs/apiLive.htm#genopts) - Find out more about [Updating Dates and Numbers](/fineract-provider/api-docs/apiLive.htm#dates_and_numbers) - For the Authentication and the Basic of HTTP and HTTPS refer [here](/fineract-provider/api-docs/apiLive.htm#authentication_overview) - Check about ERROR codes [here](/fineract-provider/api-docs/apiLive.htm#errors)  Please refer to the [old documentation](/fineract-provider/api-docs/apiLive.htm) for any documentation queries
 *
 * OpenAPI spec version: 1.0.0
 * Contact: dev@fineract.apache.org
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Frengky\Fineract\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Frengky\Fineract\ApiException;
use Frengky\Fineract\Configuration;
use Frengky\Fineract\HeaderSelector;
use Frengky\Fineract\ObjectSerializer;

/**
 * ClientTransactionApi Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientTransactionApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation retrieveAllClientTransactions
     *
     * List Client Transactions
     *
     * @param  int $clientId clientId (required)
     * @param  int $offset offset (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \Frengky\Fineract\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Frengky\Fineract\Model\GetClientsClientIdTransactionsResponse
     */
    public function retrieveAllClientTransactions($clientId, $offset = null, $limit = null)
    {
        list($response) = $this->retrieveAllClientTransactionsWithHttpInfo($clientId, $offset, $limit);
        return $response;
    }

    /**
     * Operation retrieveAllClientTransactionsWithHttpInfo
     *
     * List Client Transactions
     *
     * @param  int $clientId clientId (required)
     * @param  int $offset offset (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \Frengky\Fineract\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Frengky\Fineract\Model\GetClientsClientIdTransactionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveAllClientTransactionsWithHttpInfo($clientId, $offset = null, $limit = null)
    {
        $returnType = '\Frengky\Fineract\Model\GetClientsClientIdTransactionsResponse';
        $request = $this->retrieveAllClientTransactionsRequest($clientId, $offset, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Frengky\Fineract\Model\GetClientsClientIdTransactionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveAllClientTransactionsAsync
     *
     * List Client Transactions
     *
     * @param  int $clientId clientId (required)
     * @param  int $offset offset (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveAllClientTransactionsAsync($clientId, $offset = null, $limit = null)
    {
        return $this->retrieveAllClientTransactionsAsyncWithHttpInfo($clientId, $offset, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveAllClientTransactionsAsyncWithHttpInfo
     *
     * List Client Transactions
     *
     * @param  int $clientId clientId (required)
     * @param  int $offset offset (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveAllClientTransactionsAsyncWithHttpInfo($clientId, $offset = null, $limit = null)
    {
        $returnType = '\Frengky\Fineract\Model\GetClientsClientIdTransactionsResponse';
        $request = $this->retrieveAllClientTransactionsRequest($clientId, $offset, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retrieveAllClientTransactions'
     *
     * @param  int $clientId clientId (required)
     * @param  int $offset offset (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveAllClientTransactionsRequest($clientId, $offset = null, $limit = null)
    {
        // verify the required parameter 'clientId' is set
        if ($clientId === null || (is_array($clientId) && count($clientId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $clientId when calling retrieveAllClientTransactions'
            );
        }

        $resourcePath = '/clients/{clientId}/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, 'int32');
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }

        // path params
        if ($clientId !== null) {
            $resourcePath = str_replace(
                '{' . 'clientId' . '}',
                ObjectSerializer::toPathValue($clientId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('fineract-platform-tenantid');
        if ($apiKey !== null) {
            $headers['fineract-platform-tenantid'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation retrieveClientTransaction
     *
     * Retrieve a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     *
     * @throws \Frengky\Fineract\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Frengky\Fineract\Model\GetClientsClientIdTransactionsTransactionIdResponse
     */
    public function retrieveClientTransaction($clientId, $transactionId)
    {
        list($response) = $this->retrieveClientTransactionWithHttpInfo($clientId, $transactionId);
        return $response;
    }

    /**
     * Operation retrieveClientTransactionWithHttpInfo
     *
     * Retrieve a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     *
     * @throws \Frengky\Fineract\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Frengky\Fineract\Model\GetClientsClientIdTransactionsTransactionIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveClientTransactionWithHttpInfo($clientId, $transactionId)
    {
        $returnType = '\Frengky\Fineract\Model\GetClientsClientIdTransactionsTransactionIdResponse';
        $request = $this->retrieveClientTransactionRequest($clientId, $transactionId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Frengky\Fineract\Model\GetClientsClientIdTransactionsTransactionIdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveClientTransactionAsync
     *
     * Retrieve a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveClientTransactionAsync($clientId, $transactionId)
    {
        return $this->retrieveClientTransactionAsyncWithHttpInfo($clientId, $transactionId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveClientTransactionAsyncWithHttpInfo
     *
     * Retrieve a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveClientTransactionAsyncWithHttpInfo($clientId, $transactionId)
    {
        $returnType = '\Frengky\Fineract\Model\GetClientsClientIdTransactionsTransactionIdResponse';
        $request = $this->retrieveClientTransactionRequest($clientId, $transactionId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retrieveClientTransaction'
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveClientTransactionRequest($clientId, $transactionId)
    {
        // verify the required parameter 'clientId' is set
        if ($clientId === null || (is_array($clientId) && count($clientId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $clientId when calling retrieveClientTransaction'
            );
        }
        // verify the required parameter 'transactionId' is set
        if ($transactionId === null || (is_array($transactionId) && count($transactionId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionId when calling retrieveClientTransaction'
            );
        }

        $resourcePath = '/clients/{clientId}/transactions/{transactionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($clientId !== null) {
            $resourcePath = str_replace(
                '{' . 'clientId' . '}',
                ObjectSerializer::toPathValue($clientId),
                $resourcePath
            );
        }
        // path params
        if ($transactionId !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionId' . '}',
                ObjectSerializer::toPathValue($transactionId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('fineract-platform-tenantid');
        if ($apiKey !== null) {
            $headers['fineract-platform-tenantid'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation undoClientTransaction
     *
     * Undo a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     * @param  string $command command (optional)
     *
     * @throws \Frengky\Fineract\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Frengky\Fineract\Model\PostClientsClientIdTransactionsTransactionIdResponse
     */
    public function undoClientTransaction($clientId, $transactionId, $command = null)
    {
        list($response) = $this->undoClientTransactionWithHttpInfo($clientId, $transactionId, $command);
        return $response;
    }

    /**
     * Operation undoClientTransactionWithHttpInfo
     *
     * Undo a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     * @param  string $command command (optional)
     *
     * @throws \Frengky\Fineract\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Frengky\Fineract\Model\PostClientsClientIdTransactionsTransactionIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function undoClientTransactionWithHttpInfo($clientId, $transactionId, $command = null)
    {
        $returnType = '\Frengky\Fineract\Model\PostClientsClientIdTransactionsTransactionIdResponse';
        $request = $this->undoClientTransactionRequest($clientId, $transactionId, $command);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Frengky\Fineract\Model\PostClientsClientIdTransactionsTransactionIdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation undoClientTransactionAsync
     *
     * Undo a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     * @param  string $command command (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function undoClientTransactionAsync($clientId, $transactionId, $command = null)
    {
        return $this->undoClientTransactionAsyncWithHttpInfo($clientId, $transactionId, $command)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation undoClientTransactionAsyncWithHttpInfo
     *
     * Undo a Client Transaction
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     * @param  string $command command (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function undoClientTransactionAsyncWithHttpInfo($clientId, $transactionId, $command = null)
    {
        $returnType = '\Frengky\Fineract\Model\PostClientsClientIdTransactionsTransactionIdResponse';
        $request = $this->undoClientTransactionRequest($clientId, $transactionId, $command);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'undoClientTransaction'
     *
     * @param  int $clientId clientId (required)
     * @param  int $transactionId transactionId (required)
     * @param  string $command command (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function undoClientTransactionRequest($clientId, $transactionId, $command = null)
    {
        // verify the required parameter 'clientId' is set
        if ($clientId === null || (is_array($clientId) && count($clientId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $clientId when calling undoClientTransaction'
            );
        }
        // verify the required parameter 'transactionId' is set
        if ($transactionId === null || (is_array($transactionId) && count($transactionId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionId when calling undoClientTransaction'
            );
        }

        $resourcePath = '/clients/{clientId}/transactions/{transactionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($command !== null) {
            $queryParams['command'] = ObjectSerializer::toQueryValue($command, null);
        }

        // path params
        if ($clientId !== null) {
            $resourcePath = str_replace(
                '{' . 'clientId' . '}',
                ObjectSerializer::toPathValue($clientId),
                $resourcePath
            );
        }
        // path params
        if ($transactionId !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionId' . '}',
                ObjectSerializer::toPathValue($transactionId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('fineract-platform-tenantid');
        if ($apiKey !== null) {
            $headers['fineract-platform-tenantid'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}