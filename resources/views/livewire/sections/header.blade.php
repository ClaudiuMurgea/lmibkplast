<div class='container-fluid d-flex justify-content-between align-items-center py-1 text-light' id='header'>
    <div class='d-flex'>
        <!-- <div class='d-flex align-items-center'>
            <img src='header-images/id.png' class='header-img mx-2'>
            <h4 style="display:block; max-width:95px; overflow:hidden;margin-bottom: 0 !important;">853258</h4>
        </div> -->
        <div class='d-flex align-items-center'>
            <img src='header-images/user.png' class='header-img mx-1'>
            <h4 class="dark_text header_info">{{ $this->name }}</h4>
        </div>
        </div>
        <div class='d-flex align-items-center'>
            <img style="margin-top:0 !important;margin-bottom:2px;" src='header-images/star.png' class='header-img mx-1'>
            <h4 class="dark_text header_info header_points">{{ $points }}</h4>
        </div>
    </div>
</div>
