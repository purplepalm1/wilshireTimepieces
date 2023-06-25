<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Wilshire Timepieces</title>
    <link rel="stylesheet" href="./styles/main.css?2">
    <link rel="stylesheet" href="./styles/our-story.css?224">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Wilshire Timepieces">
    <meta property="og:description" content="Wilshire Timepieces watches are inspired by the halcyon era of watchmaking, when bold colours and contrasting textures were combined with the very best craftsmanship.">
    <?php require_once './header.php'; ?>
    <div class="bg-wht" id="first-block">
        <section class="media-block media_contact-us">
            <img src="./images/watchmaker.jpg" alt="">
            <p>Contact Us</p>
        </section>
        <section class="text-block container">
            <div class="h3">We will be in touch shortly</div>
            <form action="" method="POST" id="ajax_form">
                <div class="row_inputs">
                    <label for="">Full Name:
                        <input type="text" required autocomplete="off" name="full_name">
                    </label>
                    <label for="">Email:
                        <input type="email" name="email" placeholder="example@mail.com" autocomplete="off" required id="">
                    </label>
                </div>
                <textarea name="message" id="" placeholder="How can we help you?" required></textarea>
                <button type="submit" id="btn_submit_form" class="btn">Send Message</button>
            </form>
        </section>
    </div>
    <style type="text/css">
        .modal_footer_overflow.inactive {
            display: none;
        }

        .modal_footer_overflow {
            position: fixed;
            cursor: pointer;
            z-index: 112;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(9, 9, 9, 0.712);
        }

        .modal_footer_overflow>.modal_footer_content {
            position: relative;
            left: 50%;
            cursor: default;
            padding: 2vw;
            top: 50%;
            width: 25vw;
            height: fit-content;
            background: #fff;
            z-index: 113;
            transform: translate(-50%, -50%);
        }

        .modal_footer_content>.close_modal_footer {
            position: absolute;
            right: 3%;
            top: 3%;
            cursor: pointer;
            color: #000;
        }

        #result_footer_form {
            color: #000;
            text-align: center;
            font-size: 1.6vw;
        }

        @media(max-width:1024px) {
            .modal_footer_overflow>.modal_footer_content {
                padding: 2vw;
                width: 50vw;
            }

            .modal_footer_content>.close_modal_footer {
                font-size: 3vw;
                top: 4%;
            }

            #result_footer_form {
                font-size: 3vw;
            }
        }

        @media(max-width:500px) {
            .modal_footer_overflow>.modal_footer_content {
                padding: 6vw;
                width: 80vw;
            }

            .modal_footer_content>.close_modal_footer {
                right: 3%;
                font-size: 5vw;
                top: 2%;
            }

            #result_footer_form {
                color: white;
                text-align: center;
                font-size: 5.6vw;
            }
        }

        #btn_submit_form.btn_active {
            cursor: not-allowed;
        }
    </style>
    <div class="modal_footer_overflow inactive">
        <div class="modal_footer_content">
            <div class="close_modal_footer" onclick="ClickFooter();">X</div>
            <p id="result_footer_form"></p>
        </div>
    </div>
    <?php include './footer.php'; ?>
    <script>
        ClickFooter = function() {
            $('.modal_footer_overflow').toggleClass('inactive')
        };

        $('.modal_footer_overflow').click(function(e) {
            if (e.target !== this) {
                return;
            } else {
                $('.modal_footer_overflow').toggleClass('inactive')
            }
        });

        $("#ajax_form").submit(
            function(e) {
                e.preventDefault();
                if ($('#btn_submit_form').hasClass('btn_active')) {
                    return false;
                }
                $('#btn_submit_form').addClass('btn_active');
                $('#btn_submit_form').text('Processing..')
                sendAjaxForm2('result_footer_form', 'ajax_form', './sendMail.php');
                return false;
            }
        );

        function sendAjaxForm2(result_form, ajax_form, url) {
            $.ajax({
                url: url,
                type: "POST",
                data: $("#" + ajax_form).serialize(),
                success: function(response) {
                    if (response) {
                        $('.modal_footer_overflow').toggleClass('inactive');
                        $('#result_footer_form').html('<span>Message sent!</span><br>We will get back to you shortly');
                        $('#btn_submit_form').text('Success!')
                    } else {
                        $('.modal_footer_overflow').toggleClass('inactive');
                        $('#result_footer_form').html('<span>Some problems..</span><br> Please contact us directly');
                        $('#btn_submit_form').text('Send Message')
                    }
                },
                error: function(response) {
                    $('.modal_footer_overflow').toggleClass('inactive');
                    $('#result_footer_form').html('<span>Some problems..</span><br> Please contact us directly');
                    $('#btn_submit_form').text('Send Message')
                }
            });
        }
    </script>

    </body>

</html>