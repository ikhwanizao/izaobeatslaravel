<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" type="text/css" />
    <script src="https://kit.fontawesome.com/2cb74c4ba3.js" crossorigin="anonymous"></script>
    <title>Contact IZAO</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="half-left">
                <form>
                    <div class="title">Write us</div>
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="Name" class="no-outline" autocomplete="off"/>
                    <label for="email"></label>
                    <input type="text" id="email" placeholder="Email" class="no-outline" autocomplete="off"/>
                    <label for="subject"></label>
                    <input type="email" id="subject" placeholder="Subject" class="no-outline" autocomplete="off"/>
                    <textarea id="message" name="message" rows="5" cols="33" placeholder="Message" class="no-outline"></textarea>
                    <button>Send Message</button>
                </form>
            </div>

            <div class="half-right">
                    <div class="contactinfo-title"><strong>Contact Information</strong></div>
                    <div class="contactinfo-desc">Looking for great beats? Contact me for a great deal.</div>

                    <div class="contact-infos">
                        <div class="contactinfo-withicon">
                            <div class="contact-icon"><i class="fa-regular fa-envelope"></i></div>
                            <div class="contact-email"><strong>Email: </strong>ikhwanm32@gmail.com</div>
                        </div>
                        <div class="contactinfo-withicon">
                            <div class="contact-icon"><i class="fa-brands fa-instagram"></i></div>
                            <div class="contact-instagram"><strong>Instagram: </strong>@izao.00</div>
                        </div>
                        <div class="contactinfo-withicon">
                            <div class="contact-icon"><i class="fa-brands fa-whatsapp"></i></div>
                            <div class="contact-website"><strong>Phone: </strong>+601112503902</div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</body>

</html>
