<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @outputmatch <b>Hello World!</b>
 * @interpreter php
 *
 * @link        https://github.com/webino/response
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;
use Webino\HtmlResponse;

Tester\Environment::setup();


$response = new HtmlResponse('<b>Hello World!</b>');


$response->send();


$headers = xdebug_get_headers();
Assert::contains('Content-Type: text/html; charset=UTF-8', $headers);
