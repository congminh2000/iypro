<?php
$action=isset($_GET['action'])?$_GET['action']:'';
switch($action)
{
    case'test':
        {
            require_once('view/admin/homepages.php');
        }
}
?>