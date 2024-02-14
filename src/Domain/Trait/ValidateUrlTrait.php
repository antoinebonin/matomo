<?php

declare(strict_types=1);

namespace Antoinebonin\Matomo\Domain\Trait;

trait ValidateUrlTrait
{
    public function validerURL(string $url): bool
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            return false;
        }

        $parsedUrl = parse_url($url, PHP_URL_HOST);

        if ($parsedUrl === false || is_null($parsedUrl)) {
            return false;
        }

        $pathInfo = pathinfo($parsedUrl);

        if (isset($pathInfo['extension']) && !empty($pathInfo['extension'])) {
            return true;
        }

        return false;
    }
}
