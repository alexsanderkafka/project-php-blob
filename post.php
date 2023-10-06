<?php
    include_once('templates/header.php');

    if(isset($_GET['id'])){
        $postId = $_GET['id'];

        $currentPost;
        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-conteiner">
            <h1 id="main-tilte"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>

            <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque maxime, praesentium recusandae eum neque ducimus dolorum saepe quibusdam. Molestias repellat, dolores nisi porro veniam ullam expedita ea amet fugiat praesentium?
            Alias veniam unde asperiores quaerat dignissimos, iusto quisquam id debitis tempore quae quia dolore earum. Suscipit explicabo enim adipisci dolores labore sit accusamus. Quas possimus sit minus. Sint, sunt reprehenderit.
            Sit nisi ut, accusamus placeat illo libero sapiente numquam exercitationem inventore odio eum aperiam sed. Nobis alias, suscipit cupiditate saepe nostrum veritatis possimus officia cumque vero eos error aspernatur voluptatem?
            Vitae ullam temporibus repellendus cum esse aperiam culpa consectetur voluptatum ratione porro modi, omnis nisi nostrum ex commodi sint ducimus delectus, perspiciatis, qui doloremque exercitationem corrupti ab nemo! Odit, quis?
            Sequi nostrum cumque consequuntur dolore temporibus illo quam, rem fugiat dignissimos error et aspernatur commodi illum quod maxime inventore odio consectetur beatae, ratione qui vel suscipit repellat nesciunt dolorum? Iusto?
            </p>
        </div>

        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
              <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categorias as $categoria): ?>
              <li><a href="#"><?= $categoria ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    </main>
    
<?php
    include_once('templates/footer.php');
?>