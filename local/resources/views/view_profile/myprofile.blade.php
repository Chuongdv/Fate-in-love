<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" />
 <link rel="stylesheet"  href="{{ asset('css/style_crush_in_profile.css') }}" />
<base href="{{asset('')}}">
</head>
<body>
  <div class="header" >
    <a href="#default" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">
              
              <a href="/myprofile/{{$my->id}}">{{$my->name}}</a>
                      
                   
       <a href="/logout" >Đăng xuất</a>
      <a href="/home" class="avtive">Trang chủ</a>
      <a href="#contact" >Liên hệ</a>
      
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
                  <a href="#" class="rowmenu" ><img src="image/chat.png" width="30" height= "30"/>
                  Chat</a>
                </li>
                <li href="#" class="listmenu">
                   <a href="#" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30">
                  Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
                   <a href="#" class="rowmenu"><image src="image/thongbao.png" width="30"  height= "30">
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
        
        <h1 style="color:  #CC0066;">{{$my->name}}</h1>
        <h3 style="color:  #CC0066;">{{$my->birthday}}</h3>
      
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$my->school->name}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/> Sống tại {{$my->home}}</p> 

        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có 0 người crush</p>
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

      <div class="profilet p20">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Phạm Hoài Lâm</h1>
              <h2 style="font-size: 10px;">1000 người theo dõi</h2>
          </div>  
              
            </a>     
          
      </div>
      <div class="profilet">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Phạm Hoài Lâm</h1>
              <h2 style="font-size: 10px;">1000 người theo dõi</h2>
          </div>  
              
            </a>     
          
      </div>
      <div class="profilet">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Phạm Hoài Lâm</h1>
              <h2 style="font-size: 10px;">1000 người theo dõi</h2>
          </div>  
              
            </a>     
          
      </div>
      <div class="profilet">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Phạm Hoài Lâm</h1>
              <h2 style="font-size: 10px;">1000 người theo dõi</h2>
          </div>  
              
            </a>     
          
      </div>

         







    </div>

  <p>Đã quan tâm <a href="#">20 crush</a></p>



</div>
 
<div id="School" class="tabcontent">
   <div class="profilet p20">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Bách Khoa Hà Nội</h1>
              <h2 style="font-size: 10px;">1000 sinh viên</h2>
          </div>  
              
            </a>     
          
      </div>

     <div class="profilet">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Đại Học Xây Dựng</h1>
              <h2 style="font-size: 10px;">1000 sinh viên</h2>
          </div>  
              
            </a>     
          
      </div>

      <div class="profilet">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Đại học Mỏ</h1>
              <h2 style="font-size: 10px;">200 sinh viên</h2>
          </div>  
              
            </a>     
          
      </div>

      <div class="profilet">
          <a href="#"><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/>
          
          <div class="contentt">
              <h1 style="font-size: 15px;">Kinh Tế Quốc Dân</h1>
              <h2 style="font-size: 10px;">1000 sinh viên</h2>
          </div>  
              
            </a>     
          
      </div>


     
     <p>Đã quan tâm <a href ="#">5 trường</a></p>
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