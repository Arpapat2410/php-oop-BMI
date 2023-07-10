<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div align="center">
    <?php
    include_once 'person.php';
    $weight=$_POST['weight'];
    $height=$_POST ['height'] ;

    $bmiCal = new Person($height , $weight);

   $result = $bmiCal -> getBMI();

    if( $result<=18.50){
        $c="น้ำหนักน้อย / ผอม";
        $s="มากกว่าคนปกติ";
    }else if( $result>18.50 &&  $result<22.90){
        $c="ปกติ (สุขภาพดี)";   
        $s="เท่าคนปกติ";
    }else if( $result>23 &&  $result<24.90){
        $c="ท้วม / โรคอ้วนระดับ 1";   
        $s="อันตรายระดับ 1";
    }else if( $result>25 &&  $result<29.90){
        $c="อ้วน / โรคอ้วนระดับ 2";   
        $s="อันตรายระดับ 2";
    }else if( $result>30){
        $c="อ้วนมาก / โรคอ้วนระดับ 3";
        $s="อันตรายระดับ 3";   
    }
    ?>
    <h2>ค่าดัชนีมวลกาย (BMI) ของคุณ :</h2>
    
    <p align="center">
    <b>BMI : </b><?php echo strval($result);?> bmi<br /><br />
    <b>อยู่ในเกณท์ : </b><?php echo $c;?><br /><br />
    <b>ภาวะเสี่ยงต่อโรค : </b><?php echo $s;?>
    
    </p>   
    
    </div>
    </body>
</html>