<?php include ('includes/header.php'); ?>
<ul id="topics">
    <li class="topic" id="main-topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="<?php BASE_URI; ?>img/avatars/<?php echo $topic->avatar; ?>"/>
                    <ul>
                        <li><strong><?php echo $topic->username; ?></strong></li>
                        </li><?php echo userPostCount($topic->user_id);?> Posts</li>
                        <li><a href="<?php BASE_URI; ?>topics.php?user=<?php echo $topic->id;?>">Profile</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <?php echo $topic->body; ?>
                </div>
            </div>
        </div>
    </li>
    <?php foreach ($replies as $reply): ?>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="<?php echo BASE_URI; ?>img/avatars/avatar.jpg"/>
                    <ul>
                        <li><strong><?php echo $reply->username; ?></strong></li>
                        </li><?php echo userPostCount($topic->user_id);?> Posts</li>
                        <li><a href="<?php BASE_URI; ?>topics.php?user=<?php echo $topic->id;?>">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <?php echo $reply->body; ?>
                </div>
            </div>
        </div>
    </li>
    <?php endforeach; ?>

</ul>
<h3>Reply to topic</h3>
<form role="form" method="POST">
    <div class="form-group">
        <textarea id="reply" rows="10" cols="80" class="form-control" name="reply" ></textarea>
        <script>CKEDITOR.replace('reply');</script>
    </div>
    <button name="replybtn" type="submit" class="btn btn-default">Submit</button>
</form>
<?php include ('includes/footer.php'); ?>