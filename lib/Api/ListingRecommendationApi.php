<?php
/**
 * ListingRecommendationApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell\Recommendation
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Recommendation API
 *
 * The Recommendation API returns information that sellers can use to optimize the configuration of their listings on eBay. Currently, the API contains a single method, findListingRecommendations. This method provides information that sellers can use to configure Promoted Listings ad campaigns to maximize the visibility of their items in the eBay marketplace.
 *
 * The version of the OpenAPI document: 1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Recommendation\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ebay\Sell\Recommendation\ApiException;
use Ebay\Sell\Recommendation\Configuration;
use Ebay\Sell\Recommendation\HeaderSelector;
use Ebay\Sell\Recommendation\ObjectSerializer;

/**
 * ListingRecommendationApi Class Doc Comment
 *
 * @category Class
 * @package  Ebay\Sell\Recommendation
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListingRecommendationApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     * @return void
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation findListingRecommendations
     *
     * @param  string $x_ebay_c_marketplace_id Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations. (required)
     * @param  string $filter Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&amp;quot;:&amp;quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&amp;quot;AD&amp;quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&amp;quot;{ }&amp;quot;), and separate multiple types with commas. Example: filter&#x3D;recommendationTypes:{AD} Default: recommendationTypes:{AD} (optional)
     * @param  int $limit Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500 (optional)
     * @param  int $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  \Ebay\Sell\Recommendation\Model\FindListingRecommendationRequest $body body (optional)
     *
     * @throws \Ebay\Sell\Recommendation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ebay\Sell\Recommendation\Model\PagedListingRecommendationCollection
     */
    public function findListingRecommendations($x_ebay_c_marketplace_id, $filter = null, $limit = null, $offset = null, $body = null)
    {
        list($response) = $this->findListingRecommendationsWithHttpInfo($x_ebay_c_marketplace_id, $filter, $limit, $offset, $body);
        return $response;
    }

    /**
     * Operation findListingRecommendationsWithHttpInfo
     *
     * @param  string $x_ebay_c_marketplace_id Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations. (required)
     * @param  string $filter Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&amp;quot;:&amp;quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&amp;quot;AD&amp;quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&amp;quot;{ }&amp;quot;), and separate multiple types with commas. Example: filter&#x3D;recommendationTypes:{AD} Default: recommendationTypes:{AD} (optional)
     * @param  int $limit Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500 (optional)
     * @param  int $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  \Ebay\Sell\Recommendation\Model\FindListingRecommendationRequest $body (optional)
     *
     * @throws \Ebay\Sell\Recommendation\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ebay\Sell\Recommendation\Model\PagedListingRecommendationCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function findListingRecommendationsWithHttpInfo($x_ebay_c_marketplace_id, $filter = null, $limit = null, $offset = null, $body = null)
    {
        $request = $this->findListingRecommendationsRequest($x_ebay_c_marketplace_id, $filter, $limit, $offset, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Ebay\Sell\Recommendation\Model\PagedListingRecommendationCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ebay\Sell\Recommendation\Model\PagedListingRecommendationCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ebay\Sell\Recommendation\Model\PagedListingRecommendationCollection';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Ebay\Sell\Recommendation\Model\PagedListingRecommendationCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findListingRecommendationsAsync
     *
     * @param  string $x_ebay_c_marketplace_id Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations. (required)
     * @param  string $filter Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&amp;quot;:&amp;quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&amp;quot;AD&amp;quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&amp;quot;{ }&amp;quot;), and separate multiple types with commas. Example: filter&#x3D;recommendationTypes:{AD} Default: recommendationTypes:{AD} (optional)
     * @param  int $limit Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500 (optional)
     * @param  int $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  \Ebay\Sell\Recommendation\Model\FindListingRecommendationRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findListingRecommendationsAsync($x_ebay_c_marketplace_id, $filter = null, $limit = null, $offset = null, $body = null)
    {
        return $this->findListingRecommendationsAsyncWithHttpInfo($x_ebay_c_marketplace_id, $filter, $limit, $offset, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findListingRecommendationsAsyncWithHttpInfo
     *
     * @param  string $x_ebay_c_marketplace_id Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations. (required)
     * @param  string $filter Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&amp;quot;:&amp;quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&amp;quot;AD&amp;quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&amp;quot;{ }&amp;quot;), and separate multiple types with commas. Example: filter&#x3D;recommendationTypes:{AD} Default: recommendationTypes:{AD} (optional)
     * @param  int $limit Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500 (optional)
     * @param  int $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  \Ebay\Sell\Recommendation\Model\FindListingRecommendationRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findListingRecommendationsAsyncWithHttpInfo($x_ebay_c_marketplace_id, $filter = null, $limit = null, $offset = null, $body = null)
    {
        $returnType = '\Ebay\Sell\Recommendation\Model\PagedListingRecommendationCollection';
        $request = $this->findListingRecommendationsRequest($x_ebay_c_marketplace_id, $filter, $limit, $offset, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'findListingRecommendations'
     *
     * @param  string $x_ebay_c_marketplace_id Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations. (required)
     * @param  string $filter Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&amp;quot;:&amp;quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&amp;quot;AD&amp;quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&amp;quot;{ }&amp;quot;), and separate multiple types with commas. Example: filter&#x3D;recommendationTypes:{AD} Default: recommendationTypes:{AD} (optional)
     * @param  int $limit Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500 (optional)
     * @param  int $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  \Ebay\Sell\Recommendation\Model\FindListingRecommendationRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findListingRecommendationsRequest($x_ebay_c_marketplace_id, $filter = null, $limit = null, $offset = null, $body = null)
    {
        // verify the required parameter 'x_ebay_c_marketplace_id' is set
        if ($x_ebay_c_marketplace_id === null || (is_array($x_ebay_c_marketplace_id) && count($x_ebay_c_marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_ebay_c_marketplace_id when calling findListingRecommendations'
            );
        }

        $resourcePath = '/find';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($filter)) {
            $filter = ObjectSerializer::serializeCollection($filter, '', true);
        }
        if ($filter !== null) {
            $queryParams['filter'] = $filter;
        }
        // query params
        if (is_array($limit)) {
            $limit = ObjectSerializer::serializeCollection($limit, '', true);
        }
        if ($limit !== null) {
            $queryParams['limit'] = $limit;
        }
        // query params
        if (is_array($offset)) {
            $offset = ObjectSerializer::serializeCollection($offset, '', true);
        }
        if ($offset !== null) {
            $queryParams['offset'] = $offset;
        }

        // header params
        if ($x_ebay_c_marketplace_id !== null) {
            $headerParams['X-EBAY-C-MARKETPLACE-ID'] = ObjectSerializer::toHeaderValue($x_ebay_c_marketplace_id);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                []
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
