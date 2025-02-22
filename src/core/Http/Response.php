<?php

namespace Minic2\Core\Http;

class Response
{
    protected int $statusCode = 200;
    protected array $headers = [];
    protected mixed $content = '';

    public function setStatusCode(int $code): self
    {
        $this->statusCode = $code;
        return $this;
    }

    public function setHeader(string $key, string $value): self
    {
        $this->headers[$key] = $value;
        return $this;
    }

    public function setContent(mixed $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function json(array|object $data, int $statusCode = 200, array $headers = []): self
    {
        return $this->send(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), $statusCode, array_merge($headers, ['Content-Type' => 'application/json']));
    }

    public function text(string $data, int $statusCode = 200, array $headers = []): self
    {
        return $this->send($data, $statusCode, array_merge($headers, ['Content-Type' => 'text/plain; charset=UTF-8']));
    }

    public function html(string $data, int $statusCode = 200, array $headers = []): self
    {
        return $this->send($data, $statusCode, array_merge($headers, ['Content-Type' => 'text/html; charset=UTF-8']));
    }

    public function redirect(string $url, int $statusCode = 302, array $headers = []): self
    {
        return $this->send('', $statusCode, array_merge($headers, ['Location' => $url]));
    }

    public function notFound(string $message = '404 Not Found'): self
    {
        return $this->text($message, 404);
    }

    public function send(mixed $content = '', int $statusCode = 200, array $headers = []): self
    {
        $this->statusCode = $statusCode;
        $this->headers = array_merge($this->headers, $headers);
        $this->content = $content;

        http_response_code($this->statusCode);

        foreach ($this->headers as $key => $value) {
            header("{$key}: {$value}");
        }

        if (is_string($this->content) || is_numeric($this->content)) {
            echo $this->content;
        } elseif (is_array($this->content) || is_object($this->content)) {
            echo json_encode($this->content, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }

        return $this;
    }
}
