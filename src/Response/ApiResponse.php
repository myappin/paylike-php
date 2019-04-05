<?php

namespace Paylike\Response;

/**
 * Class ApiResponse
 *
 * @package Paylike
 */
class ApiResponse
{
    public $headers;
    public $body;
    public $json;
    public $code;

    /**
     * ApiResponse constructor.
     *
     * @param $body
     * @param $code
     * @param $headers
     * @param $json
     */
    function __construct(
        $body,
        $code,
        $headers,
        $json
    ) {
        $this->body    = $body;
        $this->code    = $code;
        $this->headers = $headers;
        $this->json    = $json;
    }
}
