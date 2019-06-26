<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @outputmatch Hello World!
 * @interpreter php
 *
 * @link        https://github.com/webino/response
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;
use Webino\TextResponse;

Tester\Environment::setup();


$response = new TextResponse('Hello World!');


$response->send();


$headers = xdebug_get_headers();
Assert::contains('Content-Type: text/plain; charset=UTF-8', $headers);
