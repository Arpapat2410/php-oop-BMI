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
    <div class="container">
        <form action="calculate.php" method="POST" >
            <div class="head">
                <h2>เครื่องคำนวณหาค่าดัชนีมวลกาย (BMI)</h2>
            </div>
            <div class="form-group">
                <h4>น้ำหนักตัว (kg.)</h4>
                <input type="number" name="weight" placeholder="(kg.)">
                <h4>ส่วนสูง (cm.)</h4>
                <input type="number" name="height" placeholder="(cm.)">
            </div>
            <button class="btn btn-primary btn-lg" type="submit" name="button" id="button" value="คำนวน" >คำนวณ</button>
        </form>
        
    </div>

    
    
</body>
</html>