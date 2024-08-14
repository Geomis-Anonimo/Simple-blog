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
        <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe tempora voluptas earum, ea veniam nam neque non est alias. Labore eum fugit voluptate maxime recusandae, ipsam quidem nisi. Maxime, quibusdam!
      Tenetur facere perspiciatis obcaecati! Cum reprehenderit animi provident quidem voluptas. Ut eum quia aperiam laborum sint illo, autem sed facilis earum corporis porro rem cumque accusantium dolore necessitatibus commodi debitis.
      Iure placeat laboriosam ipsa alias pariatur deleniti totam, minima officiis earum, optio sapiente quod recusandae expedita quia molestiae, dicta quidem sit repudiandae culpa! Dolore quia incidunt tempore, voluptates officia similique!
      Voluptatem, facilis quisquam? Voluptatem debitis sequi in architecto veritatis commodi dolorem, iste labore quos, temporibus quaerat dicta molestias sint quibusdam dignissimos doloribus cumque animi dolor nobis reprehenderit aliquid nostrum deserunt.
      Iste consequuntur placeat voluptatibus magni impedit fugit dolore quae cupiditate beatae! Reiciendis est voluptatibus sit, ullam inventore, tenetur error itaque consequatur eaque sint enim maiores ipsam reprehenderit rem similique esse.
      </p>
      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe tempora voluptas earum, ea veniam nam neque non est alias. Labore eum fugit voluptate maxime recusandae, ipsam quidem nisi. Maxime, quibusdam!
      Tenetur facere perspiciatis obcaecati! Cum reprehenderit animi provident quidem voluptas. Ut eum quia aperiam laborum sint illo, autem sed facilis earum corporis porro rem cumque accusantium dolore necessitatibus commodi debitis.
      Iure placeat laboriosam ipsa alias pariatur deleniti totam, minima officiis earum, optio sapiente quod recusandae expedita quia molestiae, dicta quidem sit repudiandae culpa! Dolore quia incidunt tempore, voluptates officia similique!
      Voluptatem, facilis quisquam? Voluptatem debitis sequi in architecto veritatis commodi dolorem, iste labore quos, temporibus quaerat dicta molestias sint quibusdam dignissimos doloribus cumque animi dolor nobis reprehenderit aliquid nostrum deserunt.
      Iste consequuntur placeat voluptatibus magni impedit fugit dolore quae cupiditate beatae! Reiciendis est voluptatibus sit, ullam inventore, tenetur error itaque consequatur eaque sint enim maiores ipsam reprehenderit rem similique esse.
      </p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
      <?php foreach($post['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
      </ul>
    </aside>
  </main>
<?php
include_once("templates/footer.php");
?>