<div class='d-flex flex-column max_height overflow main-page bonus-page'>
    
    <div class="custom_title">Bonus</div>

    <div style="margin-top:2rem;" class="max_width d-flex plifscroll">
        <div class="bonus_left">
            @include('shape')
            Redeemed today
        </div>
        <div class="bonus_right">
        0
        </div>
    </div>

    <div class="max_width d-flex mt-3">
        <div class="bonus_left">
            @include('shape')
            Collected today
        </div>
        <div class="bonus_right">
        0
        </div>
    </div>
    
    <div class="max_width d-flex mt-3">
        <div class="bonus_left">
            @include('shape')
            Redeemed current month
        </div>
        <div class="bonus_right">
        0
        </div>
    </div>

    <div class="max_width d-flex mt-3">
        <div class="bonus_left">
            @include('shape')
            Collected current month
        </div>
        <div class="bonus_right">
        0
        </div>
    </div>

    <div class="max_width d-flex mt-3">
        <div class="bonus_left">
            @include('shape')
            All points collected
        </div>
        <div class="bonus_right">
        10.000
        </div>
    </div>

    <div class="padding_bottom">
        &nbsp;
    </div>

    <script>
        var market = document.getElementsByClassName('bonus-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("div.arrow").style.display= "block"; 
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>
</div>