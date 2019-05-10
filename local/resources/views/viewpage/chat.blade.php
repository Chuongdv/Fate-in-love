<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   
</head>
<body>
<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>

		 <link rel="stylesheet"  href="{{asset('css/new_page.css')}}" /> 
		<link rel="stylesheet"  href="{{asset('css/back_ground.css')}}" /> 
		<link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
		<link rel="stylesheet"  href="{{asset('css/chat.css')}}" />

<base href="{{asset('')}}">

	</head>

	<body>
    
    <div class = "info" hidden>
      <div id = "infoId">{{$user->id}}</div>
      <div id = "infoPic">{{$user->image}}</div>
    </div>

		<div class="header" >
    <a href="#default" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$user->id}}">{{$user->name}}</a>
                    
            <a href="/logout">Đăng xuất</a>
      <a href="/home" >Trang chủ</a>
      <a href="#contact" >Liên hệ</a>
      
    </div>
  </div>

  <section>
    <nav>
      <ul >
                <li class="menu listmenu">
                  Menu
                </li>
        <li href="#" class="listmenu" >
          <a href="/myprofile/{{$user->id}}" class="rowmenu"><img src="image/profile/{{$user->image}}"width="30" height= "30" />      
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


       <div class="chat_container">
       	<div class="search">
       		<input type="text" placeholder="  Tìm kiếm..." name="" class="form-control search" style="min-width: 260px;">
       		<img src="https://media.istockphoto.com/vectors/loupe-icon-vector-magnifier-in-flat-style-search-sign-concept-vector-id818978848?b=1&k=6&m=818978848&s=170x170&h=W5QWk-Hq8wJOSWprczUC4OrSguaNRzgUvmaLdEadJkc=" width="40" height="40">
       		</div>
       	<div class="right-container">
          <?php
            $data = DB::table('users')->join('crush', 'users.id', '=', 'crush.cid');
            $contacts = $data->where('uid',$user->id)->get();
          ?>

            @foreach($contacts as $crush)
            <div class="chat-person" id="{{$crush->id}}">
              <img src="image/profile/{{$crush->image}}">
              <div class="inf">
              <p class="name">{{$crush->name}}</p>
              <p class="on">đang online</p>
              </div>
            </div>
            @endforeach


          <?php

            $data1 = DB::table('users')->join('crush', 'users.id', '=', 'crush.uid');
            $contacts1 = $data1->where('cid',$user->id)->get();

            $count = 1;
          ?>

            @foreach($contacts1 as $becrush)
            <div class="chat-person" id="{{$becrush->id}}">
              <img src="image/profile/avatar.jpg">
              <div class="inf">
              @if($becrush->gender == "Nam")
              <p class="name">{{"silly boy" . $count}}</p>
              <?php $count += 1; ?>
              @elseif($becrush->gender == "Nữ")
              <p class="name">{{"silly girl" .$count}}</p>
               <?php $count += 1; ?>
              @endif
              <p class="on">đang online</p>
              </div>
            </div>
            @endforeach
 
            
       		</div>




          <div class="left-container">
          <div class="top-left-container">
            <img src="image/profile/<?php if(isset($contacts[0])) echo $contacts[0]->image ?>">
            <div class=" inf-chat">
              <p hidden id="currentCrush"><?php if(isset($contacts[0])) echo $contacts[0]->id ?></p>
              <p class="inf-chat-name"><?php if(isset($contacts[0])) echo $contacts[0]->name ?></p>
              <p class="inf-chat-name-count">1000 tin nhắn</p>
            </div>

          </div>
      
        <?php
          //tim id hoi thoai
            $idc = null;
            if(isset($contacts[0])){
              if(((int)$user->id > (int) $contacts[0]->id))
                $idc = $user->id . $contacts[0]->id;
              else
                $idc = $contacts[0]->id . $user->id;
            }
        ?>

          <?php  
            $messages = DB::table('messages')->get();
          ?>

        <div class="chatting">
            @if($messages != null && isset($contacts[0]))         
            @foreach($messages as $message)
            @if($message->source ==  $user->id || $message->destination ==  $contacts[0]->id )
            @if($message->source == $user->id)
            <!--tin nhan tu ban than-->
            <div class="chat-form-me">
              <div class="avt">
                <img src="image/profile/{{$user->image}}">
              </div>
            
              <div class="messenger"> <p>{{$message->message}}</p></div>
            </div>
            @else
            <!--tin nhan tu nguoi dang chat voi minh-->
            <div class="chat-form-crush">
              <div class="avt">
                <img src="image/profile/{{$contacts[0]->image}}">
              </div>
              <div class="messenger"> <p>{{$message->message}} hihi</p></div>
            </div>
            @endif
            @endif
            @endforeach
            @endif
        </div>


       <div class="send_message">
        <textarea name="" class="form-control type_msg" placeholder="Nhập tin nhắn..." style="margin-top: 5px; margin-left: 5px; font-size: 20px; width: 88%;"></textarea>
      
           <img id="sendMessage" src="data:image/png;base64,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" width=60 height=60 style="border-radius: 10px;">
          </div>
       

       </div>
          

    </div>
       		

       	</div>

       	



  <script>
  $(document).ready(function () {
      var currentCrush = $("#currentCrush").text();
      var pictureCrush = null;
      var me = null;
      var pictureMe = null;

    me = $(".info").find("#infoId").text();
    pictureMe = $(".info").find("#infoPic").text();

  
    $(".chat-person").click(loadMessage);  

    $("#sendMessage").click(sendMessage);
    $(" .type_msg").keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        sendMessage();
    }
});


    function loadMessage(event){
      event.preventDefault();
      currentCrush = $(this).attr('id');

      // chinh sua tieu de
      var name = $(this).find(" .name").text();
      var status = $(this).find(" .on").text();
      pictureCrush = $(this).find("img").attr('src');
      $(".inf-chat-name").text(name);
      $(".inf-chat-name-count").text(status);
      $('.top-left-container').find("img").attr('src', pictureCrush);

      $.ajaxSetup({
      headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
      }); 

      $.ajaxSetup({ cache: false });

      $.ajax({
          url : "/conversation/" + currentCrush,
          type : "get",
          dataType:"json",
          data : {
          },
          success : function (result){
          var allMessage = "";
          var buff = "";
          $.each (result, function (key, item){
          if(item['source'] == me){
            buff = "<div class=\"chat-form-me\"><div class=\"avt\"><img src=\"image/profile/";
            buff += pictureMe;
            buff += "\"></div><div class=\"messenger\"> <p>";
            buff += item['message'];
            buff += "</p></div></div>";
          }
          else{
            buff = "<div class=\"chat-form-crush\"><div class=\"avt\"><img src=\"";
            buff += pictureCrush;
            buff += "\"></div><div class=\"messenger\"> <p>";
            buff += item['message'];
            buff += "</p></div></div>";
          }
          allMessage += buff;
          });
          if(allMessage){
            $(' .chatting').html(allMessage);
          }
          else{
            $(' .chatting').html("Có thể người ta cũng đang thích bạn đó, chủ động nhắn tin trước đi nào ^^");
          }
          }
      });
    }


    function sendMessage(){
      if($.trim($(" .send_message").find(" .type_msg").val())){

       var message = $(" .send_message").find(" .type_msg").val();

      // xu li client
      var dataInsert = "<div class=\"chat-form-me\"><div class=\"avt\"><img src=\"image/profile/";
      dataInsert += pictureMe;
      dataInsert += "\"></div><div class=\"messenger\"> <p>";
      dataInsert += message;
      dataInsert += "</p></div></div>"
      //alert(dataInsert)
        $(" .chatting").append(dataInsert); 
      }

      //goi server
      $.ajaxSetup({
          headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
      });
      $.ajaxSetup({ cache: false });
      $.ajax({
          url : "/conversation/send",
          type : "post",
          dataType:"text",
          data : {
         // _token: '{!! csrf_token() !!}',
          'message': message,
          'crushId': currentCrush
          },
          success : function (result){
          alert(result);
          }
      });
    }


    // xu li realtime khi co tin nhan moi den
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;


    var pusher = new Pusher('936d12ed94ff6b0de391', {
      cluster: 'ap1',
      forceTLS: true
    });

    var chanelChat = "message" + me;
   
    var channel = pusher.subscribe(chanelChat);
    channel.bind('NewMessage', addMewMessage);

    function addNewMessasge(data){
       //alert(JSON.stringify(data));
       alert("haha");
    }
});


  </script>
      
  </section>

</body>
</html>

