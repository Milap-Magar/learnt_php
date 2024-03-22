<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Info Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Info</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <?php foreach ($info as $field => $value): ?>
            <tr>
                <td>
                    <?= ucfirst($field) ?>
                </td>
                <td>
                    <?= $value ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>