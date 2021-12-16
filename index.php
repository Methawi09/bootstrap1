<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .bg {
            background-color: bisque;
        }

        .bg2 {
            background-color: cornsilk;
            padding-left: 7%;
        }
    </style>

    <title>Document</title>
</head>

<body class="bg">

    <center>
        <h1>แบบฟอร์ม</h1>
    </center>

    <div class="container bg2">
        <form>
            <div class="container">
                <br>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="IDCard">บัตรประชาชน*</label>
                        <input type="text" class="form-control" id="IDCard" maxlength="13" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="prefix">คำนำหน้า*</label>
                        <select id="prefix" class="form-control">
                            <option selected>เลือก</option>
                            <option>นาย</option>
                            <option>นาง</option>
                            <option>นางสาว</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Fname">ชื่อ*</label>
                        <input type="text" class="form-control" id="Fname" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Lname">นามสกุล*</label>
                        <input type="text" class="form-control" id="Lname" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="sex">เพศ</label>
                        <select id="sex" class="form-control">
                            <option selected>เลือก</option>
                            <option>ชาย</option>
                            <option>หญิง</option>
                        </select>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="religion">ศาสนา</label>
                        <select id="religion" class="form-control">
                            <option selected>เลือก</option>
                            <option>พุทธ</option>
                            <option>อิสลาม</option>
                            <option>คริสต์</option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="number">บ้านเลขที่*</label>
                        <input type="text" class="form-control" id="number" required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="moo">หมู่ที่*</label>
                        <input type="text" class="form-control" id="moo" required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="road">ถนน*</label>
                        <input type="text" class="form-control" id="road" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="district">ตำบล/แขวง*</label>
                        <input type="text" class="form-control" id="district" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Sdistrict">อำเภอ/เขต*</label>
                        <input type="text" class="form-control" id="Sdistrict" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="prov">จังหวัด</label>
                        <select id="prov" class="form-control">
                            <option selected>เลือก</option>
                            <option>นครศรีธรรมราช</option>
                            <option>สุราษฎร์ธานี</option>
                            <option>เชียงใหม่</option>
                            <option>ภูเก็ต</option>
                            <option>กระบี่</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="zip">รหัสไปรษณีย์*</label>
                        <input type="text" class="form-control" id="zip" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="phone">โทรทัพท์บ้าน*</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tel">โทรทัพท์มือถือ*</label>
                        <input type="tel" class="form-control" id="tel" required>
                    </div>
                </div>
                <div class="col-sm-2 control-label" required>
                    <label for="branch">สาขาที่สนใจ*</label>
                </div>
                <label class="checkbox">
                    <input type="checkbox" value=""> ITD (เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล)
                </label><br />
                <label class="checkbox">
                    <input type="checkbox" value=""> IMI (นวัตกรรมสารสนเทศทางการแพทย์)
                </label><br />
                <label class="checkbox">
                    <input type="checkbox" value=""> MTA (เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม)
                </label><br />
                <label class="checkbox">
                    <input type="checkbox" value=""> DCM (ดิจิทัลคอนเทนต์และสื่อ)
                </label><br />
                <label class="checkbox">
                    <input type="checkbox" value=""> COMM (นิเทศศาสตร์)
                </label><br />
                <input type="submit" id="btnSubmit" value="send" class="btn btn-primary " margin="center">
            </div>
            <br>
        </form>
    </div>

</body>
<script>
    $("#btnSubmit").click(() => {
        var data = $.parseJSON(`{
            "IDCard": "${$("#IDCard").val()}", 
            "prefix": "${$("#prefix").val()}", 
            "Fname": "${$("#Fname").val()}", 
            "Lname": "${$("#Lname").val()}",
            "sex": "${$("#sex").val()}",
            "religion": "${$("#religion").val()}",
            "number": "${$("#number").val()}",
            "moo": "${$("#moo").val()}",
            "road": "${$("#road").val()}",
            "district": "${$("#district").val()}",
            "Sdistrict": "${$("#Sdistrict").val()}",
            "prov": "${$("#prov").val()}",
            "zip": "${$("#zip").val()}",
            "phone": "${$("#phone").val()}",
            "tel": "${$("#tel").val()}",
            "branch": "${$("#branch").val()}"}`);
        console.log(data);
    });
</script>

</html>
