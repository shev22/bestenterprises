{{-- <x-app-layout>


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center"
                style="background-image: url('assets/img/test.png');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Contact</h2>
                            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                                consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
                                ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div>
                    <iframe style="border:0; width: 100%; height: 340px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4 mt-4">

                    <div class="col-lg-4">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        @include('frontend.sections.footer')
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

</x-app-layout> --}}

<x-app-layout>






    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/giphy.gif');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Get a Quote</h2>
                            <p> Get Your Quote: Unleash Your Web 3 Potential!
                                Got big marketing dreams? We've got the strategy. Give us the deets, and let's make
                                waves together.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Get a Quote</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Get a Quote Section ======= -->
        <section id="get-a-quote" class="get-a-quote">

            <div class="container" data-aos="fade-up">

                <div class="row g-0">

                    <div class="col-lg-5 quote-bg"
                        style="background-image: url(assets/img/quote.jpeg); border-top-left-radius:20px; border-bottom-left-radius:20px">
                    </div>

                    <div class="col-lg-7">
                        <form action="{{ route('form') }}" method="post" class="php-email-form">
                            @csrf
                            <h3>Get a quote</h3>
                            <p>What's in it for you? &nbsp;<span id="quote"></span></p>

                            <div class="row gy-4">


                                <div class="col-md-6">
                                    <input type="text" name="website" class=" form-control rounded-3"
                                        placeholder="Website (optional)">
                                    @error('website')
                                        <span class="text-danger text-sm" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    {{-- <input type="text" name="dimensions" class="form-control" placeholder="Marketing Budget" required> --}}
                                    <select class="form-select rounded-3" aria-label="Default select example"
                                        name="market_budget">
                                        <option selected>Marketing Budget</option>
                                        <option value="0-$10,000k">$0 - $10,000</option>
                                        <option value="$10k - $50,000">$10k - $50,000</option>
                                        <option value="$50k - above">$50k - above</option>
                                        <option value="Haven't decided yet.">Haven't decided yet.</option>
                                    </select>
                                    @error('market_budget')
                                        <span class="text-danger text-sm" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <h4>Your Personal Details</h4>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control rounded-3"
                                        placeholder="Name">
                                    @error('name')
                                        <span class="text-danger text-sm" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 ">
                                    <input type="email" class="form-control rounded-3" name="email"
                                        placeholder="Email" >
                                    @error('email')
                                        <span class="text-danger text-sm" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control rounded-3" name="phone"
                                        placeholder="Phone (optional)">
                                    @error('phone')
                                        <span class="text-danger text-sm" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control rounded-3" name="text" rows="6" placeholder="Project Description"></textarea>
                                    @error('text')
                                        <span class="text-danger text-sm" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    {{-- <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                    </div> --}}

                                    @if(Session::has('success'))
                                    <div class="alert alert-success">
                                       {{ Session::get('success') }}
                                       {{-- @php
                                           Session::forget('success');
                                       @endphp --}}
                                    </div>
                                @endif

                                    <button type="submit">Get a quote</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Quote Form -->

                </div>

            </div>
        </section><!-- End Get a Quote Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        @include('frontend.sections.footer')
    </footer>
    <!-- End Footer -->
</x-app-layout>
