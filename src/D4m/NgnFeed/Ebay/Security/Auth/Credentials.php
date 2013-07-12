<?php

namespace D4m\NgnFeed\Ebay\Security\Auth;

use Prophecy\Exception\InvalidArgumentException;

class Credentials implements CredentialsInterface
{
    private $name;
    private $devId;
    private $appId;
    private $certId;

    public function setKeys($keys = [])
    {
        foreach($keys as $key => $value) {
            $member = ucfirst($key);
            $this->{"set".$member}($value);

        }
    }

    public function getKey($key)
    {
        if(in_array($key, [ 'name', 'devId', 'appId', 'certId' ])) {

           return $this->{$key};
        }
        else {

            throw new InvalidArgumentException("Invalid Credential");
        }
    }

    /**
     * AppID Token
     *
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * CertID Token
     *
     * @param string $certId
     */
    public function setCertId($certId)
    {
        $this->certId = $certId;
    }

    /**
     * DEVId Token
     *
     * @param string $devId
     */
    public function setDevId($devId)
    {
        $this->devId = $devId;
    }

    /**
     * Application Name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    public function isCompliant()
    {
        $dash = '-';
        return (is_string($this->name) &&
            ctype_alnum(str_replace($dash, '', $this->devId)) &&
            ctype_alnum(str_replace($dash, '', $this->appId)) &&
            ctype_alnum(str_replace($dash, '', $this->certId)) );
    }

}