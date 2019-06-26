<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @outputmatch <element>Hello World!</element>
 * @interpreter php
 *
 * @link        https://github.com/webino/response
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;
use Webino\XmlResponse;

Tester\Environment::setup();


$response = new XmlResponse('<element>Hello World!</element>');


$response->send();


$headers = xdebug_get_headers();
Assert::contains('Content-Type: text/xml; charset=UTF-8', $headers);
