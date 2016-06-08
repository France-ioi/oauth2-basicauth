<?php

// Basically, GenericProvider with a custom getAccessTokenOptions

namespace League\OAuth2\Client\Provider;

class BasicAuthProvider extends GenericProvider
{
    protected function getAccessTokenOptions(array $params)
    {
        $options = parent::getAccessTokenOptions($params);
        $options['headers']['authorization'] = 'Basic ' . base64_encode(implode(':', [
            $this->clientId,
            $this->clientSecret,
       ]));
       return $options;
    }
}