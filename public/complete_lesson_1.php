<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/complete_lession.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
    <title>complete</title>
</head>
<body>
    <div class = "complete_1 container_complete_lesson">
        <div class = " icon_language">
            <img src="../image_hocngoaingu/icon_english.png">
            <p><b>Lesson complete!</b></p>
        </div>
        <div>
            <div class = "box exp_container">
                <div class = "exp_container_left">
                    <p>Experience</p>
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div class = "exp_container_right">
                    <p> + 10 </p>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                </div>
            </div>
            <div class = "box score_container">
                <p>Score</p>
                <div class = "Score">
                    <p>100%</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="21" viewBox="0 0 448 512"><path d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/></svg>
                </div>
            </div>
        </div>
    </div>
    <div class = "buttons_complete_lession responsive-button">
        <button class ="next_button" type="button"> Next</button>
    </div>
    <div class = "overlay"></div>
    <div class="infor_exp">
        <div class = "container_star">
            <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;"></i>
        </div>
        <div>
            <p><b>Earn stars to compete in the League and track your progress</b></p>
            <p style = "font-size:20px">Earn 10 or more stars every time you complete a new lesson, pass a checkpoint, or practice with Smart Review.</p>
        </div>
    </div>
    <script>
        function toggleMenu(menuIcon, menu, overlay) {
            menuIcon.addEventListener('click', function(event) {
                menu.classList.toggle('show');
                overlay.classList.toggle('show');  // Hiển thị lớp nền mờ khi infor_exp mở
            });
        
            document.addEventListener('click', function(event) {
                if (event.target != menuIcon && event.target != menu) {
                    menu.classList.remove('show');
                    overlay.classList.remove('show');  // Ẩn lớp nền mờ khi đóng
                }
            });
        }
        
        var menuIcon4 = document.querySelector('.exp_container_left p');
        var menu4 = document.querySelector('.infor_exp');
        var overlay = document.querySelector('.overlay');
        
        toggleMenu(menuIcon4, menu4, overlay);
    </script>        
</body>
</html>