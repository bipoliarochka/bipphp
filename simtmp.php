<?php
function renderTemplate($template, $data) {
    extract($data);
    ob_start();
    include $template;
    return ob_get_clean();
}

$template = "template.php";
$data = ["title" => "Мой сайт", "content" => "Привет, это мой контент!"];
echo renderTemplate($template, $data);
?>
