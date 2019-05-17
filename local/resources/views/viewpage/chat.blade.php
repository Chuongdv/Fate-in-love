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
    <a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

             <a href="/myprofile/{{$user->id}}">{{$user->name}}</a>        
            <a href="/logout">Đăng xuất</a>
             
   
      <a href="/contact" >Liên hệ</a>
      
    </div>
  </div>

  <section>
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


       <div class="chat_container">
       	
       	<div class="right-container">

          <?php
            $data = DB::table('users')->join('crush', 'users.id', '=', 'crush.cid');
            $contacts = $data->where('uid',$user->id)->get();
            $onUser = DB::table('status')->select('uid')->get();
          //  $mess = DB::table('messages')->
            $dup = 0;
          ?>

            @foreach($contacts as $crush)
            <div class="chat-person" id="{{$crush->id}}">
              <img src="image/profile/{{$crush->image}}">
              <div class="inf">
              <p class="name">{{$crush->name}}</p>
              @foreach($onUser as $on)
                @if($crush->id == $on->uid))
                  <?php $dup = 1; ?>
                  @break
                @endif
              @endforeach
            
                @if($dup == 1))    
                  <p class="on">online</p>
                  <?php $dup = 0; ?>
                @else
                  <p class="on">offline</p>
                @endif

              </div>

            <?php 
              $count = DB::table('messages')->where('source', '=', $user->id)->where('destination','=', $crush->id)->where('seen', '=', '0')->get()->count();
            ?>
              <span class="badge" >{{$count}}</span><!--bien dem tin nhan moi-->
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

              @foreach($onUser as $on)
                @if($becrush->id == $on->uid))
                  <?php $dup = 1; ?>
                  @break
                @endif
              @endforeach

                @if($dup == 1))    
                  <p class="on">online</p>
                  <?php $dup = 0; ?>
                @else
                  <p class="on">offline</p>
                @endif
               </div>
            <?php 
              $count = DB::table('messages')->where('source', '=', $user->id)->where('destination','=', $becrush->id)->where('seen', '=', '0')->get()->count();
            ?>
              <span class="badge" >{{$count}}</span><!--bien dem tin nhan moi-->
            </div>
            @endforeach
             
            
       		</div>

          <div class="left-container">
          <div class="top-left-container">
            <img src="image/profile/<?php if(isset($contacts[0])) echo $contacts[0]->image ?>">
            <div class=" inf-chat">
              <p hidden id="currentCrush"><?php if(isset($contacts[0])) echo $contacts[0]->id ?></p>
              <p class="inf-chat-name"><?php if(isset($contacts[0])) echo $contacts[0]->name ?></p>
              <p class="inf-chat-name-count">offline</p>
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
             $messages = DB::table('messages')->where('idc', '=', $idc)->get();
        ?>


        <div class="chatting" id="ecran" >

            <!-- <div class="chat-form-me ">
              
              
              <div class="messenger tooltip"> <p>ahihi</p> <span class="tooltiptext">11:00 22-10-2019</span></div>

              <div class="avt">
                <img src="image/profile/{{$user->image}}">
              </div>
            
            </div> -->


            @if($messages != null && isset($contacts[0]))  
          
            @foreach($messages as $message)
            @if($message->source == $user->id)
           
            <div class="chat-form-me">
             
              <div class="messenger"> <p>{{$message->message}}</p></div>
              <div class="avt">
                <img src="image/profile/{{$user->image}}">
              </div>
            
            </div>
            @else
            
            <div class="chat-form-crush">
              <div class="avt">
                <img src="image/profile/{{$contacts[0]->image}}">
              </div>
              <div class="messenger"> <p>{{$message->message}} hihi</p></div>
            </div>
            @endif

            @endforeach
            @endif

        </div>
  
        <div class="send_message">
        <textarea name="" class="form-control type_msg" placeholder="Nhập tin nhắn..." style="margin-top: 5px; margin-left: 5px; font-size: 20px; width: 88%;"></textarea>
        <img id="sendMessage" src="image/logo/send-button.png" width=60 height=60 style="border-radius: 10px;">

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
            /*buff = "<div class=\"chat-form-me\"><div class=\"avt\"><img src=\"image/profile/";
            buff += pictureMe;
            buff += "\"></div><div class=\"messenger\"> <p>";
            buff += item['message'];
            buff += "</p></div></div>";*/
            buff="<div class=\"chat-form-me\"><div class=\"messenger\"><p>";
            buff+=item['message'];
            buff+="</p></div><div class=\"avt\"><img src=\"image/profile/";
            buff+=pictureMe;
            buff+="\"></div></div>";
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
      var dataInsert = "<div class=\"chat-form-me\"><div class=\"messenger\"><p>";
      dataInsert += message;
      dataInsert += "</p></div><div class=\"avt\"><img src=\"image/profile/";
      dataInsert += pictureMe;
      dataInsert += "\"></div></div>";
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
          'message': message,
          'crushId': currentCrush
          },
          success : function (result){
        //  alert(result);
;
          }
      });

      $(" .send_message").find(" .type_msg").val("");
    }


    // xu li realtime khi co tin nhan moi den
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

 var pusher = new Pusher('936d12ed94ff6b0de391', {
    cluster: 'ap1',
    encrypted: false
});

var chanelChat = "messages." + me;


// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe(chanelChat);

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NewMessage', function(data) {
   $("#tinnhan").attr('class', 'animate-flicker');
    var buff = "";
    buff = "<div class=\"chat-form-crush\"><div class=\"avt\"><img src=\"";
    buff += pictureCrush;
    buff += "\"></div><div class=\"messenger\"> <p>";
    buff += data.message.message;
    buff += "</p></div></div>";
    $(' .chatting').append(buff);
});

  $("#tinnhan").click(function(){
    $(this).removeAttr('class');
    $(this).attr('class', 'rowmenu');
 });

var chanelNotify = "notify." + me;


// Subscribe to the channel we specified in our Laravel Event
var channelN = pusher.subscribe(chanelNotify);

// Bind a function to a Event (the full Laravel class)
channelN.bind('App\\Events\\NotifyEvent', function(data) {
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






















});

  </script>
      

<script type="text/javascript">
  /*function ScrollDiv(){

   if(document.getElementById('ecran').scrollTop<(document.getElementById('ecran').scrollHeight-document.getElementById('ecran').offsetHeight)){-1
         document.getElementById('ecran').scrollTop=document.getElementById('ecran').scrollTop+1
         }
   else {document.getElementById('ecran').scrollTop!=0;}
}

setInterval(ScrollDiv,-20);*/

const out = document.getElementById("ecran")
let c = 0

setInterval(function() {
    // allow 1px inaccuracy by adding 1
    
}, 500)

function format () {
  return Array.prototype.slice.call(arguments).join(' ')
}

</script>

  </section>

</body>
</html>

