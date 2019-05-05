<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$user_edit->name}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/style.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/btn_changeprofile.css') }}" /> 
   <link rel="stylesheet"  href="{{ asset('css/changeprofile.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/new.css') }}" /> 
<base href="{{asset('')}}">

</head>
<body>
  <style type="text/css">body{overflow: scroll;}</style>
 <div class="header" >
    <a href="#default" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$user_edit->id}}" >{{$user_edit->name}}</a>
                     
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
        <li href="#" class="listmenu" >
          <a href="/myprofile/{{$user_edit->id}}" class="rowmenu""><img src="image/profile/{{$user_edit->image}}"width="30" height= "30" />
            
                  {{$user_edit->name}}</a>
         
                </li>
                <li href="#" class="listmenu">
          <a href="/chat" class="rowmenu"><img src="image/chat.png" width="30" height= "30"/>
                  Chat</a>
                </li>
                <li href="#" class="listmenu">
          <a href="/crush/{{$user_edit->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30">
                  Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
          <a href="/thongbao" class="rowmenu"><image src="image/thongbao.png" width="30"  height= "30">
                  Thông báo</a>
                </li>
            </ul>
        </nav>

    
      <div class="content" style="width: 80%;">
  <div class="card">
    <div class="firstinfo">
    <table>
      
      <tr><td>
        <img src="image/profile/{{$user_edit->image}}" class="image_profile" />
      </td></tr>

      <tr><td style="text-align: center;">
        <div class="button_container">
              <button class="btn" style="margin-top: 50px; border-radius: 50px;"><span>sửa ảnh!</span></button>
              </div>

      </td></tr>
    </table> 
    

        <!-- CHANGE A PHOTO-->
      <div class="profileinfo">
        <ul class="change">

                         @if(session('thongbao'))
                        <div class="alert alert-success" style="color: green">
                            
                            {{session('thongbao')}}<br>
                        </div>

                        @endif
<form action="" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
            <label>Hình ảnh: </label>
              <p>
                 <img width="50px" src="image/profile/{{$user_edit->image}}" />
                     <input type="file" name="image" />
                            </p>
      <br>
      <input type="submit" name="submitbutton" id="submitbutton" value="Edit" /> 
</form>


</ul>       

      </div>

    </div>
  </div>
</div>
  </section>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
</body>
</html>
