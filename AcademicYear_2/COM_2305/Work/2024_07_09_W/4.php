<!-- 4. สร้างฟอร์ม Login แล้วตรวจสอบ ถ้า username และ password ตรงกับที่กำหนดไว้ให้แสดงข้อความยินดีต้อนรับ (เพิ่มฟังก์ชันสคริปแสดงรหัสผ่านด้วย ดังตัวอย่าง ) -->

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>แบบฝึกหัดข้อที่ 4</title>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;}

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
        <script>
            function validateForm() {
                var username = document.forms["loginForm"]["uname"].value;
                var password = document.forms["loginForm"]["psw"].value;

                // ตั้งรหัสผ่านที่ถูก
                var correctUsername = "Pleuck";
                var correctPassword = "5555";

                if (username === correctUsername && password === correctPassword) {
                    alert("ยินดีต้อนรับ");
                    return true;
                } else {
                    alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");
                    return false;
                }
            }

            function togglePassword() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </head>
<body>
    <center><h2>Login</h2></center>

    <form name="loginForm" action="/action_page.php" method="post" onsubmit="return validateForm()">
        <div class="imgcontainer">
            <img src="https://raw.githubusercontent.com/pleuck11/CMRU_Learn/main/COM_2305/Web_Com2305/image/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%AD%E0%B8%A7%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%95%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B9%861.jpg" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>ชื่อผู้ใช้</b></label>
            <input type="text" placeholder="ใส่ชื่อผู้ใช้" name="uname" required>

            <label for="psw"><b>รหัสผ่าน</b></label>
            <input type="password" placeholder="ใส่รหัสผ่าน" name="psw" id="myInput" required>

            <label>
                <input type="checkbox" onclick="togglePassword()"> แสดงรหัสผ่าน
            </label>

            <button type="submit">เข้าสู่ระบบ</button>

        </div>
    </form>

</body>
</html>


