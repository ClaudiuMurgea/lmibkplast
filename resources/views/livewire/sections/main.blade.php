<div class='container-fluid px-0 d-flex flex-column overflow'>
    @switch($component)
        @case('market')
            <livewire:pages.market      :user="1" :wire:key="1">
        @break
        @case('jackpots')
            <livewire:pages.jackpots    :user="1" :wire:key="2">
        @break
        @case('single-jackpot')
            <livewire:pages.show-jackpot :ids="$jackpot" :wire:key="11">
        @break
        @case('bonus')
            <livewire:pages.bonus       :user="1" :wire:key="3">
        @break
        @case('cashout')
            <livewire:pages.cashout     :user="1" :wire:key="4">
        @break
        @case('news')
            <livewire:pages.news        :user="1" :wire:key="5">
        @break
        @case('quest')
            <livewire:pages.quest       :user="1" :wire:key="6">
        @break
        @case('pyramid')
            <livewire:pages.pyramid     :user="1" :wire:key="7">
        @break
        @case('tombola')
            <livewire:pages.tombola     :user="1" :wire:key="8">
        @break
        @case('autolevel')
            <livewire:pages.autolevel   :user="1" :wire:key="9">
        @break
        @case('okto')
            <livewire:pages.okto        :user="1" :wire:key="10">
        @break
        @default
            <livewire:pages.jackpots    :user="1" :wire:key="222">
    @endswitch

    <div class='container-fluid px-0'>
        <div style="width:100px;" class="c">
            <input style="display:none;" type="checkbox" id="faq-1" class="input" @if($slideActive) checked @endif>
            <h5 style="display:flex; align-items: center;margin-bottom:15px;position:relative;">
                {{-- border:2px solid #fff; outline:1px solid #ccc --}}
            @if($showBack)
                <button wire:click="back" class="custom-btn font_size-1-2"> 
                    <img style="height:20px;width:20px;margin:0 auto;margin-bottom:2px;" src='slide-images/back.png'>
                    Back
                </button>
            @endif 
            <label for="faq-1" class="px-2 menu_button dark_text font_size-1-2"> Menu </label></h5>
            <div style="width:100vw !important;" class="p">
                <div class='container-fluid d-flex justify-content-between align-items-center text-light' id='navbar' wire:ignore>
                    <div class="MultiCarousel" data-items="2, 4, 5, 6" data-slide="2" id="MultiCarousel"  data-interval="1000">
                        <div style="background: #222222;font-weight:600;font-size:1.1rem" class="MultiCarousel-inner">
                            <div class="item" wire:click="ShowComponent('jackpots')">     <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/jackpot.png'>  Jackpots    </div>
                            <div class="item" wire:click="ShowComponent('bonus')">        <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/bonus.png'>    Bonus       </div>
                            <div class="item" wire:click="ShowComponent('cashout')">      <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/cashout.png'>  Cashout     </div>
                            <div class="item" wire:click="ShowComponent('news')">         <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/news.png'>     News        </div>
                            <div class="item" wire:click="ShowComponent('quest')">        <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/mission.png'>  Quest       </div>
                            <div class="item" wire:click="ShowComponent('pyramid')">      <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/pyramid.png'>  Pyramid     </div>
                            <div class="item" wire:click="ShowComponent('tombola')">      <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/raffle.png'>   Tombola     </div>
                            <div style="position:relative;" class="item" wire:click="ShowComponent('market')">       <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/shop.png'>    
                                <div style="position:absolute;left:24%;background:transparent;" wire:loading wire:target="ShowComponent('market')">
                                    <x-loading/>
                                </div>
                                Market      
                            </div>
                            <div class="item" wire:click="ShowComponent('okto')">         <img style="height:35px;width:35px;margin:0.8rem auto;" src='slide-images/oktoqr.png'>  Okto    </div>
                            <div class="item" wire:click="ShowComponent('autolevel')">    <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/ranking.png'>  Auto Level  </div>
                        </div>
                        <img class="leftLst default_outline"  src='slide-images/left-arrow.png'>
                        <img class="rightLst default_outline" src='slide-images/right-arrow.png'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="arrow" wire:ignore>
    <span></span>
    <span></span>
    <span></span>
</div>
<script>
    var article = document.getElementsByClassName('main-page')[0]; 
    var screenHeight = window.innerHeight;
    var scrollTop = document.querySelector("div.arrow").scrollTop;
    if (article.scrollHeight > screenHeight) { 
        document.querySelector("div.arrow").style.display = "block"; 
    }
</script>
<script>
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
</script>
<script>
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
</script>
