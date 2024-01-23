<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #tabular{
            
        }
    </style>
</head>

<body>
    <?php
    // $students= [
    //     [1,'milap',12, 40, 55, 30, 60, 75,'3rd'],
    //     [2,'hero',13, 55, 75, 49, 55, '3rd'],
    //     [3,'hero1',14, 30, 60, 33, 96, '3rd'],
    //     [4,'hero2', 15, 80, 90, 70, 75,'3rd']
    // ];
    $students = [
        ['Name' => 'milap', 'rollno'=>10, 'OS' => 40, 'Numerical' => 55, 'Software' => 65, 'DBMS' => 65, 'SL' => 80],
        ['Name' => 'ram', 'rollno'=>11, 'OS' => 30, 'Numerical' => 55, 'Software' => 75, 'DBMS' => 55, 'SL' => 65],
        ['Name' => 'sita', 'rollno'=>12, 'OS' => 70, 'Numerical' => 55, 'Software' => 85, 'DBMS' => 55, 'SL' => 70],
        ['Name' => 'krishna', 'rollno'=>13, 'OS' => 30, 'Numerical' => 55, 'Software' => 65, 'DBMS' => 45, 'SL' => 60]
    ];
    // echo 'pre';
    // print_r($students);
    ?>
    <table border=1 id="tabular">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>OS</th>
                <th>Numerical Method</th>
                <th>Software Engineering</th>
                <th>DBMS</th>
                <th>Scripting</th>
                <!-- <th>Result</th> -->
                <!-- <th>Percentage</th> -->
                <!-- <th>Division</th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $key => $student) { ?>
                
                <tr>    
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $student['Name'] ?></td>
                    <td><?php echo $student['rollno'] ?></td>
                    <td><?php echo $student['OS'] ?></td>
                    <td><?php echo $student['Numerical'] ?></td>
                    <td><?php echo $student['Software'] ?></td>
                    <td><?php echo $student['DBMS'] ?></td>
                    <td><?php echo $student['SL'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>