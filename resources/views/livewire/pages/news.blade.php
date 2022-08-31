<div class='d-flex flex-column max_height overflow main-page news-page'>

    <div class="custom_title">News</div>

    <div style="margin-top:2rem;" class="max_width">
        <div style="border-radius:10px !important;" class="card">
            <div class="card-header pb-0">
                <h5 class="text-center max_width">Title</h5>
                <ul class="list-unstyled setting-option">
                    <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                    <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                </ul>
                </div>
                <div class="card-body">
                    <p><span>   Title</span></p>
                    <p>         Information </p>
                    <p><span>   Details</span></p>
                    <p>
                                Extra information / Consequences
                    </p>
                <div class="alert alert-success inverse" role="alert">
                    <i class="icon-info-alt"></i>
                    <h5 style="width:90%; margin:0 auto;" class="text-center">Important!</h5>
                    <p>Reminder</p>
                </div>
                <div style="width:100%; text-align:center;">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 style="width:90%; margin:0 auto;" class="text-center">Updates Title</h5>
                            <ul class="list-unstyled setting-option">
                                <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>
                                Update body - Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="padding_bottom">
        &nbsp;
    </div>
    
    <script>
        var market = document.getElementsByClassName('news-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("div.plifscroll").style.paddingLeft= "16px"; 
            document.querySelector("div.arrow").style.display= "block"; 
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>
</div>
