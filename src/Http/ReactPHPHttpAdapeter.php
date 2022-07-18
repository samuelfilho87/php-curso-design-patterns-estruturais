<?php


namespace Alura\DesignPattern\Http;


class ReactPHPHttpAdapeter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // TODO: Implement post() method.
        echo 'ReactPHP';
    }
}