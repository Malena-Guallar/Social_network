<video id="bg_video" autoplay loop muted>
    <source src="./assets/clouds.mp4" type="video/mp4">
</video>
<script>
    let video = document.getElementById('bg_video')
    function decrease (video) {
        video.playbackRate = 0.75;
    }
    decrease(video);
</script>