<script type="text/javascript">
    function getImg(event) {
        const imgPre = document.querySelector(".img-pre");
        const src = URL.createObjectURL(event.target.files[0]);
        imgPre.src = src;
    }
</script>
