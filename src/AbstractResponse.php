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
 * Class AbstractResponse
 * @package response
 */
abstract class AbstractResponse implements ResponseInterface
{
    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var string|null
     */
    protected $body;

    /**
     * @var bool
     */
    protected $sent = false;

    /**
     * Send a response
     *
     * @return void
     */
    public function send(): void
    {
        if ($this->sent) {
            // TODO exception
            return;
        }
        $this->sent = true;

        $this->sendHeaders();
        $this->sendBody();
    }

    /**
     * @param string $contentType
     */
    protected function setContentType(string $contentType): void
    {
        $this->headers['Content-Type'] = $contentType . '; ' . $this::CHARSET_UTF8;
    }

    /**
     * @param string $contentLength
     */
    protected function setContentLength(string $contentLength): void
    {
        $this->headers['Content-Length'] = $contentLength;
    }

    /**
     * @param string $filename
     */
    protected function setContentDispositionAttachment(string $filename): void
    {
        $this->headers['Content-Disposition'] = 'attachment; filename="' . $filename . '"';
    }

    /**
     * @return void
     */
    protected function sendHeaders(): void
    {
        foreach ($this->headers as $name => $value) {
            header("$name: $value", true);
        }
    }

    /**
     * Outputs response body
     *
     * @return void
     */
    protected function sendBody(): void
    {
        echo $this->body;
    }
}
