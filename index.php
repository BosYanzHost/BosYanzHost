
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js"></script>
      <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'>
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
 
  <title>Bos Yanz Host</title>
  <style>
  
@import url('https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css')
    
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    
    body {
      background-color: #121212;
    }

.tampil {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: rgba(0, 0, 0, 0.7);
}
.tampil-body {
	display: flex;
	height: 100vh;
	width: 100%;
	text-align: center;
	justify-content: center;
}

.tampil-body div {
	border-radius: 20px;
	padding: 20px;
	margin: auto;
	width: 50%;
	background-color: white;
}
.tampil-body button {
	cursor: pointer;
	font-size: 1.1em;
	text-align: center;
	border-radius: 20px;
	background-color: #DC143C;
	border: 0;
	margin-top: 20px;

	color: white;
	padding: 10px;
}

.fade-in-down-big {
animation: fadeInDownBig 1s 
}

.teks {
  animation: fadeInDownBig 1s 
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    transform: translateY(-100px);
  }
  50% {
    opacity: 1;
    transform: translateY(0);
  }
  80% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(0);
  }
}

.bounce-in-up {
 animation: bounce-in-up 1ps 
}

.bounce-in-up-1 .bounce-in-up-2 .bounce-in-up-3{
  animation: bounce-in-up 10s
}

.bounce-in-up-1 {
 animation: bounce-in-up 14s 
}

.bounce-in-up-2 {
 animation: bounce-in-up 10s 
}

.bounce-in-up-3 {
 animation: bounce-in-up 9s 
}

.bounce-in-up-4 {
 animation: bounce-in-up 8s 
}

.bounce-in-up-5 {
 animation: bounce-in-up 7s 
}

.bounce-in-up-6 {
 animation: bounce-in-up 6s 
}

.bounce-in-up-7 {
 animation: bounce-in-up 5s 
}

@keyframes bounce-in-up {
  0% {
    transform: translateY(100px);
    opacity: 0;
  }
  50% {
    transform: translateY(-20px);
    opacity: 1;
  }
  80% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(0);
  }
}

.slide-in {
  animation: slide-in 2s;
}

.slide-in{
  animation: slide-in 2s;
}

@keyframes slide-in {
  0% {
    transform: translateX(100%);
  }
  50% {
    transform: translateY(-20px);
    opacity: 1;
  }
  80% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(0);
  }
}

.slide-in-1 {
  animation: slide-in-1 3s;
}

.slide-in-1{
  animation: slide-in-1 3s;
}

@keyframes slide-in-1 {
  0% {
    transform: translateX(-100%);
  }
  50% {
    transform: translateY(-20px);
    opacity: 1;
  }
  80% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(0);
  }
}

.zoom-berulang {
  animation: zoom-berulang 2s linear infinite;
}

@keyframes zoom-berulang {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}

.zoom-in {
  animation: zoom-in 3s;
}

@keyframes zoom-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1);
  }
  80% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}

    video-container {
  position: fixed;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

video {
  position: fixed;
  top: 50%;
  left: 50%;
  z-index: -1;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  object-fit: cover;
}
    
    header {
      text-align: center;
      margin-top: -0rem;
    }
    
    header .container {
      margin: 5px;
    }
    header img {
      width: 130px;
      box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.4);
      border-radius: 60px;
    }
   
    header .container .title {
      color: white;
      font-size: 30px;
      font-family: "Roboto", serif;
      opacity: .9;
    }
    
    header .container .title i {
      color: #4f92ff;
      font-size: 20px;
    }
    
    header .container .desc {
      color: white;
      font-family: "Rubik", serif;
      font-weight: 400;
      opacity: .8;
    }
    
    header .myinfo div {
      color: white;
      font-size: 12px;
      border: solid 1px orange;
      padding: 0px 8px;
      line-height: 30px;
      border-radius: 15px;
    }
    
    header .myinfo {
      margin: 1rem auto;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      align-items: center;
      gap: 5px;
    }
    
    section {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 2rem auto;
      gap: 15px
    }
    
    section a {
      width: 18rem;
      height: 2.5rem;
    }
    
    section a button {
      background-color: rgba(110, 110, 110, 0.2);
      border: solid 1.5px rgba(255, 255, 255, 0.3);
      color: white;
      border-radius: 8px;
      width: 100%;
      height: 100%;
      transition: all 0.6s;
    }
    
    section a button:active {
      transform: scale(1.1);
      border: solid 3px white;
      font-style: bold;
      filter: drop-shadow(-3px 2px 8px #ffffff);
     
    }
    
    footer {
      text-align: center;
      color: white;
      margin-top: 40px;
      opacity: .8;
    }
    </style>
</head>
<body>
  <center>
    <h1>
      <font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;">
        <marquee> <div class="title">SELAMAT DATANG DI SOSIALMEDIA YANZ HOST <i class="fi fi-ss-badge-check"></i></div></marquee>
      </font>
    </h1>
  </center>
  <video id="background-video" loop muted playsinline>
  <source src="https://files.catbox.moe/o8l4u6.mp4" type="video/mp4">
</video>
  
  <header>
    <img src="yanz.jpg" alt="Profile" class="zoom-berulang">
    <div class="container fade-in-down-big">
      <div class="title"><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;">Yanz Host <i class="fi fi-ss-badge-check"></i></div></font>
      <div class="desc typing" <font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;">Hello, my name is Yanz Host</div>
      </font>
    </div>
    <div class="myinfo slide-in product">
      <div><\> Coding</div>
      <div>🎧 Music</div>
      <div>🛍️ Shopping</div>
      <div>🎮 Gaming</div>

    </div>
  </header>
  <section>
    <a class="bounce-in-up-7" href="https://wa.me/6283831720505"><button><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;"><i class="fa-brands fa-whatsapp"></i> WhatsApp</font></button></a>
    <a target="blank"class="bounce-in-up-6" href="https://www.tiktok.com/@yanzhostnih"><button><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;"><i class="fa-brands fa-tiktok"></i>Tiktok</font></button></a>
    <a target="blank" class="bounce-in-up-5" href="https://t.me/csadmin_ynz"><button><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;"><i class="fa-brands fa-telegram"></i>Telegram</font></button></a>
    <a target="blank" class="bounce-in-up-4" href="https://www.youtube.com/@BosYanHost"><button><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;"><i class="fa-brands fa-youtube"></i>YouTube</font></button>
    </a>
        <a target="blank" class="bounce-in-up-4" href="https://www.youtube.com/@BosYanHost"><button><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;"></i>🌐 Create Webp No Curl & S2m</font></button>
    </a>
       <a target="blank" class="bounce-in-up-3" href="https://linktr.ee/yanzhost"><button><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;">🔗 all Grup</font></button> </a>
       
 <div class="product tampil" id="text">
   	<div class="tampil-body">
			<div>
				<h1 class="container">SELAMAT DATANG DI SOSIALMEDIA YANZ HOST</h1>
				<button onclick="document.getElementById('text').style.display='none'">LANJUTKAN</button>
			</div>
		</div>
	</div>

       
    <span class="bounce-in-up-2"><a></a><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;"><font color="#FFFFFF" style="text-shadow: 0 0 10px #00F; animation: bersinar 2s infinite;">© 2025 YanzHost. Thank you all</font></span>
    </a>
    
       <script src="main.js"></script>

  </body>
</html>
