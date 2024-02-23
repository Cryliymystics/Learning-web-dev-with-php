<!DOCTYPE html>
<html>
    <head>
        <title>A blog application</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
        <h1>Blog title</h1>
        <p>This blog is about random things that i find interesting and things that i am learnings.</p>
        
        <?php for ($postId = 1; $postId <= 3; $postId++): ?>
            <h2>Article <?php echo $postId ?> title</h2>
            <div>dd Mon YYYY</div>
            <p>A paragraph summarising article <?php echo $postId ?>.</p>
            <p>
                <a href="#">Read more...</a>
            </p>
        <?php endfor ?>
    </body>
</html>