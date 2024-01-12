<x-app-layout>

    <main id="main" style="background:black">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center"
                style="background-image: url('assets/img/test.png');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Checkout</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Checkout</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->


        <div class="container mt-5">
            <form action="" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mt-3">Basic Details</h6>
                                <hr>
                                <div class="row checkout-form">
                                    <div class="col-md-6 mt-4">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="fname" required value= ""
                                            class="form-control firstname " required placeholder="Enter First name">
                                        <span class="text-danger" id="firstname_error"></span>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label for="">Last Name</label>
                                        <input type="text" name="lname" required value=""
                                            class="form-control lastname" placeholder="Enter Last name">
                                        <span class="text-danger" id="lastname_error"></span>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <label for="">Email</label>
                                        <input type="text" name="email" required value=""
                                            class="form-control email" placeholder="Enter First name">
                                        <span class="text-danger" id="email_error"></span>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <label for="f">Phone Number</label>
                                        <input type="text" name="phone" required value=""
                                            class="form-control phone" placeholder="Enter First name">
                                        <span class="text-danger" id="phone_error"></span>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <label for="firstName">Address</label>
                                        <input type="text" name="address" value=""
                                            class="form-control address" placeholder="Enter First name">
                                        <span class="text-danger" id="address_error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                              
                                    <input type="hidden" name="payment_mode" value="COD">
                                    <button type="submit" class="btn btn-success w-100 ">Place order | COD</button>
                                    <button type="button" class="btn btn-primary w-100 mt-2  razorpay_btn">Pay with
                                        Razorpay</button>
                                    <div class="mt-2 " id="paypal-button-container"></div>
                            
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    
    </main><!-- End #main -->
    <footer id="footer" class="footer">

        @include('frontend.sections.footer')
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>



    
</x-app-layout> 

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script
src="https://www.paypal.com/sdk/js?client-id=ATHW-fUn1Uv1JOWPI9jk0iXWpc3-CiV7zBYQwaHKI8Ph2d98EHa358aY3atpklw8duZLozFDLdOmI8Kc">
</script>
<script>
    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.01' // Can also reference a variable or function
                    }
                }]
            });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For dev/demo purposes:
                // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                const transaction = orderData.purchase_units[0].payments.captures[0];
                // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                // When ready to go live, remove the alert and show a success message within this page. For example:
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');

                // var firstname = $('.firstname').val();
                // var lastname = $('.lastname').val();
                // var email = $('.email').val();
                // var phone = $('.phone').val();
                // var address = $('.address').val();

                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });


                // $.ajax({
                //     method: "POST",
                //     url: "/",
                //     data: {
                //         'fname': firstname,
                //         'lname': lastname,
                //         'email': email,
                //         'phone': phone,
                //         'address': address,
                //         'payment_mode': "Paid by Paypal",
                //         'payment_id': orderData.id

                //     },

                    // success: function(response) {

                        // swal(response.status).then((value) => {
                        //     window.location.href = "/my-orders"
                        // });


                //     }
                // })
            });
        }
    }).render('#paypal-button-container');
</script>