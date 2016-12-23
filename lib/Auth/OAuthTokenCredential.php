<?php

namespace videocast\Auth;

class OAuthTokenCredential
{

    private $clientId;

    private $clientSecret;

    private $accessToken;

    private $tokenExpireIn;

    private $tokenCreateTime;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function getClientSecret()
    {

    }

}