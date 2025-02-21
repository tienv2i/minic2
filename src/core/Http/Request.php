<?php

namespace Minic2\Core\Http;

class Request
{
    protected string $method;
    protected string $uri;
    protected array $query;
    protected array $post;
    protected array $headers;
    protected array $server;
    protected array $files;
    protected array $cookies;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $this->query = $_GET ?? [];
        $this->post = $_POST ?? [];
        $this->headers = getallheaders() ?: [];
        $this->server = $_SERVER;
        $this->files = $_FILES ?? [];
        $this->cookies = $_COOKIE ?? [];
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getQuery(string $key, mixed $default = null): mixed
    {
        return $this->query[$key] ?? $default;
    }

    public function getPost(string $key, mixed $default = null): mixed
    {
        return $this->post[$key] ?? $default;
    }

    public function getHeader(string $key, mixed $default = null): mixed
    {
        return $this->headers[$key] ?? $default;
    }

    public function getServer(string $key, mixed $default = null): mixed
    {
        return $this->server[$key] ?? $default;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getCookies(): array
    {
        return $this->cookies;
    }
}
