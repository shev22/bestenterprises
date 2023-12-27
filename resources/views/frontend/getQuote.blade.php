<x-app-layout>


    {{-- Ready to level up your marketing game? 🚀 Tell us your vibes, and we'll craft a Web 3 strategy that screams *you*!

    📋 Get Your Quote: Unleash Your Web 3 Potential!
    Got big marketing dreams? We've got the strategy. Give us the deets, and let's make waves together.
    
    What's in it for you?
    - 🌐 Tailored Web 3 Brilliance
    - 🔥 Cutting-edge Marketing Magic
    - 💡 Customized Solutions
    
    Why wait? Hit us up: Get your quote and let’s create some marketing magic tailored just for you! 🚀

 --}}







    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
          <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/giphy.gif');">
            <div class="container position-relative">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                  <h2>Get a Quote</h2>
                  <p> Get Your Quote: Unleash Your Web 3 Potential!
                    Got big marketing dreams? We've got the strategy. Give us the deets, and let's make waves together.</p>
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
    
              <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote.jpeg); border-top-left-radius:20px; border-bottom-left-radius:20px"></div>
    
              <div class="col-lg-7">
                <form action="forms/quote.php" method="post" class="php-email-form">
                  <h3>Get a quote</h3>
                  <p>What's in it for you?  &nbsp;<span id="quote"></span></p>
                  
                  <div class="row gy-4">
    
    
                  <div class="col-md-6">
                    <input type="text" name="website" class=" form-control rounded" placeholder="Website (optional)" >
             
                  </div>


                    <div class="col-md-6">
                      {{-- <input type="text" name="dimensions" class="form-control" placeholder="Marketing Budget" required> --}}
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Marketing Budget</option>
                        <option value="1">$0 - $10,000</option>
                        <option value="2">$10k - $50,000/option>
                        <option value="3">$50k - above</option>
                        <option value="3">Haven't decided yet.</option>
                      </select>
                    </div> 
                    <div class="col-lg-12">
                      <h4>Your Personal Details</h4>
                    </div>
    
                    <div class="col-md-12">
                      <input type="text" name="name" class="form-control rounded-4" placeholder="Name" required>
                    </div>
    
                    <div class="col-md-12 ">
                      <input type="email" class="form-control rounded-4" name="email" placeholder="Email" required>
                    </div>
    
                    <div class="col-md-12">
                      <input type="text" class="form-control rounded-4" name="phone" placeholder="Phone" required>
                    </div>
    
                    <div class="col-md-12">
                      <textarea class="form-control rounded-4" name="message" rows="6" placeholder="Description" required></textarea>
                    </div>
    
                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>
    
                      <button type="submit">Get a quote</button>
                    </div>
    
                  </div>
                </form>
              </div><!-- End Quote Form -->
    
            </div>
    
          </div>
        </section><!-- End Get a Quote Section -->
    
      </main><!-- End #main -->
    
</x-app-layout>