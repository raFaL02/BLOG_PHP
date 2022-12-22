<?php
include_once("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
         if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }

}

?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description">><?= $currentPost['description'] ?></p>
        <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in ullamcorper leo. Nullam pulvinar nisi non dignissim dignissim. Cras vitae finibus est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse sit amet sapien non ante eleifend luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas orci ligula, elementum vel sem ut, tincidunt malesuada nibh. Proin ac auctor odio. Sed blandit condimentum semper. Nullam congue placerat lectus, ut euismod ante eleifend eu. Sed semper mi eu elementum consequat. Vivamus a tellus quam. In risus nibh, tincidunt a tortor sed, feugiat rhoncus tortor.</p>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in ullamcorper leo. Nullam pulvinar nisi non dignissim dignissim. Cras vitae finibus est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse sit amet sapien non ante eleifend luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas orci ligula, elementum vel sem ut, tincidunt malesuada nibh. Proin ac auctor odio. Sed blandit condimentum semper. Nullam congue placerat lectus, ut euismod ante eleifend eu. Sed semper mi eu elementum consequat. Vivamus a tellus quam. In risus nibh, tincidunt a tortor sed, feugiat rhoncus tortor.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>