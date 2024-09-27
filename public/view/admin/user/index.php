<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>I'm User List</h1>
    <ul style="list-style-type: none; margin: 0; padding: 0;">
        <?php foreach($people as $currentPeople)  : ?>
            <li style="margin-bottom: 15px; padding-bottom: 10px; border-bottom: 1px solid #000;">
                <?php foreach ($currentPeople as $key => $currentPerson) : ?>
                    <div>
                        <span><?= ucfirst($key); ?> - </span>
                        <span><?= $currentPerson; ?></span>
                    </div>
                <?php endforeach; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
