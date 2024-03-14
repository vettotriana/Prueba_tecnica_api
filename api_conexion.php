<?php

// Operación GET para listar todos los recursos
function getAllPosts() {
    $ch = curl_init('https://jsonplaceholder.typicode.com/posts');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // No verificar el host
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // No verificar el peer
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// Operación POST para crear un recurso
function createPost($title, $body, $userId) {
    $ch = curl_init('https://jsonplaceholder.typicode.com/posts');
    $postData = json_encode([
        'title' => $title,
        'body' => $body,
        'userId' => $userId
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json; charset=UTF-8'
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // No verificar el host
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // No verificar el peer
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// Comprobar si se enviaron datos de formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $body = $_POST['body'] ?? '';
    $userId = $_POST['userId'] ?? 0;

    $newPost = createPost($title, $body, $userId);
    echo "Post creado:\n";
    echo print_r($newPost, true);
    exit;
}

?>
