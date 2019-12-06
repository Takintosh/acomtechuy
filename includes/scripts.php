<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script async src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- Preloader Script -->
<script>
    $(document).ready(function() {
        $(".preloader").fadeOut()
    });
</script>

<!-- Sticky Menu on scroll -->
<script async>
    var ww = document.body.clientWidth;
    if (ww > 992) {
        window.onscroll = function() {
            stickyMenu()
        };
        var navbar = document.getElementById("navbar"),
            sticky = navbar.offsetTop;

        function stickyMenu() {
            window.pageYOffset >= sticky ? navbar.classList.add("sticky") : navbar.classList.remove("sticky")
        }
    }
</script>

<!-- Arrow Script -->
<script async>
    $(function() {
        $('a[href*="#servicio"]').click(function() {
            var o = $(this.hash);
            o.length && $("html, body").animate({
                scrollTop: o.offset().top - 50
            }, 1500)
        })
    });
</script>