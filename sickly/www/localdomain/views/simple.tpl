<html>
         <ul>
         <div class="blogposts">
         % for post in posts:
         <div class="post">
            <h2>By {{post[1]}} on {{post[0]}}.</h2>
         {{!post[2]}}
         % end
        </ul>
    </body>
</html>
