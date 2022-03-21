<main id="main">
    <div class="bg-elements">
        <span class="bg-wave"></span>
        <span class="fish-1"></span>
        <div class="container position-relative">
            <span class="diver-1"></span>
            <span class="diver-2"></span>
            <span class="turtle-1"></span>
            <span class="trash-1"></span>
            <span class="trash-2"></span>
            <span class="trash-3"></span>
            <span class="fish-2"></span>
        </div>
        <span class="coral-1"></span>
        <span class="coral-2"></span>
        <span class="bg-bottom"></span>
    </div>
    <section id="sectionTop">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center pt-2">
                    <div class="col-12 col-sm-10 col-md-5 col-lg-5">
                        <form id="donateFrm">
                            <div class="card">
                                <div id="donateStep1" class="frm-step active" data-step="1">
                                    <div class="card-header">
                                        <h4 class="card-title text-center text-uppercase font-lg">Join <span id="joinHeadline_TeamName">#TeamSeas</span></h4>
                                    </div>
                                    <div class="card-body text-center py-2">
                                        <h4 class="donate-headline">Every $1 is one less pound of trash in the ocean</h4>
                                        <div class="row align-items-stretch">
                                            <div class="col mb-3 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="5" type="radio" class="custom-control-input" id="checkPounds5">
                                                    <label class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds5">5<br>Pounds</label>
                                                </div>
                                            </div>
                                            <div class="col mb-3 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="20" type="radio" checked class="custom-control-input active-donation-amount" id="checkPounds20">
                                                    <label class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds20">20<br>Pounds</label>
                                                </div>
                                            </div>
                                            <div class="col mb-3 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="50" type="radio" class="custom-control-input" id="checkPounds50">
                                                    <label class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds50">50<br>Pounds</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-1 px-1">
                                                <div class="custom-control custom-checkbox h-100">
                                                    <input name="pounds" value="100" type="radio" class="custom-control-input" id="checkPounds100">
                                                    <label class="custom-control-label text-uppercase h-100 d-flex align-items-center justify-content-center" for="checkPounds100">100<br>Pounds</label>
                                                </div>
                                            </div>
                                            <div class="col-8 mb-1 px-1">
                                                <input name="other_amount" value="" type="text" class="form-control custom-control h-100" maxlength="10" placeholder="Other Amount">
                                            </div>
                                            <div class="col-12 mb-2">
                                                <small class="text-muted"><em>We take crypto! You will see the options on step 3</em></small>
                                            </div>
                                        </div>
                                        <div class="form-group py-1 mb-1">
                                            <button id="donateBtnStep1" type="button" class="btn btn-large btn-orange text-uppercase frm-step-btn" data-step="1">Next</button>
                                        </div>
                                        <div class="form-group py-1 m-0">
                                            <button type="button" class="btn btn-link text-dark text-uppercase" data-toggle="modal" data-target="#faqModal"><u>FAQ</u></button>
                                        </div>
                                    </div>
                                    <img class="large-ribbon" src="assets/images/large-ribbon.png" data-toggle="tooltip" data-custom-class="font-sm" title="To make your donation a gift, select the check box on the next screen. You'll receive a personalized certificate you can share to give the gift of trash removal!" />
                                </div>
                                <div id="donateStep2" class="frm-step" data-step="2">
                                    <div class="card-header">
                                        <h4 class="card-title text-center text-blue-dark">DETAILS</h4>
                                    </div>
                                    <div class="card-body text-left">
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputName">Display Name<sup>*</sup></label>
                                            <input type="text" class="form-control _req" id="inputName" placeholder="Display Name" maxlength="50">
                                            <small class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputTeamName">Team Name <span class="d-inline-block bg-grey rounded-circle text-white px-1 font-sm" data-toggle="tooltip" data-placement="bottom" title="Add your team to show the world what your crew can do!" data-custom-class="font-sm">?</span></label>
                                            <input type="text" class="form-control" id="inputTeamName" placeholder="Team Name (Optional)" style="width: 100%;" maxlength="50">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputEmail">Email Address<sup>*</sup></label>
                                            <input type="email" class="form-control _req" id="inputEmail" placeholder="Email" required>
                                            <small class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputPhone">Mobile Phone</label>
                                            <input type="text" class="form-control" id="inputPhone" placeholder="Mobile Phone (optional)">
                                            <p class="font-sm">By providing your mobile number, you agree to receive text messages from #TeamSeas</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-blue-dark m-0" for="inputMessage">Message</label>
                                            <textarea class="form-control dark-border" maxlength="140" id="inputMessage" rows="3" placeholder="Message (140 characters max)"></textarea>
                                        </div>
                                        <p class="text-muted"><small><em><sup>*</sup>indicates a required field</em></small></p>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input-custom" type="checkbox" id="optIn" name="opt_in">
                                                <label class="form-check-label font-weight-bold" for="optIn">YES! Keep me posted with #TeamSeas updates</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input-custom" type="checkbox" id="nameHidden" name="name_hidden">
                                                <label class="form-check-label" for="nameHidden">Please keep my donation anonymous</label>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input-custom" type="checkbox" id="is_gift">
                                            <label class="form-check-label align-text-top" for="is_gift">My donation is a gift for someone <span class="ml-2" data-toggle="tooltip" data-custom-class="font-sm" title="To make your donation a gift, select the check box. You'll receive a personalized certificate you can share to give the gift of trash removal!"><img src="https://assets01.teamassets.net/assets/svg/orange-gift-bow.svg" width="20" /></span><br><small><em>We’ll send a certificate to your email address, which you can forward along or print. <a href="#" data-toggle="modal" data-target="#giftExModal">(here's an example)</a> </em></small></label>
                                        </div>
                                        <div id="giftFields" class="d-none">
                                            <hr>
                                            <div class="form-group">
                                                <label class="form-label text-blue-dark m-0" for="gifted_to_name">To</label>
                                                <input type="text" class="form-control" id="gifted_to_name" placeholder="Enter recipient name or nickname...">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-blue-dark m-0" for="gifted_by_name">From</label>
                                                <input type="text" class="form-control" id="gifted_by_name" placeholder="Sender name or nickname...">
                                                <small class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-blue-dark m-0" for="gift_message">Include A Gift Message</label>
                                                <textarea class="form-control dark-border" maxlength="140" id="gift_message" rows="3" placeholder="My #TeamSeas Message (140 characters max)"></textarea>
                                                <small>optional; to be included on your certificate</small>
                                            </div>
                                        </div>
                                        <div class="form-group py-3">
                                            <div class="d-flex justify-content-around flex-wrap">
                                                <div class="mx-1 mb-2">
                                                    <button type="button" class="btn btn-large btn-outline-orange text-uppercase frm-step-back-btn" data-step="2">BACK</button>
                                                </div>
                                                <div class="mx-1 mb-2">
                                                    <button id="donateBtnStep2" type="button" class="btn btn-large btn-orange text-uppercase frm-step-btn" data-step="2">NEXT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="donateStep3" class="frm-step" data-step="3">
                                    <div id="ccPreloader" class="order-preload-cover d-none">
                                        <div class="order-preload-container">
                                            <div class="order-preload-body"><img src="../assets01.teamassets.net/assets/images/teamseas-tm-logo.png" alt="Processing Your Order!" />
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
                                                            <path d="M11.6616 29.6069H7.5717C7.46959 29.6124 7.36766 29.5932 7.27456 29.5509C7.18146 29.5086 7.09996 29.4444 7.03698 29.3638C6.97274 29.2815 6.92656 29.1866 6.90144 29.0853C6.87631 28.9839 6.8728 28.8784 6.89114 28.7757C6.95596 28.3851 7.03698 27.8699 7.13744 27.2152L7.32217 26.0372C7.50595 24.8547 7.69392 23.6729 7.88606 22.4918V22.4594L8.19069 20.5733L8.35273 19.5702V19.5621C8.4694 18.8411 8.56176 18.2691 8.6282 17.8429C8.63188 17.7563 8.65333 17.6714 8.69121 17.5935C8.72909 17.5156 8.7826 17.4463 8.8484 17.3899C8.9142 17.3335 8.99089 17.2913 9.07371 17.2658C9.15653 17.2403 9.24371 17.2321 9.32982 17.2418H11.7928C12.9757 17.2547 14.1537 17.1397 15.3107 16.8982C17.0524 16.5507 18.668 15.7395 19.9871 14.5503C21.1429 13.4399 22.0106 12.0644 22.5149 10.5431C22.7612 9.83659 22.9524 9.11066 23.0853 8.375C23.0966 8.30695 23.1096 8.26806 23.1258 8.2551C23.1305 8.24883 23.1366 8.2438 23.1437 8.24041C23.1507 8.23703 23.1585 8.23539 23.1663 8.23565H23.1825C23.218 8.25064 23.2518 8.26966 23.283 8.29237C24.1337 8.93566 24.7024 9.88358 24.8709 10.9368C25.0621 12.0387 25.0411 13.1665 24.8061 14.2602C24.4992 16.3763 23.429 18.307 21.7971 19.6885C19.9944 20.9735 17.81 21.6108 15.5991 21.4969H14.8877C14.6229 21.4947 14.3667 21.5905 14.1683 21.7659C13.9626 21.9444 13.8256 22.1891 13.781 22.4578L13.7162 22.7721L12.8185 28.4078L12.7861 28.6525C12.7394 28.9242 12.5961 29.1699 12.3826 29.3444C12.1822 29.5168 11.9259 29.6101 11.6616 29.6069ZM5.86382 26.3661H1.05938C0.946151 26.3685 0.833805 26.3458 0.730419 26.2995C0.627032 26.2533 0.535176 26.1847 0.461456 26.0988C0.384662 26.0144 0.327999 25.9137 0.295724 25.8042C0.263449 25.6947 0.256401 25.5794 0.275111 25.4668L4.05223 1.50133C4.09973 1.19386 4.25968 0.91496 4.50108 0.718686C4.73424 0.517619 5.03256 0.408196 5.34044 0.410812H15.0854C15.6202 0.431877 16.1516 0.503174 16.6734 0.623083C17.2924 0.741371 17.9017 0.914752 18.4915 1.14161C19.5647 1.52109 20.4953 2.22142 21.157 3.14764C21.7841 4.09233 22.1066 5.20877 22.0774 6.34304C22.0504 7.65846 21.7983 8.95954 21.332 10.1898C20.9648 11.3686 20.3282 12.4456 19.4726 13.3358C18.6171 14.2259 17.5661 14.9047 16.4028 15.3184C15.0793 15.7665 13.6924 15.9991 12.2951 16.007C12.2789 16.0167 11.5822 16.0184 10.8368 16.0184L9.37843 16.007C8.91639 15.9599 8.45449 16.0978 8.09396 16.3906C7.73343 16.6834 7.50367 17.1072 7.45504 17.5691C7.43397 17.6566 6.94137 20.724 6.06961 26.2041C6.06963 26.2298 6.06395 26.2551 6.05298 26.2783C6.04201 26.3015 6.02603 26.322 6.00619 26.3383C5.98635 26.3546 5.96314 26.3662 5.93824 26.3724C5.91333 26.3787 5.88736 26.3793 5.8622 26.3742L5.86382 26.3661Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                <span class="crypto-option" data-processor-tab="crypto">
                                                        <a href="crypto/index.html" target="_blank">
                                                            <svg width="24" height="40" viewBox="0 0 24 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19.0401 16.923L19.0392 16.9238C18.2902 17.688 17.2345 18.1482 16.094 18.1482H5.69615C4.94383 18.1482 4.32623 18.7658 4.32623 19.5182C4.32623 20.2742 4.94617 20.8711 5.69615 20.8711H16.094C17.9872 20.8711 19.7191 20.1031 20.9697 18.8525C22.22 17.6022 22.9883 15.8874 22.9883 13.9938C22.9883 12.0835 22.2201 10.3686 20.9697 9.11818C19.7191 7.86762 17.9872 7.09961 16.094 7.09961H1.89067C1.14069 7.09961 0.520752 7.69649 0.520752 8.45255C0.520752 9.16276 1.07113 9.75289 1.76567 9.81674V9.8253H1.89067H16.094C17.236 9.8253 18.2902 10.2842 19.0392 11.0496L19.0401 11.0506C19.7891 11.7996 20.2654 12.8378 20.2654 13.9953C20.2654 15.1355 19.7893 16.1738 19.0401 16.923Z" fill="currentColor" stroke="currentColor" stroke-width="0.25"/>
                                                                <path d="M19.3734 28.8112L19.3726 28.8121C18.5345 29.6502 17.3732 30.1789 16.094 30.1789H1.89067C1.13834 30.1789 0.520752 30.7964 0.520752 31.5488C0.520752 32.3035 1.14078 32.9003 1.89067 32.9003H16.094C18.126 32.9003 19.9654 32.0798 21.3022 30.7416C22.6397 29.4041 23.4792 27.5663 23.4792 25.5321C23.4792 23.4979 22.6397 21.6616 21.3021 20.324C19.966 18.9879 18.1268 18.1484 16.094 18.1484C15.3395 18.1484 14.7411 18.7683 14.7411 19.5184C14.7411 20.2684 15.3395 20.8883 16.094 20.8883C17.3742 20.8883 18.5348 21.4007 19.3717 22.2541L19.3717 22.2542L19.3734 22.2558C20.2255 23.0928 20.7379 24.252 20.7379 25.5336C20.7379 26.8152 20.2255 27.9757 19.3734 28.8112Z" fill="currentColor" stroke="currentColor" stroke-width="0.25"/>
                                                                <path d="M5.69584 7.09961C4.94586 7.09961 4.32593 7.69649 4.32593 8.45255V31.5472C4.32593 32.3019 4.94596 32.8987 5.69584 32.8987C6.44582 32.8987 7.06435 32.3032 7.06435 31.5472V8.45255C7.06435 7.69667 6.44601 7.09961 5.69584 7.09961Z" fill="currentColor" stroke="currentColor" stroke-width="0.25"/>
                                                                <path d="M9.65885 0.875C8.90288 0.875 8.30591 1.49343 8.30591 2.24492V8.45252C8.30591 9.20251 8.90279 9.82244 9.65885 9.82244C10.4112 9.82244 11.0288 9.20485 11.0288 8.45252V2.24492C11.0288 1.49259 10.4112 0.875 9.65885 0.875Z" fill="currentColor" stroke="currentColor" stroke-width="0.25"/>
                                                                <path d="M15.2701 0.875C14.5178 0.875 13.9001 1.49108 13.9001 2.24492V8.45252C13.9001 9.20485 14.5177 9.82244 15.2701 9.82244C16.0246 9.82244 16.623 9.2026 16.623 8.45252V2.24492C16.623 1.49484 16.0246 0.875 15.2701 0.875Z" fill="currentColor" stroke="currentColor" stroke-width="0.25"/>
                                                                <path d="M9.65885 30.177C8.90288 30.177 8.30591 30.7954 8.30591 31.5469V37.7545C8.30591 38.5045 8.90279 39.1244 9.65885 39.1244C10.4112 39.1244 11.0288 38.5068 11.0288 37.7545V31.5469C11.0288 30.7931 10.4111 30.177 9.65885 30.177Z" fill="currentColor" stroke="currentColor" stroke-width="0.25"/>
                                                                <path d="M15.2701 30.177C14.5178 30.177 13.9001 30.7931 13.9001 31.5469V37.7545C13.9001 38.5068 14.5177 39.1244 15.2701 39.1244C16.0246 39.1244 16.623 38.5046 16.623 37.7545V31.5469C16.623 30.7953 16.0245 30.177 15.2701 30.177Z" fill="currentColor" stroke="currentColor" stroke-width="0.25"/>
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
                                                    <div class="form-group mt-4">
                                                        <label class="form-label text-blue-dark m-0" for="nameOnCard">Name On Card<sup>*</sup></label>
                                                        <input type="text" name="name" id="nameOnCard" placeholder="Name On Card*" class="form-control">
                                                    </div>
                                                    <div id="card-element" class="mt-1"></div>
                                                    <div class="form-group py-3">
                                                        <div class="mx-1 mb-4">
                                                            <button id="stripeCC_PaymentSubmitBtn" type="button" class="btn btn-large btn-block btn-orange text-uppercase">COMPLETE <div class="spinner hidden" id="spinner"></div></button>
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
                                <div id="donateStep4" class="frm-step" data-step="4">
                                    <div class="card-body text-center py-1 px-2">
                                        <h1 class="text-orange font-xxl font-weight-bold text-uppercase my-2">Thank You!</h1>
                                        <p class="font-sm">#TeamSeas is a movement fueled by our power to inspire each other—every donation counts and every voice matters. Thank you for floating a brighter future!</p>
                                        <div class="my-3">
                                            <div class="thank-you-card mt-0">
                                                <p class="mb-2"><img src="../assets01.teamassets.net/assets/images/teamseas-logo.png" width="60"/></p>
                                                <p class="font-weight-700 text-white text-uppercase mt-1 mb-0">I joined #teamseas</p>
                                                <p class="font-weight-800 font-lg text-blue-dark text-uppercase m-0" id="ty_display_name"></p>
                                                <p class="font-weight-700 text-blue-dark text-uppercase m-0" id="ty_team_name"></p>
                                                <p class="m-0"><img id="ty_badge" src="../assets01.teamassets.net/assets/images/tier-3-badge.png" width="65"/></p>
                                                <p class="font-weight-700 text-white text-uppercase mt-1 mb-0">$<span id="ty_amount">0</span> donation</p>
                                                <p class="font-weight-light font-sm text-white text-uppercase mb-1" id="ty_message"></p>
                                                <p class="font-weight-light font-xs text-white text-uppercase" id="ty_date_time"></p>
                                                <p class="mb-1"><span class="d-inline-block bg-orange-light text-black font-weight-bold py-1 px-4 rounded-pill text-nowrap" id="ty_pounds"></span></p>
                                                <p class="text-white text-uppercase m-0">pounds removed</p>
                                            </div>
                                        </div>
                                        <p class="font-sm">Download your card, share it on social, and tag 3 friends to join #TeamSeas</p>
                                        <p id="generatingCardDisplay">Generating your downloadable Donation Card...</p>
                                        <p><a href="#" id="tyDownloadBtn" class="btn btn-orange text-uppercase font-sm d-none" target="_blank" download>Download To Share</a></p>
                                        <p>
                                            <a href="https://www.facebook.com/TeamSeas/" class="social-box social-fb-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://www.instagram.com/teamseas/" class="social-box social-insta-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://twitter.com/teamseas" class="social-box social-twt-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://www.tiktok.com/@teamseas" class="social-box social-tt-outline bg-blue-light mx-1" target="_blank"></a>
                                            <a href="https://youtube.com/c/teamseas" class="social-box social-yt-outline bg-blue-light mx-1" target="_blank"></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section1">
        <div class="section-inner">
            <div class="container">
                <div class="row align-items-stretch mt-3">
                    <div class="col-md-6 d-flex flex-column mb-3">
                        <div class="mb-4 d-block d-md-none">
                            <a href="https://store.teamseas.org/" target="_blank">
                                <img src="../assets01.teamassets.net/assets/images/shop-teamseas3.png" class="w-100" />
                            </a>
                        </div>
                        <div class="card flex-grow-1">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <ul class="nav nav-pills justify-content-center leaderboard-tabs font-sm font-weight-500 text-uppercase mb-3">
                                        <li class="nav-item"><a class="nav-link active lb-trigger" data-toggle="tab" data-lb-key="recent" data-lb-elem="lbRecent" href="#tabRecent">Most Recent</a></li>
                                        <li class="nav-item"><a class="nav-link lb-trigger" data-toggle="tab" data-lb-key="most" data-lb-elem="lbMost" href="#tabMost">Most Trash</a></li>
                                        <li class="nav-item"><a class="nav-link lb-trigger" data-toggle="tab" data-lb-key="teams_most_donations" data-lb-elem="lbTeams" href="#tabTeams">Top Teams</a></li>
                                    </ul>
                                    <div class="mb-3"><a href="search-donors/index.html" class="btn btn-blue-lighter search-box"></a></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabRecent" role="tabpanel">
                                        <div id="lbRecent"></div>
                                    </div>
                                    <div class="tab-pane fade" id="tabMost" role="tabpanel">
                                        <div id="lbMost"></div>
                                    </div>
                                    <div class="tab-pane fade" id="tabTeams" role="tabpanel">
                                        <div id="lbTeams"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center text-md-right bg-transparent">
                                <div>
                                    <a href="all-donors/index.html" class="btn btn-outline-primary text-uppercase">See All</a>
                                </div>
                                <div><small class="disclaimer text-muted"><em>*we reserve the right to remove offensive language</em></small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mb-3">
                        <div class="mb-4 d-none d-md-block">
                            <a href="https://store.teamseas.org/" target="_blank">
                                <img src="../assets01.teamassets.net/assets/images/shop-teamseas3.png" class="w-100" />
                            </a>
                        </div>
                        <div class="card flex-grow-1">
                            <div class="card-header px-3 pt-3 pb-0 bg-white">
                                <div class="border-bottom border-thick border-grey d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="mr-2 mb-1">
                                        <span class="text-blue text-uppercase font-weight-500 font-md">#TeamSeas Social</span>
                                    </div>
                                    <div class="ml-2 mb-1 text-right">
                                        <a href="https://www.facebook.com/TeamSeas/" class="social-box social-fb bg-blue mx-1" target="_blank"></a>
                                        <a href="https://www.instagram.com/teamseas/" class="social-box social-insta bg-blue mx-1" target="_blank"></a>
                                        <a href="https://twitter.com/teamseas" class="social-box social-twt bg-blue mx-1" target="_blank"></a>
                                        <a href="https://www.reddit.com/r/TeamSeas/" class="social-box social-redd bg-blue mx-1" target="_blank"></a>
                                        <a href="https://www.tiktok.com/@teamseas" class="social-box social-tt bg-blue mx-1" target="_blank"></a>
                                        <a href="https://youtube.com/c/teamseas" class="social-box social-yt bg-blue mx-1" target="_blank"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body social-card p-3">
                                <div class="social-wrapper">
                                    <div class="tintup" data-id="ts_landing_page" data-columns="2" data-expand="true"  data-count="12" data-noButtons="true" data-paginate="true" data-personalization-id="1079231" style="height:300px;width:100%;"></div>
                                </div>
                            </div>
                            <div class="card-footer text-center text-md-right bg-transparent">
                                <a href="social/index.html" class="btn btn-outline-primary text-uppercase">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section2">
        <div class="bg-elements">
            <div class="container position-relative">
                <span class="diver-3"></span>
                <span class="diver-4"></span>
                <span class="fish-3"></span>
                <span class="fish-4"></span>
                <span class="fish-5"></span>
                <span class="squid-1"></span>
                <span class="turtle-2"></span>
            </div>
        </div>
        <div class="section-inner">
            <div class="container text-center">
                <h2 class="font-xxl text-white text-uppercase font-weight-800">How it Works</h2>
                <p class="text-white">#TeamSeas will be one of the biggest, baddest, most-impactful cleanup projects of all time—and here’s how we’re doing it. Scroll on to see our cutting-edge river Interceptors, info on locally-organized cleanups, ghost-gear removal efforts and professional expeditions to areas where we can have the greatest conservation impact!</p>
            </div>

            <div class="container">
                <div class="d-flex justify-content-center my-3">
                    <ul class="nav nav-pills justify-content-center timeline-tabs font-md font-weight-500 text-uppercase mb-3">
                        <li class="nav-item"><a class="nav-link link-beaches active" data-toggle="tab" href="#tabBeaches">Beaches</a></li>
                        <li class="nav-item"><a class="nav-link link-rivers" data-toggle="tab" href="#tabRivers">Rivers</a></li>
                        <li class="nav-item"><a class="nav-link link-oceans" data-toggle="tab" href="#tabOceans">Oceans</a></li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabOceans" role="tabpanel">
                        <p class="text-center mb-5"><img src="../assets01.teamassets.net/assets/images/logo-ocean-conservancy.png" width="240"></p>
                        <div class="row">
                            <div class="col-8 col-sm-6 offset-sm-3 offset-2">
                                <div class="video-wrapper">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/gAm8eNL8XjQ?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-line-center"></div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-the-big-idea.png" alt="beach cleanups" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">The Big Idea</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Lost, abandoned and discarded fishing gear – or ghost gear – is some of the deadliest ocean trash, and super tricky to recover. Luckily the experts with Ocean Conservancy’s Global Ghost Gear Initiative® have
                                                been removing ghost gear from waters all around the world for years.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX LEFT-->
                            <div class="timeline-box timeline-left">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-10 col-md-5 order-1 order-md-0">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">MAPPING</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Ocean Conservancy will work with its Global Ghost Gear Initiative® members and partners on the water to identify ghost gear graveyards around the world.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-md-5 order-md-2 d-none d-md-block">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-mapping.png" alt="mapping" width="190" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-extraction.png" alt="removal" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">REMOVAL</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Specially trained experts will grapple or float the gear to the surface, where the gear will be hooked onto boat cranes and lifted out of the ocean. (Yes, it’s a very cool process.)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX LEFT-->
                            <div class="timeline-box timeline-left">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-10 col-md-5 order-1 order-md-0">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">RECYCLING [if applicable]</h3>
                                        <div class="card p-4">
                                            <p class="m-0">TeamSeas will work with local authorities to make sure any labeled, working gear is returned to local fishers. Remaining gear will be recycled– when possible – and the remainder properly disposed of.</p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-md-5 order-md-2 d-none d-md-block">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-recycling.png" alt="recycling" width="190" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center my-5">
                            <a href="https://oceanconservancy.org/blog/2021/10/29/teamseas-will-transformational-ocean-lets-go/" target="_blank" class="btn btn-outline-white learn-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tabBeaches" role="tabpanel">
                        <p class="text-center mb-5"><img src="../assets01.teamassets.net/assets/images/logo-ocean-conservancy.png" width="240"></p>
                        <div class="row">
                            <div class="col-8 col-sm-6 offset-sm-3 offset-2">
                                <div class="video-wrapper">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/gAm8eNL8XjQ?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-line-center"></div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-the-big-idea.png" alt="capture" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">The Big Idea</h3>
                                        <div class="card p-4">
                                            <p class="m-0">With YOUR HELP, #TeamSeas will work with Ocean Conservancy and its partners to remove millions of pounds of plastic and trash from beaches all around the world. We’ll also send professional crews to clean up some of the most iconic, vulnerable ocean spaces.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX LEFT-->
                            <div class="timeline-box timeline-left">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-10 col-md-5 order-1 order-md-0">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">Local Collection</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Here’s where you can get dirty! Fight side-by-side with #TeamSeas for cleaner coastal communities.</p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-md-5 order-md-2 d-none d-md-block">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-local-collection.png" alt="accumulation" width="190" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-costal-collection.png" alt="extraction" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">The International Coastal Cleanup Network Mapping</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Ocean Conservancy will use the best available science and work with its International Coastal Cleanup local partners around the world to identify places where cleanups will have the greatest impact.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX LEFT-->
                            <div class="timeline-box timeline-left">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-10 col-md-5 order-1 order-md-0">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">Removal</h3>
                                        <div class="card p-4">
                                            <p class="m-0">#TeamSeas will partner with volunteers like you to remove millions of pounds of trash from the world’s beaches and weigh the total trash collected at the end of each cleanup.</p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-md-5 order-md-2 d-none d-md-block">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-extraction.png" alt="recycling" width="190" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-recycling.png" alt="extraction" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">Recycling [if applicable]</h3>
                                        <div class="card p-4">
                                            <p class="m-0">TeamSeas will work with local authorities to make sure collected trash is properly disposed of and, where local facilities exist, we’ll recycle all accepted materials.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center my-5">
                            <a href="https://oceanconservancy.org/blog/2021/10/29/teamseas-will-transformational-ocean-lets-go/" target="_blank" class="btn btn-outline-white learn-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tabRivers" role="tabpanel">
                        <p class="text-center mb-5"><img src="../assets01.teamassets.net/assets/images/TOC_logoTM_Stacked_TOCblue.png" width="240"></p>
                        <div class="row">
                            <div class="col-8 col-sm-6 offset-sm-3 offset-2">
                                <div class="video-wrapper">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/pXDx6DjNLDU?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-line-center"></div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-the-big-idea.png" alt="seas cleanups" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">The Big Idea</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Rivers are a major source of ocean plastic pollution, with research showing that 1% of rivers account for nearly 80% of pollution flowing from rivers. #TeamSeas will work with The Ocean Cleanup to tackle trash from these rivers with their Interceptor technologies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX LEFT-->
                            <div class="timeline-box timeline-left">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-10 col-md-5 order-1 order-md-0">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">The River Interceptor</h3>
                                        <div class="card p-4">
                                            <p class="m-0">The Ocean Cleanup has developed technologies for river pollution called Interceptors, which have removed over 2 million pounds to date! One of their key technology solutions, The Interceptor™, is solar-powered and can collect trash autonomously.</p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-md-5 order-md-2 d-none d-md-block">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-seas-mapping.png" alt="mapping" width="190" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-capture.png" alt="removal" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">Research</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Every river is unique, and for that reason, together with local partners, The Ocean Cleanup’s team will first conduct research to determine the most efficient solution to clean that specific river.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX LEFT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-10 col-md-5 order-1 order-md-0">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">Collect Trash</h3>
                                        <div class="card p-4">
                                            <p class="m-0">After conducting research and setting up the necessary local partnerships, it’s time to deploy and start intercepting trash! </p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-md-5 order-md-2 d-none d-md-block">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-conveyor-belt.png" alt="recycling" width="190" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX RIGHT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-md-5 order-md-0 d-none d-md-block text-right">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-shuttle.png" alt="removal" width="190" />
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-10 col-md-5 order-2">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">Empty and Repeat</h3>
                                        <div class="card p-4">
                                            <p class="m-0">The collected trash is brought to shore to be properly disposed of by local waste management and then cleanup continues.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--TIMELINE BOX LEFT-->
                            <div class="timeline-box timeline-right">
                                <div class="row no-gutters my-4 justify-content-center align-items-strech">
                                    <div class="col-10 col-md-5 order-1 order-md-0">
                                        <h3 class="timeline-box-title font-weight-bolder text-uppercase mb-1">Going Forward</h3>
                                        <div class="card p-4">
                                            <p class="m-0">Even though the Interceptors aren’t a permanent solution, they are a safety net until waste management on land improves and we’re able to stop plastic from polluting our rivers. The Interceptors deployed with the help of #TeamSeas will keep cleaning even after the campaign comes to a close.</p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1 order-0 order-md-1"><span class="timeline-box-ball"></span></div>
                                    <div class="col-md-5 order-md-2 d-none d-md-block">
                                        <div class="timeline-box-icon d-inline-flex h-100 align-items-center">
                                            <img src="../assets01.teamassets.net/assets/images/icon-dumpster.png" alt="recycling" width="190" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center my-5">
                            <a href="https://theoceancleanup.com/teamseas/" target="_blank" class="btn btn-outline-white learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="bg-elements">
            <span class="diver-5"></span>
        </div>
        <div class="section-inner">
            <div class="container pt-5">
                <div class="footer-fish text-center">
                    <img src="../assets01.teamassets.net/assets/images/angler-fish.png" width="370" />
                </div>
            </div>
        </div>
        <div class="container pb-5 foot-link-container">
            <div class="footer-links d-flex justify-content-between py-2 flex-wrap">
                <p class="text-center"><span class="btn btn-outline-white" data-toggle="modal" data-target="#faqModal">FAQ</span></p>
                <p class="text-center"><span class="btn btn-outline-white" data-toggle="modal" data-target="#contactModal">Contact Us</span></p>
                <p class="text-center"><span class="btn btn-outline-white" data-toggle="modal" data-target="#pressModal">Press Inquiries</span></p>
                <p class="text-center"><a class="btn btn-outline-white" href="https://store.teamseas.org/" target="_blank">Store</a></p>
                <p class="text-center"><a class="btn btn-outline-white" href="https://teamtrees.org/" target="_blank">#TeamTrees</a></p>
            </div>
        </div>
        <div class="container foot-link-container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="mb-5 d-flex justify-content-around text-center">
                        <a class="text-muted text-uppercase mx-1" href="terms-of-use/index.html" target="_blank">TERMS</a>
                        <a class="text-muted text-uppercase mx-1" href="privacy-policy/index.html" target="_blank">PRIVACY</a>
                        <a class="text-muted text-uppercase mx-1" href="coppa-policy/index.html" target="_blank">Children’s Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
