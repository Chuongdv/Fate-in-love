

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" /> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
  <base href="{{asset('')}}">

</head>
<body>
  <div class="header" style="background-image: url('image/header.jpg');">
    <a href="#default" class="logo" style="color: #CC0066;">FateInLove</a>
     <div class="header-right">
   
              <a href="/myprofile/{{$user->id}}" style="color: #CC0066; font-weight: bold;">{{$user->name}}</a>
                      
                  
      <a href="/logout" style="color: #CC0066; font-weight: bold;">Logout</a>
      <a href="/home" style="color: #CC0066; font-weight: bold;">Home</a>
      <a href="#contact" style="color: #CC0066;font-weight: bold;" >Contact</a>
      <a href="#about" style="color: #CC0066;font-weight: bold;" >About</a>
    </div>
  </div>
  <section>
  <nav>
      <ul >
                <li class="menu listmenu" style="background-image: url('image/menubg.jpg');color: #CC0066; font-weight: bold; ">
                  Menu
                </li>
        <li href="#" class="listmenu">
          <image src="image/profile/{{$user->image}}" width="50">
                  
                  <a href="/myprofile/{{$user->id}}" class="rowmenu"style="color: #CC0066;font-weight: bold;">Profile</a>
                </li>
                <li href="#" class="listmenu">
          <image src="image/chat.png" width="50">
                  <a href="#" class="rowmenu" style="color: #CC0066;font-weight: bold;">Chat</a>
                </li>
                <li href="#" class="listmenu">
          <image src="image/ghepdoi.png" width="50">
                  <a href="#" class="rowmenu"style="color: #CC0066;font-weight: bold;">Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
          <image src="image/thongbao.png" width="50">
                  <a href="#" class="rowmenu"style="color: #CC0066;font-weight: bold;">Thông báo</a>
                </li>
            </ul>
        </nav>

    <div>
      <div class="content">
  <div class="card">
    <div class="firstinfo">
      <img src="image/profile/{{$user_page->image}}" class="image_profile" />
        <div class="profileinfo">
        <h1></h1>
        <h1 style="color:  #CC0066;">{{$user_page->name}}</h1>
        <h3 style="color:  #CC0066;">{{$user_page->birthday}}</h3>
        <p class="bio"><img class="img" src="image/profile/{{$user_page->image}}"/>{{$user_page->introduce}}</p> 
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$user_page->name_school}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/>Sống tại {{$user_page->home}}</p>
        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có 0 người crush</p>
        
      </div>
    <div class="pad">
      <img src="image/crush.png" class="image_stranger" />
        

    </div>
   <div class="pad">
      <img src="image/chat.png" class="image_stranger" />
        

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
