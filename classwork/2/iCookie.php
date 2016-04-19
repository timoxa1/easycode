<?php

interface iCookie
{
    public function getCookie($key);

    public function setCookie($key, $value);

    public function deleteCookie($key);
}