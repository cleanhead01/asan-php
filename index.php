<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아산병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
    
    <div id="wrap">

    <?php 
        session_start();
        if ( isset($_SESSION['userid']) ) { 
            $userid = $_SESSION['userid']; 
            $username = $_SESSION['name']; 
        } else { $userid = ''; }
    ?>
        <header id="header">
           <div class="row">
                <div id="lnb_menu" class="lnb_menu">
                    <img src="images/bg_header_lnb.png" alt="메뉴열기">
                </div>
                <div id="navWrap">
                    <nav id="lnb">
                        <div class="member">
                            <?php if(!$userid) { ?>
                                <div class="inBtn loginBtn"><a href="login_form.php">로그인</a></div>
                                <div class="inBtn joinBtn"><a href="join.html">회원가입</a></div>
                            <?php } else { ?>
                                <div class="inBtn"><?php echo $username ?>님 환영합니다.</div>
                                <div class="inBtn"><a href="logout.php">로그아웃</a></div>
                                <div class="inBtn"><a href="#none">정보수정</a></div>
                            <?php } ?>
                        </div>

                        <ul class="menuBox">
                            <li><a href="part1.html" class="part1">가정의학과</a></li>
                            <li><a href="#">메뉴2</a></li>
                            <li><a href="#">메뉴3</a></li>
                            <li><a href="#">메뉴4</a></li>
                            <li><a href="#">메뉴5</a></li>
                        </ul>
                        <div class="reserveBtn">
                            <a href="tel:1688-7575">예약및문의 1688-7575</a>
                        </div>
                        <div id="lnb_close" class="lnb_close">
                            <img src="images/bg_header_lnb_active.png" alt="메뉴닫기">
                        </div>
                    </nav>
                </div>
                <h1 class="logo">
                    <a href="index.php"><img src="images/img_header_logo.png" alt="서울아산병원"></a>
                </h1>
                <div class="search">
                    <a href="#"><img src="images/img_topSerch.png" alt="검색"></a>
                </div>
           </div>
        </header>

        <section id="container">
            <div id="content" class="mainContent">
                <div class="main_noti">
                        <a href="#">한국산업의 고객만족도 8년 연속 1위</a>
                        <a href="#">한국산업의 고객만족도 8년 연속 2위</a>
                        <a href="#">한국산업의 고객만족도 8년 연속 3위</a>
                        <a href="#">한국산업의 고객만족도 8년 연속 4위</a>
                </div>
                <div id="step_area">
                    <div class="bwrap">
                        <div class="setArea">
                            <div class="service">
                              <a href="medicalList.html"><img src="images/img_main01.png" width="120" height="176" alt="진료과/센터로 의료진 찾기"></a>
                            </div>
                            <div class="serch_wrap">
                              <div class="ty01">
                                <a href="#"><img src="images/img_main02.png" width="110" height="39" alt="진료예약"></a>
                              </div>
                              <div class="ty02">
                                <a href="#"><img src="images/img_main03.png" width="121" height="40" alt="예약조회"></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="bwrap">
                        <div class="setArea">
                            <div class="num">
                              <a href="#"><img src="images/img_main04.png" width="124" height="38" alt="전화번호안내"></a>
                            </div>
                            <div class="reserve">
                              <a href="#"><img src="images/img_main05.png" width="131" height="36" alt="건강진단예약"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <footer id="footer">
           <div class="quickMenu">
               <div class="row">
                   <a href="map.html">오시는길</a>
                   <a href="patient.php">최근 5년간 입원환자 통계</a>
                   <a href="#">진료/검사결과조회</a>
               </div>
           </div>        
           <div class="csCenter">
               <div class="contact">
                   <a href="tel:1688-7575">1688-7575</a>
                   <a href="#" target="_blank"><img src="images/img_youtube.png" alt="유튜브"></a>
                   <a href="#" target="_blank"><img src="images/img_naverblog.png" alt="블로그"></a>
               </div>
               <div class="privacy">
                   <a href="#"><span>개인정보처리방침</span></a>
                   <a href="#"><span>PC버젼보기</span></a>
               </div>
               <p>
                   &copy; Asan Medical Center. All rights reserved.
               </p>
           </div>
       </footer> 

    </div>

    <div id="onlyMobile">
        이 사이트는 모바일에서만 보입니다.
    </div>

    <script src="js/asan.js"></script>
</body>
</html>