<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>아이디 중복체크</h3>


<?php

$id = $_GET['id'];  
// 주소창에 직접 값을 담아서 php프로그램을 호출할때는 전역변수 $_GET[]을 사용함

if ( !$id ) {
    echo ("<p>아이디를 입력해 주세요!</p>");
} else {
    $con = mysqli_connect('localhost', 'cleanhead01', 'sjihoon93!', 'cleanhead01');
    $sql = "select * from asanmember where id='$id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);
    if ( $num_record ) {
        echo "<p>".$id."아이디는 중복됩니다.</p>";
        echo "<p>다른 아이디를 사용해 주세요!</p>";
        echo ("
            <script>
                window.opener.document.getElementById('joinform')
                .classList.remove('on')
            </script>
        ");
    } else {
        echo "<p>".$id."아이디는 사용 가능합니다.</p>";
        echo ("
            <script>
                window.opener.document.getElementById('joinform')
                .classList.add('on')
            </script>
        ");
    }

    mysqli_close($con);
}

?>

<div id="close_btn">
   <button type="button" onclick="window.close()">닫기</button>
</div>


</body>
</html>
