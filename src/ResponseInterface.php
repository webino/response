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
 * Interface ResponseInterface
 * @package response
 */
interface ResponseInterface
{
    const CHARSET_UTF8 = 'charset=UTF-8';

    /**
     * Send a response
     *
     * @return void
     */
    public function send(): void;
}
