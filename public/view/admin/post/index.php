<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>I'm Posts List</h1>
    <ul style="list-style-type: none; margin: 0; padding: 0;">
        <?php foreach($posts as $key => $currentPost) : ?>
            <li style="margin-bottom: 15px; padding-bottom: 10px; border-bottom: 1px solid #000;">
                <?php foreach ($currentPost as $key => $value) : ?>
                    <div>
                        <?php if($key == 'title') { echo '<a href="#">' . $value . '</a>'; } ?>
                        <?php if($key == 'description') { echo '<p>' . $value . '</p>'; } ?>
                        <?php if($key == 'author') { echo '<i>Author: </i><a href="#">' . $value . '</a>'; } ?>
                    </div>
                <?php endforeach; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
