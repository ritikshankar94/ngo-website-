<?php
include 'db.php';

if(isset($_POST['fname'])){
    // echo "Submit";
    if(!empty($_POST['fname']) && !empty($_POST['number'])) {

        $fname = $_POST['fname'] ;
        $number = $_POST['number'] ;

        $query = "delete from test where fname=('$fname') and number=('$number')" ;

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;

        if ($run){
            echo "Your registration cancelled successfully . . ." ;
        }
        else{
            echo "Form not submitted . . ." ;
        }
    }
    else{
        echo "No such field in database . . ." ;
    }
} else {
    echo "Method not valid";
}
?>