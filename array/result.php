<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main{
            display: flex;
            justify-content: center;
        }
        #tabular {
            width: 100%;
            height: 200px;
            border-spacing: 0px;
        }

        #table_row {}

        td {
            width: 100px;
            height: 50px;
            text-align: center;
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
        ['Name' => 'milap', 'rollno' => 10, 'OS' => 99, 'Numerical' => 95, 'Software' => 99, 'DBMS' => 90, 'SL' => 90],
        ['Name' => 'ram', 'rollno' => 11, 'OS' => 30, 'Numerical' => 55, 'Software' => 75, 'DBMS' => 55, 'SL' => 65],
        ['Name' => 'geeta', 'rollno' => 13, 'OS' => 60, 'Numerical' => 45, 'Software' => 45, 'DBMS' => 45, 'SL' => 50],
        ['Name' => 'hari', 'rollno' => 14, 'OS' => 75, 'Numerical' => 65, 'Software' => 55, 'DBMS' => 55, 'SL' => 60],
        ['Name' => 'shyama', 'rollno' => 15, 'OS' => 40, 'Numerical' => 85, 'Software' => 45, 'DBMS' => 65, 'SL' => 70],
        ['Name' => 'sita', 'rollno' => 12, 'OS' => 70, 'Numerical' => 85, 'Software' => 35, 'DBMS' => 85, 'SL' => 80],
        ['Name' => 'krishna', 'rollno' => 16, 'OS' => 40, 'Numerical' => 55, 'Software' => 45, 'DBMS' => 45, 'SL' => 60]
    ];
    // echo 'pre';
    // print_r($students);
    ?>
    <div id="main">
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
                    <th>Total</th>
                    <th>Result</th>
                    <th>Division</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $key => $student) { ?>
                    <?php 
                        $result = 'Pass';
                        if($student['DBMS'] < 40 || $student['OS'] < 40 || $student['Software'] < 40 || $student['SL'] < 40 || $student['Numerical'] < 40 ){
                             $result = "Fail";
                             $color = "style=\"background-color: red;\"";
                             $division = "-";
                             $percentage = "-";
                        }else{
                             $result = "Pass";
                             $color = "style=\"background-color: cyan;\"";
                             //TOTALING
                             $total = $student['DBMS'] + $student['OS'] + $student['SL'] + $student['Numerical'] + $student['Software'];
                             if($total > 450){
                                $division = "Distinction";
                             }else if($total > 400){
                                $division = "First Division";
                             }else if($total > 350){
                                $division = "Second Division";
                             }else if($total > 300){
                                $division = "Third Division";
                             }else{
                                $division = "JUST PASSED";
                             }
                            //  PERCENTAGE
                            $percentage = $total / 500 * 100  . "%";
                        }
                    ?>
                    <tr id="table_row" <?php  echo $color ?> >
                        <td>
                            <?php echo $key + 1 ?>
                        </td>
                        <td>
                            <?php echo $student['Name'] ?>
                        </td>
                        <td>
                            <?php echo $student['rollno'] ?>
                        </td>
                        <td>
                            <?php echo $student['OS'] ?>
                        </td>
                        <td>
                            <?php echo $student['Numerical'] ?>
                        </td>
                        <td>
                            <?php echo $student['Software'] ?>
                        </td>
                        <td>
                            <?php echo $student['DBMS'] ?>
                        </td>
                        <td>
                            <?php echo $student['SL'] ?>
                        </td>
                        <td>
                            <?php echo $total ?>
                        </td>
                        <td>
                            <?php echo $result ?>
                        </td>
                        <td>
                            <?php echo $division ?>
                        </td>
                        <td>
                            <?php echo $percentage ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>