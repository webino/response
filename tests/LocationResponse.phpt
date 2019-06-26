<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @interpreter php
 *
 * @link        https://github.com/webino/response
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;
use Webino\LocationResponse;

Tester\Environment::setup();


$response = new LocationResponse('https://webino.sk');


$response->send();


$headers = xdebug_get_headers();
Assert::contains('Location: https://webino.sk', $headers);
