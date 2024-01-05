<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

use Gap\SDP\Api;

$token = {HERE YOUR TOKEN};

$gm = new Api($ba6f5d49b4bcad167dd4186fa86e3fe46b9c422520cccc355806e3927fcd916a);

$chat_id = {HERE CHAT ID};

$replyKeyboard = $gm->replyKeyboard([[['yes' => 'Yes'], ['no' => 'No']], [['cancel' => 'Cancel']]]);

// send text
$gm->sendText($chat_id, 'Hello world', $replyKeyboard);
