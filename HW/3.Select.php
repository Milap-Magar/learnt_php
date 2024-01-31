<pre>
<?php
error_reporting(E_ALL);
try{
    $connection=mysqli_connect('localhost','root','','db_23_milap_lab');
    $sql="SELECT * FROM tbl_Students_23";
    $result=mysqli_query($connection,$sql);
    $Students=[];
    if(mysqli_num_rows($result)>0){
        while($record=mysqli_fetch_assoc($result)){
            array_push($Students,$record);
        }
    }
    else{
        echo'Data not found!sorry!';
    }
    print_r($Students);

}
catch(exception $ex){
    die('ERROR:'.$ex->getMessage());
}
?>