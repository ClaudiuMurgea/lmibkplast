<div class='d-flex flex-column main-page'>
    <!-- <iframe style="height:300px !important;min-width:100%;" src="http://10.109.254.122/PlayerJPNou/CC/progress_bar/MasterOnlyAutoCardProgress.php?PID=44" 
        title="W3Schools Free Online Web Tutorials"></iframe> -->
    @if($list)
    <div style="margin-top:1rem" class='jackpot-btn-wrap'>
        @for ($i = 1; $i < 55; $i++)
            <div wire:click="showJackpot({{ $i }})">
                <div style="text-align:center; padding-bottom:0; margin:0">
                    <img style="margin:0" class='mt-2 jackpot-btn' id='jackpot-btn{{$i}}' src='/img/jackpot-btn.png'>
                </div>
                <p style="display:block; text-align:center; padding-top:0;color: #fff; opacity:0.9;" class='text-center'>Jackpot {{ $i }}</p>
            </div>
        @endfor
    </div>
    @endif
    @if(!$list)
        @livewire('pages.show-jackpot',       ['id' => '1' ])
    @endif
</div>