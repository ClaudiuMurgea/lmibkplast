<div style="height:88vh;width:100%;overflow-y:scroll;padding-bottom:3rem;padding-left:10px;" class='w-100 d-flex flex-column main-page'>
    <div style="position:absolute; top:2%; index: 1000; left:46%; color: #fff;">
        Pyramid
    </div>
    <div class='jackpot-btn-wrap'>
        @for ($i = 1; $i < 55; $i++)
            <div wire:click="showJackpot({{ $i }})">
                <div style="text-align:center; padding-bottom:0; margin-bottom:0;">
                    <img style="margin-bottom:0;" class='mt-2 jackpot-btn' id='jackpot-btn{{$i}}' src='/img/jackpot-btn.png'>
                </div>
                <p style="display:block; text-align:center; padding-top:0;color: #fff; opacity:0.9;" class='text-center'>Jackpot {{ $i }}</p>
            </div>
        @endfor
    </div>
</div>
