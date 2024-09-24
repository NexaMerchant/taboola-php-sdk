<?php

/**
 * 
 * TaboolaClient
 * 
 * @author xxl4 (nice.lizhi@gmail.com)
 * 
 * 
 */

namespace NexaMerchant\Taboola;

class TaboolaClient
{
    public function __construct($client_id, $client_secret, $client_name, $client_email, $client_password)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->client_name = $client_name;
        $this->client_email = $client_email;
        $this->client_password = $client_password;
    }

    public function get_client_id()
    {
        return $this->client_id;
    }

    public function get_client_secret()
    {
        return $this->client_secret;
    }

    public function get_client_name()
    {
        return $this->client_name;
    }

    public function get_client_email()
    {
        return $this->client_email;
    }

    public function get_client_password()
    {
        return $this->client_password;
    }

    public function get_client()
    {
        return [
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'client_name' => $this->client_name,
            'client_email' => $this->client_email,
            'client_password' => $this->client_password
        ];
    }
}