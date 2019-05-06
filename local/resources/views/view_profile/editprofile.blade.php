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
          <a href="/myprofile/{{$user_edit->id}}" class="rowmenu"><img src="image/profile/{{$user_edit->image}}"width="30" height= "30" />
            
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
              <a href="/edit_avatar/{{$user_edit->id}}"><button class="btn" style="margin-top: 50px; border-radius: 50px;"><span>sửa ảnh!</span></button></a>
              </div>

      </td></tr>
    </table> 
    

        <!-- CHANGE A PHOTO-->
      <div class="profileinfo">
        <ul class="change">
          @if(count($errors) >0)
                        <div class="alert alert-danger" style="color: red">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>

                            @endforeach

                        </div>

                        @endif

                         @if(session('thongbao'))
                        <div class="alert alert-success" style="color: green">
                            
                            {{session('thongbao')}}<br>
                        </div>

                        @endif

<!--form action="" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
<label for="user">Name:</label> 
<input type="text" name="name" value="{{$user_edit->name}}"><br /> 
<label>Email:</label> 
<input type="text" name="email" value="{{$user_edit->email}}"><br /> 
<label>Home:</label> 
<input type="text" name="home" value="{{$user_edit->home}}"><br /> 
<label>Introduece:</label> 
<textarea name="introduce" placeholder="{{$user_edit->introduce}}"></textarea><br /> 
 
        <label> School: </label>
          <select class="old-select" name="school">
             @foreach($school as $sch)
                                <option 
                                @if($user_edit->sid== $sch->id) 
                                {{"selected"}}
                                @endif

                                value="{{$sch->id}}">{{$sch->name}}</option>
                                @endforeach
          </select>
      
        
<input type="submit" name="submitbutton" id="submitbutton" value="Edit" /> 
</form-->

<form action="" method="post">
 <input type="hidden" name="_token" value="{{csrf_token()}}" /> 
<label>Tên:</label> 
<input type="text" name="name" value="{{$user_edit->name}}"><br /> 

<label for="user">Ngày sinh:</label> 
<input type="text" name="birthday" value="{{$user_edit->birthday}}"><br /> 


<label>Email:</label> 
<input type="text" name="email" value="{{$user_edit->email}}"><br /> 
<label>Quê quán:</label> 
<input type="text" name="home" value="{{$user_edit->home}}"><br /> 

        <label>Trường:   </label> 
        <!--    
          <select class="old-select" name="school">
             @foreach($school as $sch)
                                <option 
                                @if($user_edit->sid== $sch->id) 
                                {{"selected"}}
                                @endif

                                value="{{$sch->id}}">{{$sch->name}}</option>
                                @endforeach
          </select>
        -->

         <select class="form-control" name="school" >
           @foreach($school as $sch)
                               <option value="" disabled selected hidden style="color: #C3C3D8;font-weight: bold;">{{$user_edit->school->name}}</option>
                               
                                <option 
                                @if($user_edit->sid== $sch->id) 
                                {{"selected"}}
                                @endif

                                value="{{$sch->id}}">{{$sch->name}}</option>
                                @endforeach
                                </select>
        
           <br/>
           <br>
           
<label>Giới thiệu:</label> 
<textarea name="introduce" placeholder="{{$user_edit->introduce}}" style="width: 300px;"></textarea><br /> 

<input type="submit" name="submitbutton" id="submitbutton" value="Lưu" style="width: 300px;" /> 
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
