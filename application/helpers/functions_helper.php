<?php

    /**************************************************************/
    /**************************************************************/

    function formatValue($value)
    {
        if(isGPC()) return(stripslashes($value));
        return($value);
    }

    /**************************************************************/
    /**************************************************************/

    function isGPC()
    {
        return((bool)ini_get('magic_quotes_gpc'));
    }

    /**************************************************************/
    /**************************************************************/

    function isEmpty($value)
    {
        return(!(bool)mb_strlen($value));
    }

    /**************************************************************/
    /**************************************************************/

    function createResponse($response)
    {
        echo json_encode($response);
        exit;
    }

    /**************************************************************/
    /**************************************************************/

    function validateEmail($email)
    {
        if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i',$email,$result)) return(false);
        else return(true);
    }

    /**************************************************************/
    /**************************************************************/

    function checkURL($value) {
    var urlregex = new RegExp("^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
    if (urlregex.test(value)) {
        return (true);
    }
    return (false);
}


    /**************************************************************/
    /**************************************************************/
  
    function startsWith($haystack, $needle)
    {    
        return !strncmp($haystack, $needle, strlen($needle));
    }

    /**************************************************************/
    /**************************************************************/

?>