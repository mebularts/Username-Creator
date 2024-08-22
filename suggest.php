<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $game = $_POST['game'];
    $username = $_POST['username'];

    $json_file = 'games.json';
    $games = json_decode(file_get_contents($json_file), true);
    
    if (isset($games['games'][$game])) {
        array_push($games['games'][$game], $username);
        file_put_contents($json_file, json_encode($games, JSON_PRETTY_PRINT));
        echo "Username önerisi başarıyla kaydedildi!";
    } else {
        echo "Geçersiz oyun kategorisi!";
    }
}
?>
