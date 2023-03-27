<?php
include 'db.php';
 
if(isset($_POST['fname'])){
    // echo "Submit";
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['number']) && !empty($_POST['age']) && !empty($_POST['gender'])) {
 
        $fname = $_POST['fname'] ;
        $lname = $_POST['lname'] ;
        $number = $_POST['number'] ;
        $age = $_POST['age'] ;
        $gender = $_POST['gender'] ;
 
        // echo $fname;
 
        $query = "insert into test(fname, lname, number, age, gender) values('$fname', '$lname', '$number',  '$age', '$gender')" ;
 
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
 
        if ($run){
            echo "Form submited successfully . . ." ;
        }
        else{
            echo "Form not submitted . . ." ;
        }
    }
    else{
        echo "all fields are required" ;
    }
} else {
    echo "Method not valid";
}
 
?>
