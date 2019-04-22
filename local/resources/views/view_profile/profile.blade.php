

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" /> 

  <base href="{{asset('')}}">

</head>
<body>
  <div class="header" >
    <a href="#default" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$user->id}}" >{{$user->name}}</a>
                     
            <a href="/logout">Đăng xuất</a>
      <a href="/home">Trang chủ</a>
      <a href="#contact">Liên hệ</a>
      
      
    </div>
  </div>
  <section>
  <nav>
      <ul >
                <li class="menu listmenu">
                  Menu
                </li>
        <li href="#" class="listmenu" style="text-align: left;">
          <a href="/myprofile/{{$user->id}}" class="rowmenu"><img src="image/profile/{{$user->image}}"width="30" height= "30" />
            
                  {{$user->name}}</a>
         
                </li>
                <li href="#" class="listmenu">
          <a href="" class="rowmenu"><img src="image/chat.png" width="30" height= "30"/>
                  Chat</a>
                </li>
                <li href="#" class="listmenu">
          <a href="#" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30">
                  Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
          <a href="#" class="rowmenu"><image src="image/thongbao.png" width="30"  height= "30">
                  Thông báo</a>
                </li>
            </ul>
        </nav>

    <div>
      <div class="content">
  <div class="card">
    <div class="firstinfo">
      <table>
          <tr><td>
               <img src="image/profile/{{$user_page->image}}" class="image_profile" />
          </td></tr>
          <tr><td style="text-align: center;">
            <div class="button_container">
              <button onclick = "myClick()" id="fl" class="btn" style="width: 150px; border-radius: 50px; margin-top: 50px;"><span>Theo dõi</span></button>
              <button class="btn draw-border">Nhắn tin</button>
              </div>
              <script type="text/javascript">
                function{
                    var imgPath = new String();
                    imgPath = document.getElementById("fl").style.backgroundImage;

                    if(imgPath == "url(images/blue.gif)" || imgPath == "")
                    {
                        document.getElementById("div1").style.backgroundImage = "url(images/green.gif)";
                    }
                    else
                    {
                        document.getElementById("div1").style.backgroundImage = "url(images/blue.gif)";
                    }
                  }
              </script>
          </td></tr>




      </table>
     
        <div class="profileinfo" style="margin-left: 100px;">
        <h1></h1>
        <h1 style="color:  #CC0066;">{{$user_page->name}}</h1>
        <h3 style="color:  #CC0066;">{{$user_page->birthday}}</h3>
        <p class="bio"><img class="img" src="image/profile/{{$user_page->image}}"/>{{$user_page->introduce}}</p> 
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$user_page->school->name}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/>Sống tại {{$user_page->home}}</p>
        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có 0 người crush</p>
        
      </div>
    
   

    </div>
  </div>

  

  
</div>
<!-- js cho cac tabs -->


    </div>
    
  </section>

</body>
</html>
