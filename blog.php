<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="blog-main">
        <div class="blog-posts">
            <?php
            $posts = json_decode(file_get_contents('posts.json'), true);
            foreach ($posts['posts'] as $post) {
                echo '
                <div class="blog-card">
                    <img src="' . htmlspecialchars($post['image']) . '" alt="' . htmlspecialchars($post['title']) . '" class="blog-image">
                    <div class="blog-content">
                        <h2>' . htmlspecialchars($post['title']) . '</h2>
                        <p>' . htmlspecialchars($post['excerpt']) . '</p>
                        <a href="' . htmlspecialchars($post['link']) . '" class="read-more">Devamını Oku</a>
                    </div>
                </div>';
            }
            ?>
        </div>

        <div class="sidebar">
            <h2>Son Yazılar</h2>
            <ul>
                <?php
                foreach ($posts['posts'] as $post) {
                    echo '<li><a href="' . htmlspecialchars($post['link']) . '">' . htmlspecialchars($post['title']) . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
