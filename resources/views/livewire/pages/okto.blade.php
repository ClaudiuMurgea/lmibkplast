<div class='d-flex flex-column max_height overflow main-page okto-page'>

    <div class="custom_title">Okto</div>

    <div style="margin:0 auto;width:256px;padding-top:2rem" class="plifscroll">
        {!! QrCode::size(256)->generate("$encoded") !!}
    </div>

    <div class="padding_bottom">
        &nbsp;
    </div>

    <script>
        var market = document.getElementsByClassName('okto-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("div.plifscroll").style.paddingLeft= "16px"; 
            document.querySelector("div.arrow").style.display= "block"; 
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>
</div>
