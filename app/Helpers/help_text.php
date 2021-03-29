<?php
function help_text($update) {
  if (isset($update->method[0])) {
    $i = 1;
    $update->post_fields[1] = new \stdClass();
  } else {
    $i = 0;
  }

  $update->method[$i] = 'sendMessage';
  $update->post_fields[$i]->chat_id = $update->message->chat->id;
  $update->post_fields[$i]->text =
  "
  <b>Добро пожаловать!</b> Доступные комманды:
  /gethelp - помощь
  /help - комманды
  /whoami - диалог
  /location - адрес
  /photo - приветствие
  ";
  $update->post_fields[$i]->parse_mode = 'HTML';
}
