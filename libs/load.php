<?php

function load_template($name)
{
    
    include __DIR__. "/../_templates/$name.php";
}

function validate_credentials($username,$password)
{
    if ($username == "gokul@gmail.com" and $password == "2004")
    {
        return true;
    }
    else
    {
        return false;
    }
}