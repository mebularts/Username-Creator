<?php
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if (empty($name) || empty($email) || empty($message)) {
    echo 'Lütfen tüm alanları doldurun.';
    exit;
}

$formData = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'timestamp' => date('c')
];

$jsonFile = 'contact.json';

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);
    if (!is_array($data)) {
        $data = [];
    }
} else {
    $data = [];
}

$data[] = $formData;

file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));

header('Location: index.php');
exit;
?>
