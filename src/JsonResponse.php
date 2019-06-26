<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/response
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

/**
 * Class JsonResponse
 * @package response
 */
class JsonResponse extends AbstractResponse
{
    /**
     * @param array $data JSON data
     */
    public function __construct(array $data)
    {
        $this->body = json_encode($data, JSON_PRETTY_PRINT);
        $this->setContentType('application/json');
    }
}
