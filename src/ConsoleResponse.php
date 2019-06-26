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
 * Class ConsoleResponse
 * @package response
 */
class ConsoleResponse extends AbstractResponse
{
    /**
     * @param string $body Console text
     */
    public function __construct(string $body = '')
    {
        $this->body = $body;
    }

    /**
     * @return void
     */
    protected function sendHeaders(): void
    {
        header_remove();
    }
}
