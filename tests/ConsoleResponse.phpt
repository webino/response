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

use Webino\ConsoleResponse;

Tester\Environment::setup();


$response = new ConsoleResponse('Hello World!');


$response->send();
