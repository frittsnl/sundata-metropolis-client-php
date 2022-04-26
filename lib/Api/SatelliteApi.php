<?php
/**
 * SatelliteApi
 * PHP version 7.3
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SunData API
 *
 * SunData API OpenAPI Specification.
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: admin@sundata.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SunDataMetropolisClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SunDataMetropolisClient\ApiException;
use SunDataMetropolisClient\Configuration;
use SunDataMetropolisClient\HeaderSelector;
use SunDataMetropolisClient\ObjectSerializer;

/**
 * SatelliteApi Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SatelliteApi
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
     */
    public function setHostIndex($hostIndex): void
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
     * Operation getPlantDetails
     *
     * Get plant details
     *
     * @param  string $plant_code The unique code of a plant starting with \&quot;P\&quot; (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \SunDataMetropolisClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SunDataMetropolisClient\Model\MeterDetail[]
     */
    public function getPlantDetails($plant_code, $postal_code)
    {
        list($response) = $this->getPlantDetailsWithHttpInfo($plant_code, $postal_code);
        return $response;
    }

    /**
     * Operation getPlantDetailsWithHttpInfo
     *
     * Get plant details
     *
     * @param  string $plant_code The unique code of a plant starting with \&quot;P\&quot; (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \SunDataMetropolisClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SunDataMetropolisClient\Model\MeterDetail[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPlantDetailsWithHttpInfo($plant_code, $postal_code)
    {
        $request = $this->getPlantDetailsRequest($plant_code, $postal_code);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('\SunDataMetropolisClient\Model\MeterDetail[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SunDataMetropolisClient\Model\MeterDetail[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SunDataMetropolisClient\Model\MeterDetail[]';
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
                        '\SunDataMetropolisClient\Model\MeterDetail[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPlantDetailsAsync
     *
     * Get plant details
     *
     * @param  string $plant_code The unique code of a plant starting with \&quot;P\&quot; (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPlantDetailsAsync($plant_code, $postal_code)
    {
        return $this->getPlantDetailsAsyncWithHttpInfo($plant_code, $postal_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPlantDetailsAsyncWithHttpInfo
     *
     * Get plant details
     *
     * @param  string $plant_code The unique code of a plant starting with \&quot;P\&quot; (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPlantDetailsAsyncWithHttpInfo($plant_code, $postal_code)
    {
        $returnType = '\SunDataMetropolisClient\Model\MeterDetail[]';
        $request = $this->getPlantDetailsRequest($plant_code, $postal_code);

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
     * Create request for operation 'getPlantDetails'
     *
     * @param  string $plant_code The unique code of a plant starting with \&quot;P\&quot; (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPlantDetailsRequest($plant_code, $postal_code)
    {
        // verify the required parameter 'plant_code' is set
        if ($plant_code === null || (is_array($plant_code) && count($plant_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $plant_code when calling getPlantDetails'
            );
        }
        // verify the required parameter 'postal_code' is set
        if ($postal_code === null || (is_array($postal_code) && count($postal_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $postal_code when calling getPlantDetails'
            );
        }

        $resourcePath = '/satellite-app/plant-details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($plant_code !== null) {
            if('form' === 'form' && is_array($plant_code)) {
                foreach($plant_code as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['plant_code'] = $plant_code;
            }
        }
        // query params
        if ($postal_code !== null) {
            if('form' === 'form' && is_array($postal_code)) {
                foreach($postal_code as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['postal_code'] = $postal_code;
            }
        }




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
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getPlantMeterDetails
     *
     * Get the meter and plant details
     *
     * @param  string $reference_identifier The reference_identifier a.k.a. EAN. (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \SunDataMetropolisClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SunDataMetropolisClient\Model\MeterPlantDetails
     */
    public function getPlantMeterDetails($reference_identifier, $postal_code)
    {
        list($response) = $this->getPlantMeterDetailsWithHttpInfo($reference_identifier, $postal_code);
        return $response;
    }

    /**
     * Operation getPlantMeterDetailsWithHttpInfo
     *
     * Get the meter and plant details
     *
     * @param  string $reference_identifier The reference_identifier a.k.a. EAN. (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \SunDataMetropolisClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SunDataMetropolisClient\Model\MeterPlantDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPlantMeterDetailsWithHttpInfo($reference_identifier, $postal_code)
    {
        $request = $this->getPlantMeterDetailsRequest($reference_identifier, $postal_code);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('\SunDataMetropolisClient\Model\MeterPlantDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SunDataMetropolisClient\Model\MeterPlantDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SunDataMetropolisClient\Model\MeterPlantDetails';
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
                        '\SunDataMetropolisClient\Model\MeterPlantDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPlantMeterDetailsAsync
     *
     * Get the meter and plant details
     *
     * @param  string $reference_identifier The reference_identifier a.k.a. EAN. (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPlantMeterDetailsAsync($reference_identifier, $postal_code)
    {
        return $this->getPlantMeterDetailsAsyncWithHttpInfo($reference_identifier, $postal_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPlantMeterDetailsAsyncWithHttpInfo
     *
     * Get the meter and plant details
     *
     * @param  string $reference_identifier The reference_identifier a.k.a. EAN. (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPlantMeterDetailsAsyncWithHttpInfo($reference_identifier, $postal_code)
    {
        $returnType = '\SunDataMetropolisClient\Model\MeterPlantDetails';
        $request = $this->getPlantMeterDetailsRequest($reference_identifier, $postal_code);

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
     * Create request for operation 'getPlantMeterDetails'
     *
     * @param  string $reference_identifier The reference_identifier a.k.a. EAN. (required)
     * @param  string $postal_code The postal code of the plant (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPlantMeterDetailsRequest($reference_identifier, $postal_code)
    {
        // verify the required parameter 'reference_identifier' is set
        if ($reference_identifier === null || (is_array($reference_identifier) && count($reference_identifier) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reference_identifier when calling getPlantMeterDetails'
            );
        }
        // verify the required parameter 'postal_code' is set
        if ($postal_code === null || (is_array($postal_code) && count($postal_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $postal_code when calling getPlantMeterDetails'
            );
        }

        $resourcePath = '/satellite-app/meter-plant-details';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($reference_identifier !== null) {
            if('form' === 'form' && is_array($reference_identifier)) {
                foreach($reference_identifier as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['reference_identifier'] = $reference_identifier;
            }
        }
        // query params
        if ($postal_code !== null) {
            if('form' === 'form' && is_array($postal_code)) {
                foreach($postal_code as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['postal_code'] = $postal_code;
            }
        }




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
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
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
