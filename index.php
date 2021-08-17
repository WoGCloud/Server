<?php
  error_reporting(0);
  $capFile = fopen("src/set/developer.dat", "r") or die("Unable to open file!");
  $devStat = fread($capFile,filesize("src/set/developer.dat"));
  if($devStat==0){
    ?>
<!DOCTYPE html>
<html>
<meta name="theme-color" content="#111">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
<title>@VipServ Cloud ვიპსერვ ღრუბელი ადვილი პლატფორმა </title>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="src/css/index.css">
  <script type="text/javascript" src="src/script/script.js"></script>


</head>
<body id="body">
  <div class="topbar shadowDeep">
    @Cloud+
  
    <style>
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
@import url(//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css);

body {
	font-family: 'Lato', Arial, sans-serif;
	background: #fff;
	color:white;
}

.container {
	width: 500px;
	margin: 0 auto;
}

.launcher {
	position: relative;
	text-align: center;
	color:white;
}

header {
	text-align:center;
}

header h1 {
	font-size: 2em;
	line-height: 1.3;
	margin: 0;
	font-weight: 300;
	margin: 20px;
}

.app-launcher {
	position: absolute;
	left: 84px;
	top: 40px;
}

.app-launcher::before {
	content: '';
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-bottom: 10px solid white;
	position: absolute;
	top: -9px;
	left: 50%;
	margin-left: -5px;
	z-index: 1;
}

.apps {
	position: relative;
	border: 1px solid #ccc;
	border-color: rgba(0,0,0,.2);
	box-shadow: 0 2px 10px rgba(0,0,0,.2);
	-webkit-transition: height .2s ease-in-out;
	transition: height .2s ease-in-out;
	min-height: 196px;
	overflow-y: auto;
	overflow-x: hidden;
	width: 320px;
	height: 396px;
	margin-bottom: 30px;
}

.launcher .button {
	cursor: pointer;
	width: 32px;
	margin: 0 auto;
}

.hide {
	display: none;
}

.apps ul {
	background: #fff;
	margin: 0;
	padding: 28px;
	width: 264px;
	overflow: hidden;
	list-style: none;
}

.apps ul li {
	float: left;
	height: 64px;
	width: 88px;
	color: black;
	padding: 18px 0;
	text-align: center;
}

.apps .more {
	line-height: 40px;
	text-align: center;
	display: block;
	width: 320px;
	background: #f5f5f5;
	cursor: pointer;
	height: 40px;
	overflow: hidden;
	position: absolute;
	text-decoration: none;
	color: #282828;
}

.apps.overflow .more {
	border-bottom: 1px solid #ebebeb;
	left: 28px;
	width: 264px;
	height: 0;
	cursor: default;
	height: 0;
	outline: none;
}

.fa-facebook-square {
	color: #3b5998;
}

.fa-twitter-square {
	color: #00aced;
}

.fa-google-plus-square {
	color: #dd4b39;
}

.fa-youtube-square {
	color: #bb0000;
}

.fa-linkedin {
	color: #007bb6;
}

.fa-instagram {
	color: #517fa4;
}

.fa-pinterest {
	color: #cb2027;
}

.fa-tumblr-square {
	color: #32506d;
}

.fa-skype {
	color: #009EE5;
}

.fa-android {
	color: #99CC00;
}

.fa-dribbble {
	color:  #C35D9C;
}

.fa-html5 {
	color: #F65B1F;
}

.fa-css3 {
	color: #0070BA;
}

.fa-dropbox {
	color: #65B1ED;
}

.fa-windows {
	color: #1DAAE2;
}

.fa-linux {
	color: #DD4814;
}

.fa-apple {
	color:  #403F3F;
}

::-webkit-scrollbar-thumb {
	background-clip: padding-box;
	background-color: rgba(0,0,0,.3);
	border: 5px solid transparent;
	border-radius: 10px;
	min-height: 20px;
	min-width: 20px;
	height: 5px;
	width: 5px;
}

::-webkit-scrollbar {
	height: 15px;
	width: 15px;
	background: white;
}

::-webkit-scrollbar-button {
	height: 0;
	width: 0;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>




<body translate="no" >
  <div class="container">
    <header>
        	<!-- <h1>Scrollable dropdown like google app launcher</h1> -->

    </header>
    <div class="launcher">
        <div class="button">	<i class="fa fa-th fa-2x"></i>

        </div>
        <div class="app-launcher">
            <div class="apps">
                <ul class="first-set">
                    <li><a href="https://vipserv.net"><i class="fa fa-home fa-4x">
                        </i></a>
</a>
                    </li>
                    <li><a href="https://search.vipserv.net"><i class="fa fa-search fa-4x">
                        </i></a>

                    </li>
                    <li><a href="https://vipserv.net/+"><i class="fa fa-plus fa-4x">
                        </i></a>

                    </li>
                    <li><a href="https://mail.vipserv.net"><i class="fa fa-envelope fa-4x">
                        </i></a>

                    </li>
                    <li><a href="https://cc.vipserv.net"><i class="fa fa-link fa-4x"></i></a>

                    </li>
                    <li><a href="https://vipserv.net/updates.html"><i class="fa fa-comments fa-4x"></i></a>

                    </li>
                    <li><a href="https://new.vipserv.net"><i class="fa fa-rocket fa-4x"></i></a>

                    </li>
                    <li><a href="https://ads.vipserv.net"><i class="fa fa-bullhorn fa-4x"></i></a>

                    </li>
                    <li><a href="https://vipserv.net/games"><i class="fa fa-gamepad fa-4x"></i></a>

                    </li>
                </ul>	<a href="#" class="more">მეტი</a>

                <ul class="second-set hide">
                    <li><a href="https://disk.vipserv.net"><i class="fa fa-cloud fa-4x"></i></a>

                    </li>
                    <li><a href="https://accounts.vipserv.net"><i class="fa fa-user fa-4x"></i></a>

                    <!-- </li>
                    <li><a href="#"><i class="fa fa-linux fa-4x"></i></a>

                    </li>
                    <li><a href="#"><i class="fa fa-css3 fa-4x"></i></a>

                    </li>
                    <li><a href="#"><i class="fa fa-github fa-4x"></i></a>

                    </li>
                    <li><a href="#"><i class="fa fa-pinterest fa-4x"></i></a>

                    </li>
                    <li><a href="#"><i class="fa fa-tumblr-square fa-4x"></i></a>

                    </li>
                    <li><a href="#"><i class="fa fa-dropbox fa-4x"></i></a>

                    </li>
                    <li><a href="#"><i class="fa fa-instagram fa-4x"></i></a> -->

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script id="rendered-js" >
$(document).ready(function () {

  var scroll = false;
  var launcherMaxHeight = 396;
  var launcherMinHeight = 296;

  // Mousewheel event handler to detect whether user has scrolled over the container
  $('.apps').bind('mousewheel', function (e) {
    if (e.originalEvent.wheelDelta / 120 > 0) {
      // Scrolling up
    } else
    {
      // Scrolling down
      if (!scroll) {
        $(".second-set").show();
        $('.apps').css({ height: launcherMinHeight }).addClass('overflow');
        scroll = true;
        $(this).scrollTop(e.originalEvent.wheelDelta);
      }
    }
  });

  // Scroll event to detect that scrollbar reached top of the container
  $('.apps').scroll(function () {
    var pos = $(this).scrollTop();
    if (pos == 0) {
      scroll = false;
      $('.apps').css({ height: launcherMaxHeight }).removeClass('overflow');
      $(".second-set").hide();
    }
  });

  // Click event handler to show more apps
  $('.apps .more').click(function () {
    $(".second-set").show();
    $(".apps").animate({ scrollTop: $('.apps')[0].scrollHeight }).css({ height: 296 }).addClass('overflow');
  });

  // Click event handler to toggle dropdown
  $(".button").click(function (event) {
    event.stopPropagation();
    $(".app-launcher").toggle();
  });

  $(document).click(function () {
    //Hide the launcher if visible
    $('.app-launcher').hide();
  });

  // Prevent hiding on click inside app launcher
  $('.app-launcher').click(function (event) {
    event.stopPropagation();
  });

});

// Resize event handler to maintain the max-height of the app launcher
$(window).resize(function () {
  $('.apps').css({ maxHeight: $(window).height() - $('.apps').offset().top });
});
//# sourceURL=pen.js
    </script>

  
    <div class="rightPanel">
      <?php
        function folderSize ($dir){
            $size = 0;
            foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
                $size += is_file($each) ? filesize($each) : folderSize($each);
            }
            return $size;
        }
        $dirSize = (folderSize("uploads/")/1024)/1024;
        if($dirSize<1024){
          $precision = 2;
          $dirSize = substr(number_format($dirSize, $precision+1, '.', ''), 0, -1);
          echo $dirSize." MB";
        }
        else{
          $precision = 2;
          $dirSize = $dirSize/1024;
          $dirSize = substr(number_format($dirSize, $precision+1, '.', ''), 0, -1);
          echo $dirSize." GB";
        }
      ?>
    
       
      </a>
    </div>
  </div>
  <div class="main">
    <div class="uploadHolder">
      <center><div id="uploadLaunchButton" class="shadowDeep" onclick="showuploadBox()">ატვირთვა</div></center>
      <!--uploadBox-->
      <div class="inContainer" id="inContainer">
        <div style="display:none;" id="lcarte">
         <center> <div class="closeBtn shadow" onclick="hideuploadBox()"></div>
          <br>ამოირჩიე ფაილები რო ატვირთო..<br><br>
          <form action="uploadMul.php" enctype="multipart/form-data" method="post" name="uploadForm">
              <input type="text" name="inputBox" class="uploadSelector shadow" onclick="clickOnBrowse()">
                <div class="uploadSelectorSideDiv shadow" onclick="clickOnBrowse()">ძიება	</div>
              <input id='upload' name="upload[]" type="file" multiple="multiple" onChange="makeFileList();" style="display:none;"/>
              <div class="submitBtnHolder"><input type="submit" class="uploadBtn shadow" name="submit" value="გაგზავნა">
          </form>
              <ul id="fileList">
      				 ფაილები არ არის არჩეული
      				</ul>
            </div></center>
        </div>
      </div>
    </div>
    <!--items------------>
    <a href='type.php?typ=1'>
    <div class="pieceHolder shadow">
      <div class="pieceHolder-image" style="background:url('src/img/images.jpg') center/cover"></div>
      <div class="pieceHolder-text">სურათები</div>
    </div>
    </a>
    <a href='type.php?typ=2'>
    <div class="pieceHolder shadow">
      <div class="pieceHolder-image" style="background:url('src/img/videos.png') center/cover"></div>
      <div class="pieceHolder-text">ვიდეოები</div>
    </div>
    </a>
    <a href='type.php?typ=3'>
    <div class="pieceHolder shadow">
      <div class="pieceHolder-image" style="background:url('src/img/audios.jpg') center/cover"></div>
      <div class="pieceHolder-text">აუდიო</div>
    </div>
    </a>
    <a href='type.php?typ=4'>
    <div class="pieceHolder shadow">
      <div class="pieceHolder-image" style="background:url('src/img/others.png') center/cover"></div>
      <div class="pieceHolder-text">სხვა</div>
    </div>
    <div class="main margin50"></div>
<center><a href="https://new.vipserv.net">დიზაინი:VipServ Developers Inc</a></center>
<center><a href="https://disk.vipserv.net">დაბრუნება კლასიკურ ვერსიაზე🚀</a></center>
<script src="https://yastatic.net/share2/share.js"></script>
<center>><div class="ya-share2" data-curtain data-shape="round" data-lang="ka" data-services="vkontakte,facebook,telegram"></div></center>
  <!-- <center><div class="statIconHolder shadowDeep"><img src="https://disk.vipserv.net/files/vsdev1/aOg8uG6ac8.png" alt="Server Status" class="statImg"></div></center>  -->
    </a>
  </div>
</body>
</html>
  <?php
    }
  //developer enabled
  else{
    ?>
    <!DOCTYPE html>
    <html>
    <meta name="theme-color" content="#111">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <head>
      <title>FileServer</title>
      <link rel="stylesheet" href="src/css/index.css">
      <script type="text/javascript" src="src/script/script.js"></script>
    </head>
    <body id="body">
      <div class="topbar shadowDeep">
        FileServer : <font face="courier new">developer</font>
        <div class="rightPanel">
          <?php
            function folderSize ($dir){
                $size = 0;
                foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
                    $size += is_file($each) ? filesize($each) : folderSize($each);
                }
                return $size;
            }
            $dirSize = (folderSize("uploads/")/1024)/1024;
            if($dirSize<1024){
              $precision = 2;
              $dirSize = substr(number_format($dirSize, $precision+1, '.', ''), 0, -1);
              echo $dirSize." MB";
            }
            else{
              $precision = 2;
              $dirSize = $dirSize/1024;
              $dirSize = substr(number_format($dirSize, $precision+1, '.', ''), 0, -1);
              echo $dirSize." GB";
            }
          ?>
          <a href="stat.php">
            <div class="statIconHolder shadowDeep"><img src="src/img/stat.png" alt="Server Status" class="statImg"></div>
          </a>
        </div>
      </div>
      <div class="main">
        <div class="dev-projectSecHolder">
          <font class="dev-heading">Project folders</font>
          <div class="dev-content">
            <?php
              if(count(scandir("uploads/projectFolders"))==2)
                echo "No projects yet. Start a new one <a href='#' style='color:#005242;'>here</a>.";
              else{
                $dir='uploads/projectFolders/';
                $files=scandir($dir);
                for($i=0;$i<count($files);$i++){
                  if(!array_key_exists('extension',pathinfo($files[$i]))){
                    echo '
                    <a class="inherit" href="lis-dir.php?i='.$files[$i].'">
                    <div class="dev-projectElem shadow">
                      <div class="dev-projectHeading shadowLight">'.$files[$i].'</div>
                      <div class="dev-projectDesc shadowLight">
                        Last updated on '.date ("F d Y", filemtime($dir.$files[$i])).'
                        <br>'.(count(scandir($dir.$files[$i]))-2).' file(s)
                      </div>
                    </div>
                    </a>
                    ';
                  }
                }
              }
            ?>
          </div>
        </div>
        <?php
        if($_SERVER['REMOTE_ADDR']=="127.0.0.1" || $_SERVER['REMOTE_ADDR'=="::1"]){
          ?>
          <div class="dev-projectSecHolder">
            <div class="uploadHolder">
              <div id="startnewLaunchButton" class="shadowDeep" onclick="showstartnewBox()">Start a new project</div>
              <!--uploadBox-->
              <div class="inContainer" id="instartContainer">
                <div style="display:none;" id="lcartestart">
                  <div class="closeBtn shadow" onclick="hidestartnewBox()"></div>
                  <br>Project name<br><br>
                  <form action="src/set/startProj.php" method="post" name="uploadForm">
                      <input type="text" name="projectName" id="asd" class="uploadSelector shadow width-pname">
                      <input type="submit" class="uploadBtn shadow" value="Create">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
      <div class="mainAfterDev">
        <div class="uploadHolder border-top">
          <div id="uploadLaunchButton" class="shadowDeep" onclick="showuploadBox()">Upload</div>
          <!--uploadBox-->
          <div class="inContainer" id="inContainer">
            <div style="display:none;" id="lcarte">
              <div class="closeBtn shadow" onclick="hideuploadBox()"></div>
              <br>Select items to upload..<br><br>
              <form action="uploadMul.php" enctype="multipart/form-data" method="post" name="uploadForm">
                  <input type="text" name="inputBox" class="uploadSelector shadow" onclick="clickOnBrowse()">
                    <div class="uploadSelectorSideDiv shadow" onclick="clickOnBrowse()">Browze	</div>
                  <input id='upload' name="upload[]" type="file" multiple="multiple" onChange="makeFileList();" style="display:none;"/>
                  <div class="submitBtnHolder"><input type="submit" class="uploadBtn shadow" name="submit" value="Submit">
              </form>
                  <ul id="fileList">
          				  No Files Selected
          				</ul>
                </div>
            </div>
          </div>
        </div>
        <!--items------------>
        <a href='type.php?typ=1'>
        <div class="pieceHolder shadow">
          <div class="pieceHolder-image" style="background:url('src/img/images.jpg') center/cover"></div>
          <div class="pieceHolder-text">Images</div>
        </div>
        </a>
        <a href='type.php?typ=2'>
        <div class="pieceHolder shadow">
          <div class="pieceHolder-image" style="background:url('src/img/videos.png') center/cover"></div>
          <div class="pieceHolder-text">Videos</div>
        </div>
        </a>
        <a href='type.php?typ=3'>
        <div class="pieceHolder shadow">
          <div class="pieceHolder-image" style="background:url('src/img/audios.jpg') center/cover"></div>
          <div class="pieceHolder-text">Audios</div>
        </div>
        </a>
        <a href='type.php?typ=4'>
        <div class="pieceHolder shadow">
          <div class="pieceHolder-image" style="background:url('src/img/others.png') center/cover"></div>
          <div class="pieceHolder-text">Others</div>
        </div>
        </a>
      </div>
      <div class="main margin50"></div>
    </body>
    </html>
    <?php
  }
  ?>
