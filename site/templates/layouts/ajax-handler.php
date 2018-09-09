<?php
namespace Processwire;

if ($config->ajax) {
    $m = $mail->new();
    $m->to($pages->get("id=1")->home_email_forms);
    $m->from('maximumgt@yandex.ru')
        ->fromName("bot fpotok")
        ->subject('Обращение с сайта');
    $messageBody = "Новая заявка с сайта: \r\n";

    if (isset($_REQUEST["data"])) {
        $data = $_REQUEST["data"];
        if (isset($data["name"]) && isset($data["phone"])) {
            $name = $sanitizer->text($data["name"]);
            $phone = $sanitizer->text($data["phone"]);
            $message = "Имя: {$name}, телефон: {$phone}.";
            if (isset($data["source"])){
                $message .= " Источник: " . $sanitizer->text($data["source"]);
            }
            $m->body($messageBody . $message);
        }
        if (isset($data["value"])){
            $m->body("Заявка с сайта, контакт: ". $sanitizer->text($data["value"]) );
        }
    }

    if ($m->body != ""){
        if ($m->send() != 0) {
            echo "success";
        } else {
            echo "warning";
        }
    }
} else {
    $session->redirect("/");
}


