<?php
function send_location($update)
{
    $update->method[0] = 'sendLocation';
    $update->post_fields[0]->chat_id = $update->message->chat->id;
    $update->post_fields[0]->latitude = '59.9339';
    $update->post_fields[0]->longitude = '30.3064';
}