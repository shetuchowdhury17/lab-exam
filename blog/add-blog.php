<?php
require_once 'vendor/autoload.php';
use App\classes\Lists;
$message='';
if (isset($_POST['btn']))
{
    $message = Lists::saveBlogInfo($_POST);
}
?>
<hr/>
<a href="add-blog.php">Add Blog</a> ||
<a href="view-blog.php">View Blog</a>
<h1 style="color: green"><?php echo $message; ?></h1>
<hr/>
<form action="" method="post">
    <table>
        <tr>
            <th align="left">Blog Title</th>
            <td><input type="text" name="blog_title"></td>
        </tr>

        <tr>
            <th align="left">Author Name</th>
            <td><input type="text" name="author_name"></td>
        </tr>

        <tr>
            <th align="left">Blog Description</th>
            <td>
                <textarea rows="5" cols="30" name="description"></textarea>
            </td>
        </tr>

        <tr>
            <th align="left" >Publication States</th>
            <td>
                <input type="radio" name="states" value="1">Published
                <input type="radio" name="states" value="0">Unpublished
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SAVE"></td>
        </tr>
    </table>
</form>
