<?php require('core/ini.php'); ?>
<?php include 'includes/header.php'; ?>
<?php
//Create Topic object
$post = new Post;

$posts = $post->getCategoryId();
$category = $post->getCategoryC();

?>
<?php if (isLoggedIn()) : ?>
<table class="table table-striped">
    <tr>
        <th>Post ID#</th>
        <th>Post Title</th>
        <th>Category</th>
        <th>Author</th>
        <th>Date</th>
    </tr>
    <?php foreach ($posts as $post) : ?>
        <tr>
            <td><?php echo $post->id; ?></td>
            <td><a href="edit_post.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></td>
            <td><?php echo $post->name; ?></td> <!--ovde izvlacim ime categorije iz category -->
            <td><?php echo $post->author; ?></td>
            <td><?php echo dateFormat($post->date); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<table class="table table-striped">
    <tr>
        <th>Category ID#</th>
        <th>Category Name</th>
    </tr>
    <?php foreach($category as $post): ?>
        <tr>
            <td><?php echo $post->id; ?></td>
            <td><a href="edit_category.php?id=<?php echo $post->id;?>"><?php echo $post->name; ?></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <form role="form" method="post" action="login.php">
        <div class="form-group">
            <label>Username</lable>
                <input type="text" class="form-control" name="username" placeholder="Enter username" />
        </div>
        <div class="form-group">
            <label>Password</lable>
                <input type="password" class="form-control" name="password" placeholder="Enter password" />
        </div>
        <button name="do_login" type="submit" class="btn btn-primary">Login</button>
    </form>

<?php endif; ?>

<?php include 'includes/footer.php'; ?>
