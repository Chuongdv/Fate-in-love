<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="_token" content="{{csrf_token()}}" />
  <link rel="stylesheet"  href="{{asset('css/new_page.css')}}" /> 
<link rel="stylesheet"  href="{{asset('css/back_ground.css')}}" /> 
<link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
<link rel="stylesheet"  href="{{asset('css/style_crush_in_profile.css')}}" />
<link rel="stylesheet"  href="{{asset('css/ghepdoi.css')}}" />
<link rel="shortcut icon" type="image/png" href="/image/logo/logo_fav.png"/>
<base href="{{asset('')}}">
<style type="text/css">
  .love{
    background-image: url('image/love_follow.png');"
  }
  .unlove{
    background-image: url('image/love_unfollow.png');"
  }
</style>

    <meta name="_token" content="{{csrf_token()}}" />
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   
</head>
<body>
  <div class="header" >
    <a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$user->id}}">{{$user->name}}</a>
                    
            <a href="/logout">Đăng xuất</a>
      
      <a href="/contact" >Liên hệ</a>
      
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



        <div class="container_ghepdoi">


            <div class="right-container">


                <div class="list_school" id="id_list_school">




                        <!-- cho vong lap foreach o day-->
                      <?php
                        $data_sch = DB::table('schools')->join('fschool', 'schools.id', '=', 'fschool.sid')->get();
                              $data_school = $data_sch->where('uid',$user->id)->sortByDesc('created_at')->take(20);
                              ?>
                      @foreach($data_school as $sch)
                      <?php
                      if($sch->sid == null){
                 $count1 = DB::table('users')->where('sid',$sch->id)->count('id');
                    }
                      
                      else {
                      $count1 = DB::table('users')->where('sid',$sch->sid)->count('id');
                    }
                      ?>
                    }
                    <div class="item_school">
                     <a href="/home_school/{{$sch->sid}}">   <div style="margin-top: 2px;"><img src="image/logo/{{$sch->logo}}" width="50" height="50"></div></a>
                        <div style="margin-top: -2px;">
                            <p>{{$sch->name}}</p>
                            <p style="font-size: 10px; margin-top: -4px;">{{$count1}} sinh viên</p>
                            <a href="/unfollow_school/{{$user->id}}/{{$sch->sid}}" id="love"><button class="btn-item love"></button></a>
                        </div>
                    </div>
                     @endforeach
                     <!-- list chưa quan tâm-->
                  <?php
                $sids = array();
                $schoolIds = array();
                $sids = DB::table('fschool')->select('sid')->where('uid', '=', $user->id)->get();
               foreach ($sids as $key) { 
                 array_push($schoolIds, $key->sid);
               }
               $results_school = DB::table('schools')->whereNotIn('id', $schoolIds)->get()->shuffle();
                 ?>
                  @foreach($results_school as $sch1)
                      <?php
                           $count2 = DB::table('users')->where('sid',$sch1->id)->count('id');

                      ?>
                 <div class="item_school">
                     <a href="/home_school/{{$sch1->id}}">   <div style="margin-top: 2px;"><img src="image/logo/{{$sch1->logo}}" width="50" height="50"></div></a>
                        <div style="margin-top: -2px;">
                            <p>{{$sch1->name}}</p>
                            <p style="font-size: 10px; margin-top: -4px;">{{$count2}} sinh viên</p>
                           <a href="/follow_school/{{$user->id}}/{{$sch1->id}}"> <button value="false"  class="btn-item" style="background-image: url('image/love_unfollow.png');"></button></a>
                        </div>
                    </div>
           @endforeach
                  </div>

                  
                      <!-- <input type="button" name="s" id="btttn" class="button-hide" > -->
              


                 <?php
                $cids = array();
                $crushIds = array();
                $cids = DB::table('crush')->select('cid')->where('uid', '=', $user->id)->get();
               foreach ($cids as $key) { 
                 array_push($crushIds, $key->cid);
               }
               $results = DB::table('users')->whereNotIn('id', $crushIds)->get()->shuffle();
                $results_new = $results->where('gender','!=',$user->gender);
                 ?>
        @foreach($results_new as $u)
                  <?php
                  $count = DB::table('crush')->where('cid',$u->id)->count('uid');
                  ?>
                <div class="ghepdoi" id="id_ghep_doi">
                    <div class="avatar">
                     <a href="/profile/{{$u->id}}"><img src="image/profile/{{$u->image}}" width="320" height="320"><a>
                    </div>

                    <div class="info">
                    <p>{{$u->name}}</p>
                    <p>{{$u->birthday}}</p>
                    <p>{{$u->introduce}}</p>    
                    <p>{{$u->home}}</p>
                    <p>Số người quan tâm: {{$count}}</p>
                  
                </div>

                <div class="btn_love_cancel mt">

                      <a href="/unfollow_crush/{{$user->id}}/{{$u->id}}">  <img src="image/cancel.png"></a>
                </div> 
                        
                 <div class="btn_love_cancel mt2">
                        <a href="/follow_crush/{{$user->id}}/{{$u->id}}"><img src="image/love_follow.png"> </a>
                    </div>
                
                </div>
                @endforeach
            </div>

            <div class="list_crush" style="overflow: auto;">
                <div class="name_list"><p>Danh sách các crush </p></div>
                <!-- foreach cac crush-->
                <?php
                $data = DB::table('users')->join('crush', 'users.id', '=', 'crush.cid')->get();
                        $data_crush = $data->where('uid',$user->id)->sortByDesc('created_at')->take(20);
                        
                        ?>
                @foreach($data_crush as $cr)
                      <div class="profilet" style="width: 210px; height: 50px; margin-left: 5px; margin-top: 5px;">
                      <a href="/profile/{{$cr->id}}"><img src="image/profile/{{$cr->image}}" class="photot"/>
                      
                      <div class="contentt">
                          <p style="font-size: 15px;">{{$cr->name}}</p>
                          
                      </div>  
                          
                        </a>     
                      
                  </div>
                 
@endforeach
               
            </div>
            
</div>

      
            
  </section>



<script type="text/javascript">


    var list = document.getElementsByClassName('btn-item');


    for(var x = 0; x < list.length; x++) {
        list[x].addEventListener('click', function(ev) {
          if (ev.target.tagName === 'BUTTON') {
            ev.target.classList.toggle('unlove');
          }
        }, false);
    }

</script>

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

