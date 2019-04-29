<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="{{asset('css/new_page.css')}}" /> 
<link rel="stylesheet"  href="{{asset('css/back_ground.css')}}" /> 
<link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
<link rel="stylesheet"  href="{{asset('css/style_crush_in_profile.css')}}" />
<link rel="stylesheet"  href="{{asset('css/ghepdoi.css')}}" />

<base href="{{asset('')}}">
  
</head>
<body>
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
                  Trang cá nhân</a>
         
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
          <a href="/thongbao" class="rowmenu""><image src="image/thongbao.png" width="30"  height= "30">
                  Thông báo</a>
                </li>
            </ul>
        </nav>



        <div class="container_ghepdoi">
            <div class="right-container">

                <div class="list_school" >
                        <!-- cho vong lap foreach o day-->
                      <?php
                        $data_sch = DB::table('schools')->join('fschool', 'schools.id', '=', 'fschool.sid')->get();
                              $data_school = $data_sch->where('uid',$user->id)->sortByDesc('created_at')->take(20);
                              ?>
                      @foreach($data_school as $sch)
                      <?php
                      $count1 = DB::table('users')->where('sid',$sch->sid)->count('id');
                      ?>
                    <div class="item_school">
                     <a href="/home_school/{{$sch->sid}}">   <div style="margin-top: 2px;"><img src="image/logo/{{$sch->logo}}" width="50" height="50"></div></a>
                        <div style="margin-top: -12px;">
                            <p>{{$sch->name}}</p>
                            <p style="font-size: 10px; margin-top: -10px;">{{$count1}} sinh viên</p>
                            <button class="btn-item" style="background-image: url('image/love_follow.png');"></button>
                        </div>
                    </div>
                     @endforeach
                  </div>
                 

                  
        @foreach($user_cr as $us)
                  <?php
                  $count = DB::table('crush')->where('cid',$us->id)->count('uid');
                  ?>
                <div class="ghepdoi">
                    <div class="avatar">
                     <a href="/profile/{{$us->id}}"><img src="image/profile/{{$us->image}}" width="320" height="320"><a>
                    </div>

                    <div class="info">
                    <p>{{$us->name}}<p>
                    <p>{{$us->introduce}}</p>    
                    <p>{{$us->school->name}}</p>
                    <p>{{$us->home}}</p>
                        <p>Số người quan tâm: {{$count}}</p>
                  
                </div>

                <div class="btn_love_cancel mt">

                      <a href="/unfollow/{{$user->id}}">  <img src="image/cancel.png"></a>
                </div> 
                              
                 <div class="btn_love_cancel mt2">
                        <a href="/follow/{{$user->id}}"><img src="image/love_follow.png"> </a>
                    </div>
                
                </div>
                @endforeach
            </div>

            <div class="list_crush">
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

</body>
</html>