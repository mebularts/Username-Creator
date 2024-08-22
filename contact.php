<?php include 'includes/header.php'; ?>

<div class="container">
    <h1>İletişim</h1>

    <div class="contact">
        <form action="contact_form.php" method="post">
            <label for="name">Ad:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Mesaj:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Gönder</button>
        </form>
        
        <h2>İletişim Bilgilerimiz</h2>
        <p>Adres: Şirket Adresi Buraya</p>
        <p>Telefon: (123) 456-7890</p>
        <p>E-posta: info@ornek.com</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
