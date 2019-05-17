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


<style type="text/css">a{text-decoration: none;}</style>
</head>
<body>
  <div class="header" style="margin-right: 25px;">
    <a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">
              
              <a href="/myprofile/{{$my->id}}">{{$my->name}}</a>
                      
                   
       <a href="/logout" >Đăng xuất</a>
      
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
                  <a href="/myprofile/{{$my->id}}" class="rowmenu">
                    <img src="image/profile/{{$my->image}}" width="30" height="30">
                          
                          {{$my->name}}</a>
                </li>
                
                <li href="#" class="listmenu">
                  <a href="/chat" class="rowmenu" ><img src="image/chat.png" width="30" height= "30"/>
                  Chat</a>
                </li>
                <li href="#" class="listmenu">
                   <a href="/crush/{{$my->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30">
                  Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
                   <a href="/thongbao" class="rowmenu"><image src="image/thongbao.png" width="30"  height= "30">
                  Thông báo</a>
                </li>
            </ul>
        </nav>




<div class="content">
  <div class="card">
    <div class="firstinfo">
    
          <img src="image/profile/{{$my->image}}" class="image_profile" />
    
 
  
        <!-- CHANGE A PHOTO-->
      

      <div class="profileinfo">
        
       @if($my->gender == "Nam")
        <h1 style="color:  #CC0066;">{{$my->name}}<img class="img" src="image/logo/nam.png"></h1>
        @else
        <h1 style="color:  #CC0066;">{{$my->name}}<img class="img" src="image/logo/nu.png"></h1>
        @endif
        <h3 style="color:  #CC0066;">{{$my->birthday}}</h3>
      
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$my->school->name}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/> Sống tại {{$my->home}}</p> 

<?php
$count_crushs = DB::table('crush')->where('uid',$my->id)->count('cid');
?>
        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có {{$count_crushs}} người quan tâm</p>
        <p class="bio" style="width: 350px;"><img class="img" src="image/profile/{{$my->image}}"/> {{$my->introduce}}</p>
        <a href="/editprofile/{{$my->id}}"><p class="bio"><img class="img" src="image/logo/logoedit.jpg"/> Chỉnh sửa</p></a>
      </div>
<div>
      
        <div class="tab">
            <button class="tablinks active">Crush</button>
          
            <button class="tablinks">School</button>
         
        </div>
  

 
<div id="Crush" class="tabcontent">
    <!--chi cho 4 hinh thoi-->
    <div>
<?php
$data = DB::table('users')->join('crush', 'users.id', '=', 'crush.cid')->get();
        $data_crush = $data->where('uid',$my->id)->sortByDesc('created_at')->take(4);
        $count_crush = DB::table('crush')->where('uid',$my->id)->count('cid');
        $crush1 = $data_crush->shift();
        $count1 = 0;
        if($crush1 != null)
            $count1 = DB::table('crush')->where('cid',$crush1->cid)->count('uid');

        ?>

        <div class="profilet p20">
          @if($crush1 != null)
          <a href="/profile/{{$crush1->cid}}"><img src="image/profile/{{$crush1->image}}" class="photot"/>
          @endif
          <div class="contentt">
              <h1 style="font-size: 15px;">@if($crush1 != null) {{$crush1->name}} @endif</h1>
              <h2 style="font-size: 10px;">Số người quan tâm:{{$count1}}</h2>
          </div>  
              
            </a>     
          
      </div>
@foreach($data_crush as $cr)
<?php
$count = DB::table('crush')->where('cid',$cr->cid)->count('uid');

?>
      <div class="profilet">
          <a href="/profile/{{$cr->cid}}"><img src="image/profile/{{$cr->image}}" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">{{$cr->name}}</h1>
              <h2 style="font-size: 10px;">Số người quan tâm: {{$count}}</h2>
          </div>  
              
            </a>     
          
      </div>
      @endforeach


    </div>

  <p>Đã quan tâm <a href="/crush/{{$my->id}}">{{$count_crush}} người</a></p>



</div>
 
<div id="School" class="tabcontent">
  <?php
  $data_sch = DB::table('schools')->join('fschool', 'schools.id', '=', 'fschool.sid')->get();
        $data_school = $data_sch->where('uid',$my->id)->sortByDesc('created_at')->take(4);
         $count_school = DB::table('fschool')->where('uid',$my->id)->count('sid');
 $school1 = $data_school->shift();
        $count2 = 0;
        if( $school1 != null)
            $count2 = DB::table('fschool')->where('sid',$school1->sid)->count('uid');



        ?>
         <div class="profilet p20">
          @if($school1 != null)
          <a href="/profile_school/{{$school1->sid}}"><img src="image/logo/{{$school1->logo}}" class="photot"/>
          @endif
          <div class="contentt">
          @if($school1 != null) 
              <h1 style="font-size: 15px;">{{$school1->name}}</h1>
          @endif
              <h2 style="font-size: 10px;">Số người quan tâm: {{$count2}}</h2>
          </div>  
              
            </a>     
          
      </div>


@foreach($data_school as $sch)
<?php
$count1 = DB::table('fschool')->where('sid',$sch->sid)->count('uid');

?>
   <div class="profilet">
          <a href="/profile_school/{{$sch->sid}}"><img src="image/logo/{{$sch->logo}}" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">{{$sch->name}}</h1>
              <h2 style="font-size: 10px;">Số người quan tâm: {{$count1}}</h2>
          </div>  
              
            </a>     
          
      </div>

    @endforeach

      

     


     
     <p>Đã quan tâm <a href ="/crush/{{$my->id}}">{{$count_school}} trường</a></p>
</div>
 

    </div>
  </div>

  

  
</div>
<!-- js cho cac tabs -->
<script type="text/javascript">
    var buttons = document.getElementsByClassName('tablinks');
    var contents = document.getElementsByClassName('tabcontent');
    function showContent(id){
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'block';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(){
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Crush');
</script>

    </div>
      

      
    
     
      

    
  </section>

</body>
</html>