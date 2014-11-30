<?php

$login = "USER";
$password = "PASSWORD";

$epitech = new api\Epitech\Epitech($login, $password);

if ($epitech->connect() || isset($_SESSION['user'])) {
    echo "Connected!<br />";
}

echo '<img src="'.$epitech->getInfos('getPicture').'"/>';
echo 'Ip user: '.$epitech->getDivers('getIp').'<br />';
echo 'User: '.$epitech->getInfos('getLogin').'<br />';
echo 'From: '.$epitech->getInfos('getCity').'<br />';
echo 'Credits win: '.$epitech->getCurrent('getAchievedCredit').'<br />';
echo 'Credits fails: '.$epitech->getCurrent('getFailedCredit').'<br />';