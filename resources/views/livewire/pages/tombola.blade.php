<div class='d-flex flex-column max_height overflow main-page tombola-page'>

    <div class="custom_title">Tombola</div>

    <div class="plifscroll">
        <!-- content -->
    </div>

    <div class="padding_bottom">
        &nbsp;
    </div>

    <script>
        var market = document.getElementsByClassName('tombola-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("div.plifscroll").style.paddingLeft= "16px"; 
            document.querySelector("div.arrow").style.display= "block"; 
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>
</div>
