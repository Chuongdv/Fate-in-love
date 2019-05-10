

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
          <a href="/chat" class="rowmenu"><img src="image/chat.png" width="30" height= "30"/>
                  Chat</a>
                </li>
                <li href="#" class="listmenu">
          <a href="/crush/{{$user->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30">
                  Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
          <a href="/thongbao" class="rowmenu"><image src="image/thongbao.png" width="30"  height= "30">
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
               <img src="image/logo/{{$school->logo}}" class="image_profile" />
          </td></tr>
          <tr><td style="text-align: center;">
            <div class="button_container">
              <button style="background-image: url('image/love_follow.png')" onclick = "myClick()" id="fl" class="btn" style="width: 150px; border-radius: 50px; margin-top: 50px;"><span>Theo dõi</span></button>
              </div>
              <script type="text/javascript">
                function myclick(){
                    var imgPath = new String();
                    imgPath = document.getElementById("fl").style.backgroundImage;

                    if(imgPath == "url('image/love_follow.png')" || imgPath == "")
                    {
                        document.getElementById("div1").style.backgroundImage = "url('image/love_follow.png')";
                    }
                    else
                    {
                        document.getElementById("div1").style.backgroundImage = "url('image/love_unfollow.png')";
                    }
                  }
              </script>
          </td></tr>




      </table>
     
        <div class="profileinfo" style="margin-left: 100px;">
        <h1></h1>
      
        
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$school->name}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/>{{$school->address}}</p>
        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có 0 người quan tâm</p>
        
      </div>
    
   

    </div>
  </div>

  

  
</div>
<!-- js cho cac tabs -->


    </div>
    
  </section>

</body>
</html>