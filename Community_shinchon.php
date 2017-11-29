<!DOCTYPE html>
<html>
    <head>
    <title>lightSlider Demo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="css/lightslider.css"/>
    <style>
    	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    background-color: gray;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
		.demo{
			width: 800px;
		}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script>

    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
              	auto:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
		});
    </script>
</head>
<body>

        <div class="item" >
            <ul id="content-slider" class="content-slider">
                <li>
                  <a href="shinchon.html">
                        <img src="shinchon.jpg" alt="f99c0ec1a69421d7e245ff57e4427b82.jpg" width="250" height="250" style="" />
                  </a>
                </li>
                <li>
                  <a href="http://www.sayul.org/xe/sayul_eng">
                    <img src="gungi.jpg" alt="1.jpg" width="250" height="250" style="" /></a>
                </li>
                <li>
                  <a href="http://www.sayul.org/xe/KN_eng">
                          <img src="anam.jpg" alt="2.jpg" width="250" height="250" style="" />
                        </a>
                    </h3>
                </li>
                <li>
                  <a href="http://www.sayul.org/xe/KN_eng">
                        <img src="gawnak.jpg" alt="3.jpg" width="250" height="250" style="" >
                  </a>
                </li>

            </ul>
        </div>

    </div>
</body>
