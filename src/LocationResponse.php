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
 * Class LocationResponse
 * @package response
 */
class LocationResponse extends AbstractResponse
{
    /**
     * @param string $url Location URL
     */
    public function __construct(string $url = '')
    {
        $this->headers['Location'] = $url;
    }
}
