<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @outputmatchfile JsonResponse.expected
 * @interpreter php
 *
 * @link        https://github.com/webino/response
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;
use Webino\JsonResponse;

Tester\Environment::setup();


$response = new JsonResponse(['foo' => ['bar' => 'baz']]);


$response->send();


$headers = xdebug_get_headers();
Assert::contains('Content-Type: application/json; charset=UTF-8', $headers);
