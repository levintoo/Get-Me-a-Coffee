<main id="main">
    <section id="sectionTop">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center pt-2">
                    <div class="col-12 col-sm-10 col-md-5 col-lg-5">
                        <form id="donateFrm" method="POST" action="{{ route('donation-payment.store') }}">
                            @csrf
                            <div class="card">
                                <div id="donateStep3" class="frm-step active" data-step="3">
                                    <div id="ccPreloader" class="order-preload-cover d-none">
                                        <div class="order-preload-container">
                                            <div class="order-preload-body"><img src="{{ asset('assets/images/tm-logo.png') }}" alt="Processing Your Order!" />
                                                <div class="lds-ellipsis"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title text-center text-blue-dark text-uppercase">Payment DETAILS</h4>
                                    </div>
                                    <div class="card-body text-left">
                                        <div class="col-12">
                                            <!-- icons -->
                                            <div class="payment-option-buttons">
                                                <span class="credit-card-option active" data-processor-tab="stripe">Card</span>
                                                <span class="payPal-option" data-processor-tab="pay_pal">
                                                    <svg width="25" height="30" viewBox="0 0 25 30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.6616 29.6069H7.5717C7.46959 29.6124 7.36766 29.5932 7.27456 29.5509C7.18146 29.5086 7.09996 29.4444 7.03698 29.3638C6.97274 29.2815 6.92656 29.1866 6.90144 29.0853C6.87631 28.9839 6.8728 28.8784 6.89114 28.7757C6.95596 28.3851 7.03698 27.8699 7.13744 27.2152L7.32217 26.0372C7.50595 24.8547 7.69392 23.6729 7.88606 22.4918V22.4594L8.19069 20.5733L8.35273 19.5702V19.5621C8.4694 18.8411 8.56176 18.2691 8.6282 17.8429C8.63188 17.7563 8.65333 17.6714 8.69121 17.5935C8.72909 17.5156 8.7826 17.4463 8.8484 17.3899C8.9142 17.3335 8.99089 17.2913 9.07371 17.2658C9.15653 17.2403 9.24371 17.2321 9.32982 17.2418H11.7928C12.9757 17.2547 14.1537 17.1397 15.3107 16.8982C17.0524 16.5507 18.668 15.7395 19.9871 14.5503C21.1429 13.4399 22.0106 12.0644 22.5149 10.5431C22.7612 9.83659 22.9524 9.11066 23.0853 8.375C23.0966 8.30695 23.1096 8.26806 23.1258 8.2551C23.1305 8.24883 23.1366 8.2438 23.1437 8.24041C23.1507 8.23703 23.1585 8.23539 23.1663 8.23565H23.1825C23.218 8.25064 23.2518 8.26966 23.283 8.29237C24.1337 8.93566 24.7024 9.88358 24.8709 10.9368C25.0621 12.0387 25.0411 13.1665 24.8061 14.2602C24.4992 16.3763 23.429 18.307 21.7971 19.6885C19.9944 20.9735 17.81 21.6108 15.5991 21.4969H14.8877C14.6229 21.4947 14.3667 21.5905 14.1683 21.7659C13.9626 21.9444 13.8256 22.1891 13.781 22.4578L13.7162 22.7721L12.8185 28.4078L12.7861 28.6525C12.7394 28.9242 12.5961 29.1699 12.3826 29.3444C12.1822 29.5168 11.9259 29.6101 11.6616 29.6069ZM5.86382 26.3661H1.05938C0.946151 26.3685 0.833805 26.3458 0.730419 26.2995C0.627032 26.2533 0.535176 26.1847 0.461456 26.0988C0.384662 26.0144 0.327999 25.9137 0.295724 25.8042C0.263449 25.6947 0.256401 25.5794 0.275111 25.4668L4.05223 1.50133C4.09973 1.19386 4.25968 0.91496 4.50108 0.718686C4.73424 0.517619 5.03256 0.408196 5.34044 0.410812H15.0854C15.6202 0.431877 16.1516 0.503174 16.6734 0.623083C17.2924 0.741371 17.9017 0.914752 18.4915 1.14161C19.5647 1.52109 20.4953 2.22142 21.157 3.14764C21.7841 4.09233 22.1066 5.20877 22.0774 6.34304C22.0504 7.65846 21.7983 8.95954 21.332 10.1898C20.9648 11.3686 20.3282 12.4456 19.4726 13.3358C18.6171 14.2259 17.5661 14.9047 16.4028 15.3184C15.0793 15.7665 13.6924 15.9991 12.2951 16.007C12.2789 16.0167 11.5822 16.0184 10.8368 16.0184L9.37843 16.007C8.91639 15.9599 8.45449 16.0978 8.09396 16.3906C7.73343 16.6834 7.50367 17.1072 7.45504 17.5691C7.43397 17.6566 6.94137 20.724 6.06961 26.2041C6.06963 26.2298 6.06395 26.2551 6.05298 26.2783C6.04201 26.3015 6.02603 26.322 6.00619 26.3383C5.98635 26.3546 5.96314 26.3662 5.93824 26.3724C5.91333 26.3787 5.88736 26.3793 5.8622 26.3742L5.86382 26.3661Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <span class="crypto-option" data-processor-tab="crypto">
                                                    <a href="crypto/index.html" target="_blank">
                                                        <svg width="24" height="40" viewBox="0 0 24 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M19.0401 16.923L19.0392 16.9238C18.2902 17.688 17.2345 18.1482 16.094 18.1482H5.69615C4.94383 18.1482 4.32623 18.7658 4.32623 19.5182C4.32623 20.2742 4.94617 20.8711 5.69615 20.8711H16.094C17.9872 20.8711 19.7191 20.1031 20.9697 18.8525C22.22 17.6022 22.9883 15.8874 22.9883 13.9938C22.9883 12.0835 22.2201 10.3686 20.9697 9.11818C19.7191 7.86762 17.9872 7.09961 16.094 7.09961H1.89067C1.14069 7.09961 0.520752 7.69649 0.520752 8.45255C0.520752 9.16276 1.07113 9.75289 1.76567 9.81674V9.8253H1.89067H16.094C17.236 9.8253 18.2902 10.2842 19.0392 11.0496L19.0401 11.0506C19.7891 11.7996 20.2654 12.8378 20.2654 13.9953C20.2654 15.1355 19.7893 16.1738 19.0401 16.923Z" fill="currentColor" stroke="currentColor" stroke-width="0.25" />
                                                            <path d="M19.3734 28.8112L19.3726 28.8121C18.5345 29.6502 17.3732 30.1789 16.094 30.1789H1.89067C1.13834 30.1789 0.520752 30.7964 0.520752 31.5488C0.520752 32.3035 1.14078 32.9003 1.89067 32.9003H16.094C18.126 32.9003 19.9654 32.0798 21.3022 30.7416C22.6397 29.4041 23.4792 27.5663 23.4792 25.5321C23.4792 23.4979 22.6397 21.6616 21.3021 20.324C19.966 18.9879 18.1268 18.1484 16.094 18.1484C15.3395 18.1484 14.7411 18.7683 14.7411 19.5184C14.7411 20.2684 15.3395 20.8883 16.094 20.8883C17.3742 20.8883 18.5348 21.4007 19.3717 22.2541L19.3717 22.2542L19.3734 22.2558C20.2255 23.0928 20.7379 24.252 20.7379 25.5336C20.7379 26.8152 20.2255 27.9757 19.3734 28.8112Z" fill="currentColor" stroke="currentColor" stroke-width="0.25" />
                                                            <path d="M5.69584 7.09961C4.94586 7.09961 4.32593 7.69649 4.32593 8.45255V31.5472C4.32593 32.3019 4.94596 32.8987 5.69584 32.8987C6.44582 32.8987 7.06435 32.3032 7.06435 31.5472V8.45255C7.06435 7.69667 6.44601 7.09961 5.69584 7.09961Z" fill="currentColor" stroke="currentColor" stroke-width="0.25" />
                                                            <path d="M9.65885 0.875C8.90288 0.875 8.30591 1.49343 8.30591 2.24492V8.45252C8.30591 9.20251 8.90279 9.82244 9.65885 9.82244C10.4112 9.82244 11.0288 9.20485 11.0288 8.45252V2.24492C11.0288 1.49259 10.4112 0.875 9.65885 0.875Z" fill="currentColor" stroke="currentColor" stroke-width="0.25" />
                                                            <path d="M15.2701 0.875C14.5178 0.875 13.9001 1.49108 13.9001 2.24492V8.45252C13.9001 9.20485 14.5177 9.82244 15.2701 9.82244C16.0246 9.82244 16.623 9.2026 16.623 8.45252V2.24492C16.623 1.49484 16.0246 0.875 15.2701 0.875Z" fill="currentColor" stroke="currentColor" stroke-width="0.25" />
                                                            <path d="M9.65885 30.177C8.90288 30.177 8.30591 30.7954 8.30591 31.5469V37.7545C8.30591 38.5045 8.90279 39.1244 9.65885 39.1244C10.4112 39.1244 11.0288 38.5068 11.0288 37.7545V31.5469C11.0288 30.7931 10.4111 30.177 9.65885 30.177Z" fill="currentColor" stroke="currentColor" stroke-width="0.25" />
                                                            <path d="M15.2701 30.177C14.5178 30.177 13.9001 30.7931 13.9001 31.5469V37.7545C13.9001 38.5068 14.5177 39.1244 15.2701 39.1244C16.0246 39.1244 16.623 38.5046 16.623 37.7545V31.5469C16.623 30.7953 16.0245 30.177 15.2701 30.177Z" fill="currentColor" stroke="currentColor" stroke-width="0.25" />
                                                        </svg>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- Payment Buttons -->
                                            <div id="paymentProcessorContainer">
                                                <div class="payment-processor active" data-processor="stripe">
                                                    <div id="payment-request-button" class="mt-4"></div>
                                                    <input type="hidden" name="amount" value="{{session()->get('amount')}}">
                                                    <input type="hidden" name="username" value="{{session()->get('username')}}">
                                                    <input type="hidden" name="inputMessage" value="{{session()->get('inputMessage')}}">
                                                    <input type="hidden" name="inputPhone" value="{{session()->get('inputPhone')}}">
                                                    <input type="hidden" name="inputEmail" value="{{session()->get('inputEmail')}}">
                                                    <input type="hidden" name="inputName" value="{{session()->get('inputName')}}">
                                                    <input type="hidden" name="name_hidden" value="{{session()->get('name_hidden')}}">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label text-blue-dark m-0" for="nameOnCard">Name On Card<sup>*</sup></label>
                                                        <input type="text" name="nameOnCard" id="nameOnCard" placeholder="Name On Card*" class="form-control">
                                                    </div>
                                                    <div id="card-element" class="mt-1"></div>
                                                    <div class="form-group py-3">
                                                        <div class="mx-1 mb-4">
                                                            <button id="stripeCC_PaymentSubmitBtn" type="submit" class="btn btn-large btn-block btn-orange text-uppercase">COMPLETE <div class="spinner hidden" id="spinner"></div></button>
                                                        </div>
                                                        <div class="mx-1 text-center">
                                                            <button type="button" class="btn btn-large btn-outline-orange text-uppercase frm-step-back-btn" data-step="3">BACK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-processor" data-processor="pay_pal">
                                                    <div id="paypal-button-container" class="mt-4"></div>
                                                    <div class="form-group py-3">
                                                        <div class="mx-1 text-center">
                                                            <button type="button" class="btn btn-large btn-outline-orange text-uppercase frm-step-back-btn" data-step="3">BACK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-processor" data-processor="crypto">
                                                    <div class="form-group py-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="section-inner">
            <div class="container pt-5">
                <div class="container text-center">
                    <div class="brand-wrapper">
                        <div class="brand-inner">
               </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container foot-link-container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="mb-5 d-flex justify-content-around text-center">
                        <a class="text-muted text-uppercase mx-1" href="terms-of-use/index.html" target="_blank">Contact</a>
                        <a class="text-muted text-uppercase mx-1" href="privacy-policy/index.html" target="_blank">About</a>
                        <a class="text-muted text-uppercase mx-1" href="coppa-policy/index.html" target="_blank">Privacy Policy</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</main>
@push('scripts')
<script>
   
</script>
@endpush
