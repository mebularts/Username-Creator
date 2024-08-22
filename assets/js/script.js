function generateUsername() {
    let selectedGameIcon = document.querySelector('.game-icon.selected');
    if (selectedGameIcon) {
        let game = selectedGameIcon.getAttribute('data-game');
        fetch('games.json')
            .then(response => response.json())
            .then(data => {
                let usernames = data.games[game];
                let randomUsername = usernames[Math.floor(Math.random() * usernames.length)];
                document.getElementById('username').value = randomUsername;
                updateCopyButtonVisibility();
            });
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Uyarı',
            text: 'Lütfen bir oyun kategorisi seçin!',
        });
    }
}

function addSymbol(symbol) {
    const usernameInput = document.getElementById('username');
    usernameInput.value += symbol;
    updateCopyButtonVisibility();
}

function suggestUsername() {
    let selectedGameIcon = document.querySelector('.game-icon.selected');
    if (selectedGameIcon) {
        let game = selectedGameIcon.getAttribute('data-game');
        let username = document.getElementById('username').value;

        fetch('suggest.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `game=${game}&username=${username}`
        })
        .then(response => response.text())
        .then(data => {
            Swal.fire({
                icon: 'info',
                title: 'Öneri',
                text: data,
            });
        });
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Uyarı',
            text: 'Lütfen bir oyun kategorisi seçin!',
        });
    }
}

function copyToClipboard() {
    const usernameInput = document.getElementById('username');
    if (usernameInput.value) {
        navigator.clipboard.writeText(usernameInput.value).then(() => {
            Swal.fire({
                icon: 'success',
                title: 'Kopyalandı',
                text: 'Kullanıcı adı panoya kopyalandı.',
            });
        }).catch(err => {
            Swal.fire({
                icon: 'error',
                title: 'Hata',
                text: 'Kopyalama işlemi başarısız oldu.',
            });
        });
    }
}

function updateCopyButtonVisibility() {
    const usernameInput = document.getElementById('username');
    const copyButton = document.getElementById('copyButton');
    if (usernameInput.value.trim() !== '') {
        copyButton.style.display = 'inline-block';
    } else {
        copyButton.style.display = 'none';
    }
}


document.getElementById('username').addEventListener('input', updateCopyButtonVisibility);

document.addEventListener('DOMContentLoaded', function() {
    fetch('symbol.json')
        .then(response => response.json())
        .then(data => {
            const symbolsContainer = document.querySelector('.symbols');
            const symbols = data.symbols;

            symbols.forEach(symbol => {
                const symbolElement = document.createElement('span');
                symbolElement.textContent = symbol;
                symbolElement.classList.add('symbol');
                symbolElement.onclick = () => addSymbol(symbol);
                symbolsContainer.appendChild(symbolElement);
            });
        })
        .catch(error => console.error('Semboller yüklenirken bir hata oluştu:', error));
});

document.querySelectorAll('.game-icon').forEach(icon => {
    icon.addEventListener('click', function() {
        document.querySelectorAll('.game-icon').forEach(icon => icon.classList.remove('selected'));
        this.classList.add('selected');
    });
});
