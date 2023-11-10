<?php
class ApiGeneric {
    private $key=null;
    private $error=false;
  
    function __construct($key = null) {
      if(!empty($key)) $this->$key=$key;
    }
    function request($endpoint ="",$params=array()) {
      $uri = "";//url de request de api

      if (is_array($params)) {
        foreach ($params as $key => $value) {
            if (empty($value))continue;
            $uri .= $key .'='. urlencode($value) . '&';
        }
        $uri = substr($uri,0,-1);
        $response = @file_get_contents($uri);
        $this->error = false;

        return json_decode($response,true);

      }else{
        $this->error = true;
        return false;
      }

    }

    function sendData($endpoint = "", $data = array()) {
        $uri = ""; // API endpoint URL

        // Check if a key is set
        if (empty($this->key)) {
            $this->error = true;
            return false;
        }

        // Add the API key to the parameters
        $data['key'] = $this->key;

        // Construct the API request URL
        $uri .= $endpoint;

        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ),
        );

        $context = stream_context_create($options);
        $response = @file_get_contents($uri, false, $context);

        if ($response === FALSE) {
            $this->error = true;
            return false;
        }

        $this->error = false;
        return json_decode($response, true);
    }
  }
