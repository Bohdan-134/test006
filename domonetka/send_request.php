<?php
// Проверяем, что метод запроса POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Получаем данные из формы
    $customerId = $_POST['customerId'];
    $email = $_POST['email'];

    // Данные для отправки на API
    $data = array(
        'customerId' => $customerId,
        'email' => $email
    );

    // Преобразуем данные в JSON
    $payload = json_encode($data);

    // URL API
    $api_url = 'https://ec20bot.link/api/client/v1/customers';

    // Настройки запроса
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/json',
            'content' => $payload
        )
    );

    // Создаем контекст потока
    $context  = stream_context_create($options);

    // Отправляем запрос на API
    $result = file_get_contents($api_url, false, $context);

    // Проверяем статус ответа
    if ($result !== false) {
        // Получаем HTTP статус ответа
        $http_response_header = $http_response_header[0];
        preg_match('{\b\d{3}\b}', $http_response_header, $matches);
        $status = intval($matches[0]);

        // Если статус ответа 204, выводим сообщение об успешной отправке
        if ($status === 204) {
            echo "Form successfully submitted!";
        } else {
            echo "There was an error submitting the form.";
        }
    } else {
        echo "An error occurred while sending a request to the API.";
    }

} else {
    echo "Access is denied.";
}
?>
