<div class='container-fluid px-0 d-flex flex-column'>3
    @switch($component)
        @case('market')
            <livewire:pages.market :user="1" :wire:key="1">
        @break
        @case('jackpots')
            <livewire:pages.jackpots :user="1" :wire:key="2">
        @break
        @case('bonus')
            <livewire:pages.bonus :user="1" :wire:key="3">
        @break
        @case('cashout')
            <livewire:pages.cashout :user="1" :wire:key="4">
        @break
        @case('news')
            <livewire:pages.news :user="1" :wire:key="5">
        @break
        @case('quest')
            <livewire:pages.quest :user="1" :wire:key="6">
        @break
        @case('pyramid')
            <livewire:pages.pyramid :user="1" :wire:key="7">
        @break
        @case('tombola')
            <livewire:pages.tombola :user="1" :wire:key="8">
        @break
        @case('settings')
            <livewire:pages.settings :user="1" :wire:key="9">
        @break
        @default
            <livewire:pages.jackpots :user="1" :wire:key="2">
    @endswitch

    <div class='container-fluid px-0 hide'>
        <div style="width:100px; right:45;" class="c">
            <input style="display:none;" type="checkbox" id="faq-1" checked>
            <h5 style="display:flex; align-items: center;margin-bottom:15px;">
            @if($showBack)
                <button wire:click="back('{{ $showThis }}' )" style="position:absolute;left:1%;bottom:1%;text-shadow: 1px 1px #7c7c7c;" class="custom-btn btn-6">Back</button>
            @endif
            <label for="faq-1" style="text-shadow: 1px 1px #7c7c7c; color: #fff"> Menu</label></h5>
            <div style="width:100vw !important;" class="p">
                <div class='container-fluid d-flex justify-content-between align-items-center text-light ' id='navbar' wire:ignore>
                    <div class="MultiCarousel" data-items="2, 4, 5, 6" data-slide="3" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <div class="item" wire:click="ShowComponent('jackpots')">     <img src='img/jackpot.png'>     </div>
                            <div class="item" wire:click="ShowComponent('bonus')">        <img src='img/bonus.png'>       </div>
                            <div class="item" wire:click="ShowComponent('cashout')">      <img src='img/cashout.png'>     </div>
                            <div class="item" wire:click="ShowComponent('news')">         <img src='img/news.png'>        </div>
                            <div class="item" wire:click="ShowComponent('quest')">        <img src='img/quest.png'>       </div>
                            <div class="item" wire:click="ShowComponent('pyramid')">      <img src='img/pyramid.png'>     </div>
                            <div class="item" wire:click="ShowComponent('tombola')">      <img src='img/tombola.png'>     </div>
                            <div class="item" wire:click="ShowComponent('market')">       <img src='img/market.png'>      </div>
                            <div class="item" wire:click="ShowComponent('settings')">     <img src='img/settings.png'>    </div>
                        </div>
                        <img style="outline: 2px solid #00ff00;" class="leftLst" src='img/left-arrow.png'>
                        <img style="outline: 2px solid #00ff00;" class="rightLst" src='img/right-arrow.png'>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>
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

        // if ($(ell).last()) {
        //         $(ell).addClass("active");
        // }
        // else if($(el).last()) {
        //     console.log(el+1);
        // }
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
