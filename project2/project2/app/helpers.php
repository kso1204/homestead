<?php

function gravatar_url($email, $size=48)
{
    return spritnf("//www.gravatar.com/avatar/%s?s=%s",md5($email),$size);
}

function gravatar_profile_url($email)
{
    return sprintf("//www.gravatar.com/%s", md5($email));
}

?>