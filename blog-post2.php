<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="blog-post">
        <?php
        $postTitle = "Deadpool X Wolverine Fortnite'da";
        $postImage = "assets/images/post2.jpg";
        $postContent = "
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend, magna vel convallis cursus, metus purus efficitur nisi, non fermentum mi ante eget nulla. Integer ut gravida erat. Suspendisse potenti. Cras vel dolor eget magna tristique elementum ac sed arcu. Ut vehicula scelerisque libero, sit amet sollicitudin mauris dictum vel. Praesent vestibulum purus ut massa feugiat, sed luctus lacus scelerisque. Proin dapibus, orci ac vulputate ultricies, metus felis aliquet mi, et aliquam odio lorem vel velit. Duis vel gravida purus. Suspendisse potenti.</p>
            <p>Vestibulum id feugiat mi. Sed non erat nec quam laoreet suscipit. Donec vitae purus gravida, pretium est vel, posuere urna. Integer ut risus vel arcu aliquam feugiat non id mauris. Curabitur eget est urna. Maecenas ut ligula in ex fermentum dapibus. Nulla facilisi. Etiam consectetur libero quis lectus interdum, eu laoreet sem hendrerit. Nullam vestibulum, erat a congue venenatis, elit elit bibendum augue, nec volutpat odio est a libero.</p>
        ";
        ?>

        <div class="blog-detail">
            <img src="<?php echo htmlspecialchars($postImage); ?>" alt="<?php echo htmlspecialchars($postTitle); ?>" class="blog-image-detail">
            <h1><?php echo htmlspecialchars($postTitle); ?></h1>
            <div class="blog-content-detail">
                <?php echo $postContent; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
