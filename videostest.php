<html>
<head>
<script type="text/javascript">


function ShowPopup(hoveritem,hoverpopup)
{

var curleft = curtop = 0;
if (hoveritem.offsetParent) {
 do {
      curleft += hoveritem.offsetLeft;
      curtop += hoveritem.offsetTop;
 } while (hoveritem = hoveritem.offsetParent);
}

hp = document.getElementById(hoverpopup);

// Set position of hover-over popup
//hp.style.top = hoveritem.offsetTop + 20;
//hp.style.left = hoveritem.offsetLeft + 30;
hp.style.top = curtop + 45;
hp.style.left = curleft + 50;
// Set popup to visible
hp.style.visibility = "Visible";
}

function HidePopup(hoverpopup)
{
hp = document.getElementById(hoverpopup);
hp.style.visibility = "Hidden";
}


 function makeMeGlow()
{  var myButton =document.getElementById('theButton');

myButton.style.background = "gold";
myButton.style.color = "white";
myButton.value = "Ride";
setTimeout('nowImGlowing()', 2000);
}

function nowImGlowing()
{  var myButton1 =document.getElementById('theButton');

myButton1.style.background = "green";
myButton1.style.color = "black";
 myButton.value = "Ride";
setTimeout('makeMeGlow()', 2000);
}


function ShowPopupDropDown(hoveritem,hoverpopup)
{

var curleft = curtop = 0;
if (hoveritem.offsetParent) {
 do {
      curleft += hoveritem.offsetLeft;
      curtop += hoveritem.offsetTop;
 } while (hoveritem = hoveritem.offsetParent);
}

hp = document.getElementById(hoverpopup);

// Set position of hover-over popup
//hp.style.top = hoveritem.offsetTop + 20;
//hp.style.left = hoveritem.offsetLeft + 30;
hp.style.top = curtop + 20;
hp.style.left = curleft;
// Set popup to visible
hp.style.visibility = "Visible";

}

</script>

<style type="text/css">


table.navbar {
   border-collapse: collapse;
}
table.navbar td {
   border: none;
}
table.navbar td a{
   display: block;
   width: 200px;
   padding: 3px;
   text-decoration: none;
}
table.navbar td a:link, table.navbar td a:visited {
   color: #FFF;
   background-color: #666666;
}
table.navbar td a:hover, table.navbar td a:active {
   color: #fff;
   background-color: #CCCCCC;
}





#navmenu ul
{
  margin: 0;
  padding: 0;
    list-style-type: none;
    list-style-image: none;
  }

#navmenu li
{
  display: inline;
}

#navmenu ul li a
{
  text-decoration:none;
  margin: 0px;
    padding: 5px 30px 5px 30px;
    color: white;
    background: black;
  }

#navmenu ul li a:hover {
  color: purple;
    background: yellow;
  }





.menu {
  margin: 0;
  padding: 0;
  list-style: none;
  background: none;
  }
  .menu li {
  padding: 0;
  margin: 0;
  height: 39px;
  margin-right: 1em;
  list-style: none;
  background-repeat: no-repeat;
  }
  .menu li a, .menu li a:visited {
  display: block;
  text-decoration: none;
  text-indent: -9999px;
  height: 39px;
  background-repeat: no-repeat;
  }
  .custom a {
         background-image: url(./images/menu/customwhite.png);
         width: 350px;
         }
  .custom  {
        background-image: url(./images/menu/customblk.png);
         width: 350px;
        }


  .kids a {
         background-image: url(./images/menu/kidswhite.png);
         width: 350px;
         }
  .kids  {
        background-image: url(./images/menu/kidsblk.png);
         width: 350px;
        }

  .videos a {
         background-image: url(./images/menu/videoswhite.png);
         width: 250px;
         }
  .videos  {
        background-image: url(./images/menu/videosblk.png);
         width: 250px;
        }

  ul.menu li a:hover {
            background: none;
            }

.menu li {float: right;}
.menu:after {content: "."; display: block; height: 0; clear: both; visibility: hidden;}



</style>
</head>
<body>
   <center>






<table>
<tr>
<td>

<div id="navmenu">
<ul>
  <li><a id="hoverover" style="cursor:default;"   onMouseOver="ShowPopupDropDown(this,'hoverpopupHomeMenu');;HidePopup('hoverpopupAnimationMenu');" href="http://www.widgetmash.com">HOME</a></li>
</ul>
</div>

</td>

<td>
<!--
<ul class="menu">
  <li class="kids"><a id="hoverover"  style="cursor:default;"  onMouseOver="HidePopup('hoverpopupHomeMenu');HidePopup('hoverpopupAnimationMenu');" href="http://www.widgetmash.com/wsearch_two_kids.php"></a></li>
  <li class="custom"><a id="hoverover"  style="cursor:default;"  onMouseOver="HidePopup('hoverpopupHomeMenu');HidePopup('hoverpopupAnimationMenu');" href="http://www.widgetmash.com/wsearch_two.php"></a></li>
  <li class="videos"><a id="hoverover"  style="cursor:default;"  onMouseOver="HidePopup('hoverpopupHomeMenu');HidePopup('hoverpopupAnimationMenu');" href="http://www.widgetmash.com/videos.php"></a></li>
</ul>
-->
</td>


<td>


<div id="navmenu">
<ul>
  <li><a id="hoverover"  style="cursor:default;"  onMouseOver="ShowPopupDropDown(this,'hoverpopupAnimationMenu');;HidePopup('hoverpopupHomeMenu');" href="http://www.widgetmash.com/freeDot.php">Animation</a></li>
</ul>
</div>

</td>
</tr>
</table>












<!-- START OF THE PLAYER EMBEDDING TO COPY-PASTE -->

  <div id="mediaplayer">JW Player goes here</div>
  </center>

  <script type="text/javascript" src="./jwplayer/jwplayer.js"></script>
  <script type="text/javascript">
    jwplayer("mediaplayer").setup({
          id: "playerID",
          width: "640",
          height: "480",
          playlist: "right",
          playlistsize: "60",
      autostart: "true",
      repeat: "always",
      // not used with modes src: "./jwplayer/player.swf",
      modes: [
      { type: "flash",
        src: "./jwplayer/player.swf",
        config: {
           playlist: [{
            file: "./video/train1.mp4",
            provider: "video",
            image: "Picture 043.jpg",
            plugins: {
                ltas: {
                  cc: "stxfgqpqjceulhd"
                }
            }
          },{
            file: "./video/RunYourselfRagged-1r.mp4",
            provider: "video",
            image: "./jwplayer/ragged.jpg",
            plugins: {
                ltas: {
                  cc: "stxfgqpqjceulhd"
                }
            }
          }]
        }
      },

      { type: "html5",
        config: {
          playlist: [{
            file: "./video/train1.mp4",
            provider: "video",
            image: "Picture 043.jpg",
            plugins: {
                ltas: {
                  cc: "stxfgqpqjceulhd"
                }
            }
          },{
            file: "./video/RunYourselfRagged-1r.mp4",
            provider: "video",
            image: "./jwplayer/ragged.jpg",
            plugins: {
                ltas: {
                  cc: "stxfgqpqjceulhd"
                }
            }
          }]
        }
      },

      { type: "download",
        config: {
          playlist: [{
            file: "./video/train1.mp4",
            provider: "video",
            image: "Picture 043.jpg" //train track
          },{
            file: "./video/RunYourselfRagged-1r.mp4",
            provider: "video",
            image: "./jwplayer/ragged.jpg"
          }]
        }
      }
      ]
    });
  </script>
  <!-- END OF THE PLAYER EMBEDDING -->


</body>
</html>