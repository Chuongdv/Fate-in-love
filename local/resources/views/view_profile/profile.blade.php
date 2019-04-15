
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/page.css">
  <link rel="stylesheet" type="text/css" href="css/my.css">
  <link href="css/2style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/button_crush_mesg.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
  <div class="header" style="background-image: url('image/header.jpg');">
    <a href="#default" class="logo" style="color: #CC0066;">FateInLove</a>
    <div class="header-right">
      <a href="index" style="color: #CC0066; font-weight: bold;">Home</a>
      <a href="#contact" style="color: #CC0066;font-weight: bold;" >Contact</a>
      <a href="#about" style="color: #CC0066;font-weight: bold;" >About</a>
    </div>
  </div>
  <section>
   <nav>
      <ul >
                <li class="menu listmenu" style="background-image: url('image/menubg.jpg');color: #CC0066; font-weight: bold; ">
                  Menu
                </li>
        <li href="#" class="listmenu">
          <image src="image/banthan.png" width="50">
                  <a href="myprofile" class="rowmenu"style="color: #CC0066;font-weight: bold;">Profile</a>
                </li>
                <li href="#" class="listmenu">
          <image src="image/chat.png" width="50">
                  <a href="#" class="rowmenu" style="color: #CC0066;font-weight: bold;">Chat</a>
                </li>
                <li href="#" class="listmenu">
          <image src="image/ghepdoi.png" width="50">
                  <a href="#" class="rowmenu"style="color: #CC0066;font-weight: bold;">Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
          <image src="image/thongbao.png" width="50">
                  <a href="#" class="rowmenu"style="color: #CC0066;font-weight: bold;">Thông báo</a>
                </li>
            </ul>
        </nav>

    <div>
      <div class="content">
  <div class="card">
    <div class="firstinfo">
    
      <img src="image/profile/lanta.jpg" class="image_profile" />
        <div class="profileinfo">
        <h1 style="color:  #CC0066;">Tạ Thị Lan</h1>
        <h3 style="color:  #CC0066;">26-07-1998</h3>
        <p class="bio"><img class="img" src="image/profile/lanta.jpg"/> Information</p> 
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/> Trường đại học Bách Khoa Hà Nội</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/> Sống tại Hà Nội</p>
        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có 0 người crush</p>
        <p class="bio"><a href="editprofile"><img class="img" src="image/logo/logoedit.jpg"/></a> Chỉnh sửa</p>
      </div>
    <div class="pad">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Heart_coraz%C3%B3n.svg/1200px-Heart_coraz%C3%B3n.svg.png" class="image_stranger" />
        

    </div>
   <div class="pad">
      <img src="image/chat.png" class="image_stranger" />
        

    </div>
   

    </div>
  </div>

  

  
</div>
<!-- js cho cac tabs -->
<script type="text/javascript">
    var buttons = document.getElementsByClassName('tablinks');
    var contents = document.getElementsByClassName('tabcontent');
    function showContent(id){
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'block';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(){
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Crush');
</script>

    </div>
    
  </section>

</body>
</html>
