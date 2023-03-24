<?php

namespace Joomla\Module\Secp\Site\Helper;

defined('_JEXEC') or die;

class SecpHelper
{
    public $base_url = 'https://api.dgcp.gob.do/opendata/transparencia/';
    public  function fetchData($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public  function getData($ucode)
    {
        if (!$ucode)
            return null;

        return $this->fetchData($this->base_url . $ucode . '.json');
    }
}
