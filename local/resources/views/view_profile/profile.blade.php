<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" /> 

<link rel="shortcut icon" type="image/png" href="/image/logo/logo_fav.png"/>



  <base href="{{asset('')}}">
      <meta name="_token" content="{{csrf_token()}}" />
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>
  <div class="header" >
    <a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$user->id}}" >{{$user->name}}</a>
                     
            <a href="/logout">Đăng xuất</a>
      <a href="/contact">Liên hệ</a>
      
      
    </div>
  </div>
  <section>
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

    <div>
      <div class="content" >
  <div class="card">
    <div class="firstinfo">
      <table>
          <tr><td>
               <img src="image/profile/{{$user_page->image}}" class="image_profile" />
          </td></tr>
          <tr><td style="text-align: center;">
             <?php
             $data = DB::table('crush')->select('cid')->where('uid',$user->id)->get()->toArray();
             $check=0;
            foreach($data as $cr)
               if($cr->cid == $user_page->id) {
                $check=1;
               }
             ?>

              
              @if($check==1)
            <div class="button_container">
              <a href="/unfollow/{{$user->id}}/{{$user_page->id}}"><button id="follow-button">Đang theo dõi</button></a>
                 <a href="/chat"><button id="follow-button" >Nhắn tin</button></a>
              </div>
              @else
              <div class="button_container">
              <a href="/follow/{{$user->id}}/{{$user_page->id}}"><button id="follow-button">Theo dõi</button></a>
<a href="/chat"><button id="follow-button" >Nhắn tin</button></a>
              </div>
               @endif  

               </td></tr>
              
                </table>

                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js'></script>
                <script type="text/javascript">
                                    $(document).ready(function() {
                    $("#follow-button").click(function() {
                      if ($("#follow-button").text() == "Đang theo dõi") {
                        // *** State Change: To Following ***
                        // We want the button to squish (or shrink) by 10px as a reaction to the click and for it to last 100ms
                        $("#follow-button").animate(
                          { width: "-=0px" },
                          100,
                          "easeInCubic",
                          function() {}
                        );
                        // then now we want the button to expand out to it's full state
                        // The left translation is to keep the button centred with it's longer width
                        $("#follow-button").animate(
                          { width: "+=0x", left: "-=0px" },
                          600,
                          "easeInOutBack",
                          function() {
                            $("#follow-button").css("color", "#fff");
                            $("#follow-button").text("Theo dõi");
                            // Animate the background transition from white to green. Using JQuery Color
                            $("#follow-button").animate(
                              {
                                backgroundColor: "#ff7ca8",
                                borderColor: "#ff7ca8"
                              },
                              1000
                            );
                          }
                        );
                      } else {
                        // *** State Change: Unfollow ***
                        // Change the button back to it's original state
                        $("#follow-button").animate(
                          { width: "-=0px", left: "+=0px" },
                          600,
                          "easeInOutBack",
                          function() {
                            $("#follow-button").text("Đang theo dõi");
                            $("#follow-button").css("color", "#3399FF");
                            $("#follow-button").css("background-color", "#ffffff");
                            $("#follow-button").css("border-color", "#3399FF");
                          }
                        );
                      }
                    });
                  });
                </script>

         




     
     <?php
         $count_crush = DB::table('crush')->where('cid',$user_page->id)->count('uid');
        ?>
        <div class="profileinfo" style="margin-left: 100px;">
        <h1></h1>
        <h1 style="color:  #CC0066;">{{$user_page->name}}</h1>
        <h3 style="color:  #CC0066;">{{$user_page->birthday}}</h3>
        <p class="bio"><img class="img" src="image/profile/{{$user_page->image}}"/>{{$user_page->introduce}}</p> 
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$user_page->school->name}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/>Sống tại {{$user_page->home}}</p>
        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có {{$count_crush}} người crush</p>
        
      </div>
    
   

    </div>
  </div>

  

  
</div>
<!-- js cho cac tabs -->


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