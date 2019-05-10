<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" />
 <link rel="stylesheet"  href="{{ asset('css/style_crush_in_profile.css') }}" />
 <link rel="shortcut icon" type="image/png" href="/image/logo/logo_fav.png"/>

<base href="{{asset('')}}">
</head>
<body>
  <div class="header" >
    <a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">
              
              <a href="/myprofile/{{$user->id}}">{{$user->name}}</a>
                      
                   
       <a href="/logout" >Đăng xuất</a>
      <a href="/home" class="avtive">Trang chủ</a>
      <a href="/contact" >Liên hệ</a>
      
    </div>
  </div>


  <section>
   <nav>
      <ul >
                <li class="menu listmenu">
                  Menu
                </li>
                
                <li href="#" class="listmenu">
                  <a href="/myprofile/{{$user->id}}" class="rowmenu">
                    <img src="image/profile/{{$user->image}}" width="30" height="30">
                          
                          {{$user->name}}</a>
                </li>
                
                <li href="#" class="listmenu">
                  <a href="/chat" class="rowmenu" ><img src="image/chat.png" width="30" height= "30"/>
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



</section>

       

</body>
</html>