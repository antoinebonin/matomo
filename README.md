# PHP Matomo Wrapper
Wrapper around Matomo API for any PHP code

## How to use

1. Implement an adapter using the `Antoinebonin\Matomo\Domain\Adapter\HttpClientAdapterInterface` interface.
2. Initiate a client 
    ```php
    $client = new \Antoinebonin\Matomo\Domain\Client\Client(
        $adapter,
        $baseUrl,
        $authToken
    );
    ```
3. Use action to with your client
    ```php
    $action = new AddSiteAction($name, $url);
    $client->send($action)
    ```