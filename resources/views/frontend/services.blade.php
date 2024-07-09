<x-app-layout>
    <main id="main"
    x-data="{path: {{@json_encode( $path) }}}"
    x-init = "
    setTimeout(() => {
        messageElement = document.getElementById(path)
        //scroll to the element
        if (messageElement) {
            messageElement.scrollIntoView({ 'behavior': 'smooth', 'block': 'end' });
        }
    }, 200);">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center"
               >
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Services</h2>
                            <p>"Empowering businesses to thrive in the decentralized digital age - from code to conversion, we craft web3 / traditional marketing solutions that elevate brands and drive success."</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </nav>
        </div>
        
        <!-- End Breadcrumbs -->

        {{-- <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">

            @include('frontend.sections.featured-services')
        </section><!-- End Featured Services Section --> --}}

        <!-- ======= Services Section ======= -->
        {{-- <section id="service" class="services pt-0">

            @include('frontend.sections.services')

        </section><!-- End Services Section --> --}}

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up" id="web3">

                    <div class="col-md-5 ">
                        <img src="{{asset('assets/img/web32.gif')  }}" class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="col-md-7 text-secondary">
                        <h3 >Strategic Branding in the Web3 Epoch</h3>
                        <p class="fst-italic" >
                            Strategic Branding in the Web3 Epoch involves the meticulous application of advanced technologies and methodologies to craft a brand identity that seamlessly integrates with the decentralized landscape. In this era, brand identity is not just created; it is coded to resonate with the core principles of Web3.
                        </p>
                        <ul >
                            <li><i class="bi bi-disc text-secondary"></i> <b>Brand Identity Coding:</b>  Engineer an unparalleled and unforgettable brand identity intricately coded to resonate with the very ethos of Web3
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Messaging Algorithmics:</b>  Develop narratives utilizing advanced algorithms to articulate your brand's saga and values within the decentralized realm.
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Visual Design Rendering:</b>  Employ cutting-edge design rendering algorithms to craft visually striking and seamlessly cohesive design elements across all platforms, ensuring a consistently impactful brand presence.</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up" id="blockchain">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{asset('assets/img/blockchain-fusion.gif')}} " class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1 text-secondary">
                        <h3>Blockchain Fusion: Elevate Your Web3 Marketing Strategy</h3>
                        <p class="fst-italic">
                            Embrace the future with Blockchain Fusion and unlock the full potential of decentralized technologies.
                        </p>
                        <ul>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Tokenomics Algorithm Design:</b> Utilize blockchain power through algorithmically designed tokenomics tailored strategically for your project or platform.
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Smart Contract Coding:</b> Develop secure and efficient smart contracts, employing custom coding to match your specific needs.
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>NFT Strategy and Execution Protocols:</b>  Engage in the exploration of non-fungible tokens (NFTs) using advanced protocols to elevate your brand's digital assets and engagement.</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up" id="marketing">
                    <div class="col-md-5">
                        <img src="{{asset('assets/img/dma.gif')}}" class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="col-md-7 text-secondary">
                        <h3>Decentralized Marketing Algorithms</h3>
                        <p>Revolutionize Your Marketing with Cutting-Edge Decentralized Algorithms. Harness the power of Blockchain Fusion's Decentralized Marketing Algorithms to transform your marketing efforts. </p>
                            <ul>
                                <li><i class="bi bi-disc text-secondary"></i> <b>Community Code Growth:</b> Utilize advanced algorithms to foster and cultivate a dedicated community around your brand through decentralized channels.
                                </li>
                                <li><i class="bi bi-disc text-secondary"></i> <b>Web3 Content Marketing Algorithms: </b> Implement algorithms to develop engaging content strategies aligned with the values of the decentralized web, including blogs, videos, and interactive experiences.
                                </li>
                                <li><i class="bi bi-disc text-secondary"></i> <b>Influencer and Partnership Marketing Algorithms</b>  Employ algorithmic analysis to forge strategic partnerships within the Web3 ecosystem and collaborate with influencers, algorithmically amplifying your brand's reach.</li>
                            </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up" id="development">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{asset('assets/img/web3dev.gif')}}" class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1 text-secondary">
                        <h3>Web3 Website Development</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Decentralized Website Architecture Coding:</b> Utilize advanced coding techniques to build robust, secure, and scalable websites using decentralized technologies.
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>User Experience (UX) Algorithm Design: </b> Employ algorithmic design principles to ensure a seamless and intuitive user experience aligned with the principles of Web3.
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Web3 Analytics Integration Algorithms: </b> Implement analytics solutions algorithmically compatible with decentralized technologies for insightful data-driven decision-making.</li>
                        </ul>
                    </div>
                </div>



                <div class="row gy-4 align-items-center features-item" data-aos="fade-up"  id="education" >
                    <div class="col-md-5">
                        <img src="{{asset('assets/img/education-web3.gif')}}" class="img-fluid rounded-3" alt="" >
                    </div>
                    <div class="col-md-7 text-secondary" >
                        <h3 >Education and Training in Quantum Web3:</h3>
                        <p class="fst-italic" >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Quantum Web3 Workshops and Seminars: </b> Equip your team with the quantum knowledge and skills needed to navigate the decentralized landscape.
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Quantum Consultation Services: </b> Receive personalized guidance on adopting and integrating Web3 technologies into your existing business model with quantum precision.
                            </li>
                           
                        </ul>
                    </div>
                </div>

            
                <div class="row gy-4 align-items-center features-item" data-aos="fade-up" id="analytics">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{asset('assets/img/quatum.gif')}}" class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1 text-secondary">
                        <h3>Continuous Optimization through Quantum Analytics</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Quantum Data-Driven Insights: </b>Employ quantum computing to regularly analyze performance metrics, enabling precision fine-tuning of strategies for ongoing success.
                            </li>
                            <li><i class="bi bi-disc text-secondary"></i> <b>Adaptation to Quantum Emerging Trends:  </b> Stay ahead of the curve with quantum proactive adjustments to your branding and marketing strategies in response to the evolving Web3 ecosystem.
                            </li>
                        </ul>
                            <p>
                                At [Your Agency Name], we are quantum-ly committed to leading the Web3 revolution, ensuring that your brand not only survives but thrives in this decentralized era. Let's quantum leap into this transformative journey together!

                            </p>
                    </div>
                </div>
                <!-- Features Item -->

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


    </main><!-- End #main -->



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        @include('frontend.sections.footer')
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

</x-app-layout>
