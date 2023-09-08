<link href="css/posts.css" rel="stylesheet">

<Section class="actions">
    <a href="upload.php" style="font-family: verdana, sans-serif, helvetica;">Upload</a><br>
    <!-- <Form method="post">
        <label for="ppp">Posr per page</label>
        <select name="ppp" id="ppp">
            <option value="2">2</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="20">20</option>
        <input type="submit" value="Confirm">
        </select>
    </Form>-->
    <?php
    //echo $ppp;
    ?>
</Section>
<Section class="tags" style="float: left;">
    <table>
    <?php foreach ($res['tags'] as $tag) { ?>
        <tr>
            <td>
            <a href="posts.php?tag=<?php echo $tag[0]; ?>">? + - <?php echo $tag[1] ?></a>
            </td>
        </tr>
    <?php } ?>
</table>
</Section>
<?php if(!isset($_GET['tag'])||(isset($_GET['tag'])&&$_GET['tag']=="1")){ ?>
<main>
        <div class="tbody" style="text-align: center;">
            <?php foreach ($posts as $post) { ?>
                <?php
                $sql = "SELECT * FROM posts WHERE fecha_baja IS NULL";
                $query = mysqli_query($link, $sql);
                if (!$query) {
                    echo "";
                } else { ?>
                    <a href="post.php?id=<?php echo $post['id'] ?>"><img src="img/posts/<?php echo $posts[$cont]['image']; ?>" height=200 width=150 style="object-fit: contain;"></a>
                <?php } ?>
            <?php
                $cont = $cont + 1;
            } ?>
        </div>
</main>
<?php } else if(isset($_GET['tag'])&&$_GET['tag']!="1"){ ?>
    <main>
        <div class="tbody" style="text-align: center;">
            <?php foreach ($posts as $post) { ?>
                <?php
                $sql = "SELECT * FROM posts
                INNER JOIN tag_post
                ON tag_post.post_id = posts.id
                INNER JOIN tags
                ON tag_post.tag_id = tags.id
                WHERE posts.fecha_baja IS NULL AND
                tag_post.tag_id = '" . $_GET['tag'] . "'";
                $query=mysqli_query($link,$sql);
                if (!$query) {
                    echo "";
                } else { ?>
<div class="container">
    <div class="images">
      <img class="img" src="img/posts/<?php echo $posts[$cont]['image']; ?>" />
    </div>
    <div class="slideshow-buttons">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
      <div class="four"></div>
    </div>
    <p class="pick p8">fotos</p>
    <div class="sizes">
      <div class="size">1</div>
      <div class="size">2</div>
      <div class="size">3</div>
      <div class="size">4</div>
      <div class="size">5</div>
      <div class="size">6</div>
      <div class="size">7</div>
      <div class="size">8</div>
    </div>
    <div class="product">
      <p class="p8">Women's Running Shoe</p>
      <h1 class="h1">Nike Epic React Flyknit</h1>
      <h2 class="h2">$150</h2>
      <p class="desc p8">The Nike Epic React Flyknit foam cushioning is responsive yet light-weight, durable yet soft. This creates a sensation that not only enhances the feeling of moving forward, but makes running feel fun, too.</p>
      <div class="buttons">
        <button class="add">Add to Cart</button>
        <button class="like"><span>♥</span></button>
      </div>
    </div>


    </div>
<br><br>

<script> $(".size").on('click', function(){
    $(this).toggleClass('focus').siblings().removeClass('focus');
 })</script>



                <?php } ?>
            <?php
                $cont = $cont + 1;
            } ?>
        </div>
</main>
<?php } ?>