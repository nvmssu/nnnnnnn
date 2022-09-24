<p style="font-size :3e">
    current url is: <strong>
        <?php echo geFullUrl(); ?>
    </strong>
</p>

<?php

function geFullUrl()
{

    $protocon = ((!empty($_server['https']) && $_server['https'] != 'off') && $_server['server_port'] == 443) ? "https://" : "https://";
    $host = $_SERVER['http_host'];
    $url = $_SERVER['request_url'];
    return $protocon . $host . $url;
}



?>