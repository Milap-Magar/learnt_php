<html>

<head>
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }

        .pass {
            background-color: green;
        }

        .fail {
            background-color: red;
        }

        /* .even {
            background-color: #222222;
            color: white;
        }

        .odd {
            background-color: gray;
        } */
    </style>
</head>

<body>

    <?php
    $students = [
        ["name" => "Ram", "roll" => 18, "webtech" => 80, "DBMS" => 75, "Economics" => 85, "DSA" => 85, "Account" => 85],
        ["name" => "Shyam", "roll" => 18, "webtech" => 70, "DBMS" => 65, "Economics" => 90, "DSA" => 85, "Account" => 85],
        ["name" => "Hari", "roll" => 18, "webtech" => 20, "DBMS" => 55, "Economics" => 95, "DSA" => 85, "Account" => 85]
    ];
    ?>
    <table border="2">
        <thead>
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>Roll</td>
                <td>Web Tech II</td>
                <td>DBMS</td>
                <td>Economics</td>
                <td>DSA</td>
                <td>Account</td>
                <td>Total</td>
                <td>Result</td>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($students as $index => $student) {
                // if ($index % 2 == 0) {
                //     $c = "even";
                // } else {
                //     $c = "odd";
                // }
                $total = $student['webtech'] + $student['DBMS'] + $student['Economics'] + $student['DSA'] + $student['Account'];

                if ($student['webtech'] < 40 || $student['DBMS'] < 40 || $student['Economics'] < 40 || $student['DSA'] < 40 || $student['Account'] < 40) {
                    $d = "fail";
                    $result = 'fail';
                } else {
                    $d = 'pass';
                    $result = 'pass';
                }
                ?>
                <tr class="<?php echo $d ?>">

                    <td>
                        <?php echo $index + 1 ?>
                    </td>
                    <td>
                        <?php echo $student['name'] ?>
                    </td>
                    <td>
                        <?php echo $student['roll'] ?>
                    </td>
                    <td>
                        <?php echo $student['webtech'] ?>
                    </td>
                    <td>
                        <?php echo $student['DBMS'] ?>
                    </td>
                    <td>
                        <?php echo $student['Economics'] ?>
                    </td>
                    <td>
                        <?php echo $student['DSA'] ?>
                    </td>
                    <td>
                        <?php echo $student['Account'] ?>
                    </td>
                    <td>
                        <?php echo $total ?>
                    </td>
                    <td class="<?php echo $d ?> ">
                        <?php echo $result ?>
                    </td>
                </tr>


                <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>