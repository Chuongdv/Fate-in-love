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
<link rel="shortcut icon" type="image/png" href="/image/logo/logo_fav.png"/>

<base href="{{asset('')}}">
    <meta name="_token" content="{{csrf_token()}}" />
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
  

 <div class="header" style="margin-top: 8px; margin-left: 8px; margin-right: 20px;">
    <a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$user_edit->id}}" >{{$user_edit->name}}</a>
                     
            <a href="/logout">Đăng xuất</a>
      
      <a href="/contact">Liên hệ</a>
      
      
    </div>
  </div>

  <section>
    <?php $user = $user_edit ?>
    <div id="me" hidden>{{$user->id}}</div>
    <nav class="tutorial">
      <ul>
                <li class="menu listmenu">
                  Menu
                </li>
        <li href="#" class="listmenu" >
          <a href="/myprofile/{{$user->id}}" class="rowmenu"><img src="image/profile/{{$user->image}}"width="30" height= "30" />    
                  {{$user->name}}</a>
         
                </li>
                <li href="#" class="listmenu">
          <a href="/chat" class="rowmenu "id="tinnhan"><img src="image/chat.png" width="30" height= "30"/>
                  Chat</a>
                </li>
                <li href="#" class="listmenu">
          <a href="/crush/{{$user->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30"/>
                  Ghép đôi</a>
                </li>
                <li href="#" class="listmenu" >

          <a  class="rowmenu" id="nhapnhay"  ><image src="image/thongbao.png" width="30"  height= "30"/>

                  Thông báo <i class="fa fa-angle-down"></i></a>

                  <ul class="drop">

            </ul>


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

<form action="" method="post" enctype="multipart/form-data">
 <input type="hidden" name="_token" value="{{csrf_token()}}" /> 
<label>Tên:</label> 
<input type="text" name="name" value="{{$user_edit->name}}"><br /> 

<label>Ngày sinh:</label> 
 <input type="date" name="birthday" value="{{$user_edit->birthday}}"><br>
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
                               <option value=""  hidden style="color: #C3C3D8;font-weight: bold;">{{$user_edit->school->name}}</option>
                               
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
<textarea name="introduce" placeholder="Viết vài thứ về bạn!" style="width: 300px;">{{$user_edit->introduce}}</textarea><br /> 
<label>Ảnh đại diện: </label>
<input type="file" name="new_image" />
<input type="submit" name="submitbutton" id="submitbutton" value="Lưu" style="width: 300px;" /> 
</form>


</ul>       

      </div>

    </div>
  </div>
</div>
  </section>

<script>
   
  $(document).ready(function () {
   
   Pusher.logToConsole = true;

 var pusher = new Pusher('936d12ed94ff6b0de391', {
    cluster: 'ap1',
    encrypted: false
});

var chanelNotify = "notify." + $("#me").html();


// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe(chanelNotify);

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NotifyEvent', function(data) {
  var infomation;
  if(data.type == "add"){
    infomation = "<li id=\"\"><image src=\"image/love_follow.png\" width=\"15\"  height= \"15\"/>" + data.message + "</li>";
  }else{
    infomation = "<li id=\"\"><image src=\"image/love_unfollow.png\" width=\"15\"  height= \"15\"/>" + data.message + "</li>";
  }
  $(".drop").html(infomation);
  $("#nhapnhay").attr('class', 'animate-flicker');
});

 $("#nhapnhay").hover(function(){
    $(this).removeAttr('class');
    $(this).attr('class', 'rowmenu');
 });

var chanelChat = "messages." +  $("#me").html();


// Subscribe to the channel we specified in our Laravel Event
var channelC = pusher.subscribe(chanelChat);

// Bind a function to a Event (the full Laravel class)
channelC.bind('App\\Events\\NewMessage', function(data) {
    $("#tinnhan").attr('class', 'animate-flicker');
});

});


  $("#tinnhan").click(function(){
    $(this).removeAttr('class');
    $(this).attr('class', 'rowmenu');
 });

 </script>
    
</body>
</html>
