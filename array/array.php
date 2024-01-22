<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students= [
            ['milap',12,'LAT','3rd'],
            ['mil',13,'LAT','3rd'],
            ['milxx',14,'LAT','3rd'],
            ['millu',15,'LAT','3rd']
        ];
    ?>
    <table border=2>
        <thead>
            <tr>
                <th>Name</th>
                <th>Symbol</th>
                <th>Address</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        for ($i = 0; $i < count($students); $i++) { ?>
            <tr>
                <td><?= $students[$i][0] ?></td>
                <td><?= $students[$i][1] ?></td>
                <td><?= $students[$i][2] ?></td>
                <td><?= $students[$i][3] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>