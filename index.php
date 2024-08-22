<?php include 'includes/header.php'; ?>
<div class="ad-space">
</div>

<div class="container">
    <h1>Username Oluşturucu</h1>

    <div class="games">
        <?php
        $games = json_decode(file_get_contents('games.json'), true);
        foreach ($games['games'] as $game => $usernames) {
            echo '<div class="game-icon" data-game="'.$game.'">'.$game.'</div>';
        }
        ?>
    </div>

    <div class="input-section">
        <div class="input-container">
            <input type="text" id="username" placeholder="Username oluştur">
            <button id="copyButton" onclick="copyToClipboard()" aria-label="Kopyala">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clipboard" class="svg-inline--fa fa-clipboard fa-w-12 verifier__clipboard" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm144 418c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V118c0-3.3 2.7-6 6-6h42v36c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-36h42c3.3 0 6 2.7 6 6z"></path>
                </svg>
            </button>
        </div>
        <button onclick="generateUsername()">Oluştur</button>
        <button onclick="suggestUsername()">Öner</button>
    </div>

    <div class="symbols">
    </div>
</div>
<div class="ad-space">
</div>

<script src="assets/js/script.js"></script>
<?php include 'includes/footer.php'; ?>
