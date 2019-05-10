<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" />
 <link rel="stylesheet"  href="{{ asset('css/style_crush_in_profile.css') }}" />
 <link rel="stylesheet"  href="{{ asset('css/lienhe.css') }}" />
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



  <div class="container_contact">
    <div class="logo"><img src="image/logo/logo_fil_zoom.png" width="150" height=" 40"></div>
    <div class="contact-logo"> 
      <p>Liên hệ với chúng tôi</p>
      <div class="info">
        <p>Địa chỉ: lớp 108596, Đại học Bách Khoa Hà Nội, số 1 Đại Cồ Việt</p>
        <p>Tác giả: Phạm Hoài Lâm - Tạ Thị Lan - Đỗ Văn Chưởng - ? Lực Lego - ? Hương</p>
        <p>gmail: fate_in_love@gmail.com</p>
        <p>gmail: love-in-fate@gmail.com</p>
        <p>SDT: 0232567312 - 1221212121 - 1212312312 - 123123123 - 231231231</p>
        <p>Fax: 2222222</p>
        <p style="font-size: 15px; text-align: center; margin-left: 0px;">Bản quyền web số 69, Hà Nội - 2019</p>
      </div>

    </div>
    
  </div>




</section>

       

</body>
</html>