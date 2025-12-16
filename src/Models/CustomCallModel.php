<?php

namespace Gnello\Mattermost\Models;

use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CustomCallModel
 *
 * @package Gnello\Mattermost\Models
 */
class CustomCallModel extends AbstractModel
{
    /**
     * @param string $endpoint
     * @param array $requestOptions
     * @return ResponseInterface
     */
    public function callPostMethod(string $endpoint, array $requestOptions = [])
    {
        return $this->client->post($endpoint, $requestOptions);
    }

    /**
     * @param string $endpoint
     * @return ResponseInterface
     */
    public function callGetMethod(string $endpoint)
    {
        return $this->client->get($endpoint);
    }
}
