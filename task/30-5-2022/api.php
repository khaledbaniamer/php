<?php



try
{
    $connect = new PDO("mysql:host=localhost;dbname=api" , "root","");

    $sql = "SELECT * FROM testapi";
    $stat = $connect->query($sql);
    $rows = $stat->fetchAll(PDO::FETCH_ASSOC);

    $arr = array();
    $i=0;

    foreach($rows as $row){
        $arr[$i]['id']=$row['id'];
        $arr[$i]['first_name']=$row['first_name'];
        $arr[$i]['last_name']=$row['last_name'];
        $arr[$i]['age']=$row['age'];
        $i++;
    }

    echo json_encode($arr);
    
}
catch(PDOException $e)
{
    echo "connected faild";
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $sqlUpdate = "UPDATE testapi SET first_name = :fname , last_name= :lname , age = :age WHERE id = '$id'";

    $stat = $connect->prepare($sqlUpdate);
    $stat->execute([
        ":fname" => $first_name ,
        ":lname" => $last_name ,
        ":age"  => $age
    ]);
    echo "<script>
    window.location.href = 'api.html'
        </script>";
}

