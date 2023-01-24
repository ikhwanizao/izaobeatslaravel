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
    {{-- <section> --}}
    <div class="container">
        <div class="half-left">
            <div class="homepage">
                <i class="fa-solid fa-xs fa-arrow-left"></i><a href="{{ url('/') }}">Home</a>
            
            </div>
            <form>
                <div class="title">Write us</div>
                <label for="name"></label>
                <input type="text" id="name" placeholder="Name" class="no-outline" autocomplete="off"/>
                <label for="email"></label>
                <input type="text" id="email" placeholder="Your Email Address" class="no-outline" autocomplete="off"/>
                <label for="subject"></label>
                <input type="email" id="subject" placeholder="Subject" class="no-outline" autocomplete="off"/>
                <textarea id="message" name="message" rows="5" cols="33" placeholder="Message" class="no-outline"></textarea>
                <button>Send Message</button>
            </form>
        </div>

        <div class="half-right">
                <div class="contactinfo-title"><strong>Contact Information</strong></div>
                <div class="contactinfo-desc">Looking for beats? Contact me for a great deal.</div>

                <div class="contact-infos">
                    <div class="contactinfo-withicon">
                        <div class="contact-icon"><i class="fa-regular fa-envelope"></i></div>
                        <div class="contact-email"><strong>Email: </strong>ikhwanm32@gmail.com</div>
                    </div>
                    <div class="contactinfo-withicon">
                        <div class="contact-icon"><i class="fa-brands fa-lg fa-instagram"></i></div>
                        <div class="contact-instagram"><strong>Instagram: </strong><a target="_blank" href="https://www.instagram.com/izao.00/">@@izao.00</a></div>
                    </div>
                    <div class="contactinfo-withicon">
                        <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="contact-phone"><strong>Phone: </strong>+601112503902</div>
                    </div>
                </div>
        </div>
    </div>
    {{-- </section> --}}
</body>

</html>
