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
 * Class HtmlResponse
 * @package response
 */
class HtmlResponse extends AbstractResponse
{
    /**
     * @param string $body HTML code
     */
    public function __construct(string $body)
    {
        $this->body = $body;
        $this->setContentType('text/html');
    }
}
