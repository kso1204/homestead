<?php

    function attachments_path($path='')
    {
        return public_path('files'.($path ? "/".$path : $path));
    }

?>