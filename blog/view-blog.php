<?php
require_once 'vendor/autoload.php';
use App\classes\Lists;
$message='';

$queryResult = Lists::getAllInfo();

?>
<hr/>
<a href="add-blog.php">Add Blog</a> ||
<a href="view-blog.php">View Blog</a>
<h1 style="color: green"><?php echo $message; ?></h1>
<hr/>
<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>Blog Title</th>
        <th>Author Name</th>
        <th>Blog Description</th>
        <th>Publication States</th>
    </tr>
    <?php while($lists = mysqli_fetch_assoc($queryResult)) {?>
        <tr>
            <td><?php echo $lists ['id']?></td>
            <td><?php echo $lists ['blog_title']?></td>
            <td><?php echo $lists ['author_name']?></td>
            <td><?php echo $lists ['description']?></td>
            <td><?php echo $lists ['states']?></td>
        </tr>
    <?php } ?>
</table>
