<x-app-layout>



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Pricing</h2>
                            <p>Yo, welcome to our Pricing Domain – Your Ticket to Leveling Up Your Web 3 Game! <br>
                                Custom Solutions:
                        Build a totally unique package just for you. Hit us up for a one-on-one chat.
                        
                        Pick a vibe that matches your goals, and let's dive into reshaping your digital game in the Web 3 era! 🚀
                        
                        If this still won’t make the cut “get a custom quote” tailored to your web3 / traditional needs</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Pricing</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->





        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing pt-0" style="background: black">
            @include('frontend.sections.pricing')

        </section>
        <!-- End Pricing Section -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        @include('frontend.sections.footer')
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

</x-app-layout>
