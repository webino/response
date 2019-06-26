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
 * Class XmlResponse
 * @package response
 */
class XmlResponse extends AbstractResponse
{
    /**
     * @param string $body XML code
     */
    public function __construct(string $body)
    {
        $this->body = $body;
        $this->setContentType('text/xml');
    }
}
