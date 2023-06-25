<footer class="d-flex jstfy-center position-relative container">
    <div class="center_part ">
        <nav>
            <ul class="d-flex align-centr jstfy-around">
                <a href="/">Home</a>
                <span class="vertical_line"></span>
                <a href="./watches.php">Watches</a>
                <span class="vertical_line"></span>
                <a href="./accessories.php">Accessories</a>
                <span class="vertical_line"></span>
                <a href="./about-us.php">About Us</a>
                <span class="vertical_line"></span>
                <a href="./contact.php">Contact</a>
            </ul>
        </nav>
        <div class="contact_link">
            <div class="main_links d-flex jstfy-center">
                <a href="mailto:client@wilshiretime.com"><img src="./images/mail.svg" alt="">
                    client@wilshiretime.com</a>
            </div>

            <img src="./images/Payments.png" class="payments_method" alt="">

            <p class="copyright">&copy; Wilshire Timepieces | 2020 </p>
        </div>

        <div class="logo_block">
            <img class="logo_footer" src="./images/icon_usp.png" alt="">
            <div class="around_logo_footer">
                <a href="https://www.instagram.com/wilshiretime/" target="_blank">
                    <img src="./images/inst.png" alt="">
                    <p>@wilshiretime</p>
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    document.getElementById('burger').addEventListener('click', function() {
        document.getElementById('burger').classList.toggle('active');
        document.getElementById('mobile-menu-overflow').classList.toggle('active');
        document.getElementById('mobile-menu').classList.toggle('active');
    });

    document.getElementById('mobile-menu-overflow').addEventListener('click', function() {
        document.getElementById('burger').classList.toggle('active');
        document.getElementById('mobile-menu-overflow').classList.toggle('active');
        document.getElementById('mobile-menu').classList.toggle('active');
    });
</script>
<script>
    <?php if ($_SERVER['REQUEST_URI'] === '/') { ?>
        let LOGOWHITE = './images/wording.png';
        let LOGOBLACK = './images/logo-black.png';
    <?php } else { ?>
        let LOGOWHITE = './images/logo-black-mini.png';
        let LOGOBLACK = './images/logo-black-mini.png';
    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] !== '/') { ?>
        $('#first-block').css({
            'padding-top': $('#headerAnim').outerHeight() + 'px'
        })
    <?php } ?>
    function makeHeaderDynamic() {
        if ($(window).scrollTop() >= 28 && $(window).scrollTop() < 40) {
            $('#headerAnim').addClass('moved');
            $('#headerAnim').removeClass('moved-between');
            $('.logo-part img').attr('src', LOGOBLACK)
        } else if ($(window).scrollTop() >= 40) {
            $('#headerAnim').addClass('moved-between')
            $('.logo-part img').attr('src', LOGOBLACK)
            $('#headerAnim').addClass('moved');
        } else {
            $('#headerAnim').removeClass('moved');
            $('.logo-part img').attr('src', LOGOWHITE)
            $('#headerAnim').removeClass('moved-between');
        }
    }
    function makeHeaderStatic() {
        $('#headerAnim').addClass('moved moved-between');
        $('.logo-part img').attr('src', './images/logo-black.png')
    }

    if ($(window).width() > 1024){
        makeHeaderDynamic();
    } else {
        makeHeaderStatic();
    }
    $(window).scroll(function() {
        if ($(window).width() > 1024){
            makeHeaderDynamic();
        }
    });
    $(window).on('orientationchange', function() {
        if ($(window).width() > 1024) {
            makeHeaderDynamic();
        } else {
            makeHeaderStatic();
        }
    })
</script>