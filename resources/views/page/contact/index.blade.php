@extends('components.master')
@section('title', 'CONTACT')

@section('container')
    <div class="sections_wrapper ">


        <section class="title_text header_padding">
            <div class="_wrapper title_style">HIT US UP, WE'LL REPLY<br />WHEN WE'RE SOBER.</div>
        </section>
        <section class="container_form _grow spaceBottom">
            <div class="_form_wrapper">
                <form id="contact-form" method="post" class="_wrapper contact_style">
                    <input type="hidden" name="email" id="email">
                    <input name="_name" class="name" placeholder="Name" type="text">
                    <input name="_email" class="email" placeholder="E-mail" type="email">
                    <input name="_subject" class="subject" placeholder="Subject" type="text">
                    <textarea name="_content" class="content" placeholder="What's up?"></textarea>
                    <input class="send" type="submit" name="send" id="btn-send-contact" value="SEND">
                    <div class="error_wrapper hidden">
                        Error Message
                    </div>
                </form>

                <div class="_wrapper address">
                    <div class="address_title_small">BIKO'S HIDEOUT</div>
                    <div class="street_address">
                        <p>Jl. Haji Junaedi No 7A</p>
                        <p>Cipete Selatan, Jakarta Selatan</p>
                        <p>021 7590 7744</p>
                    </div>
                </div>

            </div>
        </section>
        <footer class="">
            <div class="footer_wrapper">
                <form class="footer_subscribe">
                    <div class="fs_respond hide"></div>
                    <div class="fs_label">BE IN OUR INNER CIRCLE!</div>
                    <input class="fs_input" id="subs_email" placeholder="enter your e-mail address" type="email">
                    <input id="footerSubmit" class="fs_submit" type="submit" value="I WANT IN!" d-value="I WANT IN!"
                        m-value="SUBSCRIBE">
                </form>
                <div class="footer_copyright">2022 © BIKO GROUP</div>
            </div>
        </footer>



    </div>
@endsection
