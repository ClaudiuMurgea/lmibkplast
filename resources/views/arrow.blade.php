<div class="arrow">
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