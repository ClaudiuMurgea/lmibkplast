<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" integrity="sha512-oL84kLQMEPIS350nZEpvFH1whU0HHGNUDq/X3WBdDAvKP7jn06gHTsCsymsoPYKF/duN8ZxzzvQgOaaZSgcYtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Icons for Chevron -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/carousel.css') }}">
        <style>
            .MultiCarousel {
    float: left;
    overflow: hidden;
    width: 100%;
    /* position:relative; */
    margin: 0px 60px;
}

.MultiCarousel .MultiCarousel-inner {
    transition: 1s ease all;
    float: left;
}

.MultiCarousel .MultiCarousel-inner .item {
    float: left;
}

.MultiCarousel .MultiCarousel-inner .item > div {
     text-align: center;
     padding:10px;
     margin:10px;
     background:#f1f1f1;
     color:#666;
}

.MultiCarousel .leftLst, .MultiCarousel .rightLst {
    position:absolute;
    border-radius:50%;
    /* top:calc(50% - 20px); */
    bottom:25px;
    width:50px !important;
    height: 50px !important;
    box-shadow: 0px 0px 30px #444;
}

 .leftLst {
    left:10px;
}

.rightLst {
    right:10px;
}

.MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over {
    pointer-events: none;
    background:#ccc;
}


.item{
    display: flex;
    justify-content: center;
}

.item:not(.selected){
    border:4px solid transparent;
    border-radius: 10px;
    margin:5px 0px !important;
}


.selected{
    border:4px solid crimson;
    border-radius: 10px;
    margin:5px 0px;
}
h2{
    margin: 0px;
}

img:not(.left-arrow img, .right-arrow img, .header-img){
    width: 75px;
    height: 75px;
    margin:3px 0px;
}

.left-arrow img, .right-arrow img{
    width:50px;
    height: 50px;
}


.header-img{
    width: 25px !important;
    height: 25px !important;
}

table{
    font-size: 21px;
    margin-bottom: 0px !important;
}

.mybtn{
    width: 200px;
    color:white;
    border:none;
    background-color: rgba(5, 5, 5);
    border-radius: 10px 10px 0px 0px;
    margin:5px 0px 0px 0px;
}

.handlebar-nav{
    border:1px solid black;
    border-bottom: none;
    border-radius: 15px 15px 0px 0px;
    background-color: #212529 !important;
    color:white;
    margin-bottom: -1px;
    padding: 3px 0px;
    z-index: 5;
}

#header{
    border-radius: 0px 0px 20px 20px;
    margin-bottom: 13px;
    box-shadow: 0px 0px 10px 4px #222;
}

#main-page{
    overflow-y: scroll;
    padding:0px 30px;
}

#navbar{
    background-color: #212529 !important;
    box-shadow: 0px 0px 15px 1px #222;
    border-top: 1px solid black;
    position: relative;
}

 ::-webkit-scrollbar {
    width: 5px;
  }

  ::-webkit-scrollbar-thumb {
    background: orange;
    border-radius: 20px;
  }

  .jackpot-btn-wrap{
    display:flex;
  }

  .jackpot-table{
    display:none;
  }
div.c{
  position: relative;
  position:absolute; 
  bottom:0;
}
input{
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  opacity:0;
  visibility: 0;
}
h5{
  color:green;
  padding:0;
  position: relative;
  width:100vw;
  display:flex;
  justify-content: center;
}
label::before{
  content:"";
  display: inline-block;
  border: 15px solid transparent;
  border-left:20px solid green;
}
label{
  cursor: pointer;
  position: relative;
  display: flex;
  align-items: center;
  margin:0 auto;
}
div.p{
  max-height:0px;
  overflow: hidden;
  transition:max-height 0.5s;
  background-color: white;
  box-shadow:0 0 10px 0 rgba(0, 0, 0, 0.2);
}
div.p p {
  padding:2em;
}
input:checked ~ h5 label::before{
  border-left:15px solid transparent;
  border-top:20px solid green;
  margin-top:12px;
  margin-right:10px;
}
input:checked ~ h5 ~ div.p{
  max-height:100px;
}
/* a{
  color:steelblue;
} */

body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
</style>
    <title>Document</title>
</head>
<body>
    <div style="width:100px; right:45;" class="c">
        <input type="checkbox" id="faq-1">
        <h5><label for="faq-1">Menu</label></h5>
        <div style="width:100vw !important;" class="p">
            <div class='container-fluid d-flex justify-content-between align-items-center text-light ' id='navbar'>
                <div class="MultiCarousel" data-items="2, 4, 5, 6" data-slide="3" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item selected"><img src='img/jackpot.png'></div>
                        <div class="item"><img src='img/bonus.png'></div>
                        <div class="item"><img src='img/cashout.png'></div>
                        <div class="item"><img src='img/news.png'></div>
                        <div class="item"><img src='img/quest.png'></div>
                        <div class="item"><img src='img/pyramid.png'></div>
                        <div class="item"><img src='img/tombola.png'></div>
                        <div class="item"><img src='img/market.png'></div>
                        <div class="item"><img src='img/settings.png'></div>
                    </div>
                    <img class="leftLst" src='img/left-arrow.png'>
                    <img class="rightLst" src='img/right-arrow.png'>
                </div>
            </div>
        </div>
    </div>

        <!-- <div class="c">
            <input type="checkbox" id="faq-2">
            <h1><label for="faq-2">With Pure Css ?</label></h1>
            <div class="p">
                <p>Yes with pure CSS and HTML.</p>
            </div>
        </div> -->

    <!-- NAVBAR -->
    <!-- <div class='container-fluid px-0 d-flex flex-column align-items-center'>
                <div class='w-25 mt-2 d-flex justify-content-center handlebar-nav shadow-lg'>
                    <p class='m-0 p-0' style='font-weight:bold'>Hide</p>
                </div>
                <div class='container-fluid d-flex justify-content-between align-items-center text-light ' id='navbar'>
                    <div class="MultiCarousel" data-items="2, 4, 5, 6" data-slide="3" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <div class="item selected"><img src='img/jackpot.png'></div>
                            <div class="item"><img src='img/bonus.png'></div>
                            <div class="item"><img src='img/cashout.png'></div>
                            <div class="item"><img src='img/news.png'></div>
                            <div class="item"><img src='img/quest.png'></div>
                            <div class="item"><img src='img/pyramid.png'></div>
                            <div class="item"><img src='img/tombola.png'></div>
                            <div class="item"><img src='img/market.png'></div>
                            <div class="item"><img src='img/settings.png'></div>
                        </div>
                        <img class="leftLst" src='img/left-arrow.png'>
                        <img class="rightLst" src='img/right-arrow.png'>
                    </div>
                </div>
            </div> -->
            <script>
   $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }
    $('.handlebar-nav').click(function(){
        if ($('.handlebar-nav p').text() == 'Hide'){
            $('#navbar').animate({marginBottom:'-100px'},function(){
                $(this).attr('style','display: none !important');
            });
            $('.handlebar-nav p').text('Show');
        }
        else{
            $('#navbar').attr('style','display: flex !important; margin-bottom:-100px');
            $('#navbar').animate({marginBottom:'0px'});
            $('.handlebar-nav p').text('Hide');
        }
    });



    $('.item').click(function(){
        $('.item').removeClass('selected');
        $(this).addClass('selected');
        $('#main-page').fadeOut(function(){
            $('#main-page').fadeIn();
        });
    });



    $('.jackpot-btn').click(function(){
        console.log($(this).attr('id'));
        $('.jackpot-btn-wrap').fadeOut(function(){
            $('.jackpot-table').fadeIn();
        });

    });


    $('.back-btn').click(function(){
        $('.jackpot-table').fadeOut(function(){
            $('.jackpot-btn-wrap').fadeIn();
        });
    })
});

</script>

</body>
</html>