<?php include 'inc/header-checkout.php'; ?>

<div class="container" style="margin-top: 80px;" >
            <div class="row">
                <div class="col">
                    <div class ="d-flex">
                        <div class="checkout-header-section-styling checkout-actieve">
                            Checkout
                        </div>
                        <div class="checkout-header-section-styling confirmation-text-opacity">
                            Confirmation
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-5">
                <div class="col-md-7 col-sm-12">
                    <div  id = "shippingAddress">
                        <div id = "shippingAddressForm">
                            <h4 class="text-center mb-3">Delivery Address</h4>
                            <hr>
                            <label><sup>*</sup> Required Infomation</label>
                            <form >
                                <div class="form-group">
                                    <label class="mt-3 mb-0" for="shippingTitle">Title <sup>*</sup></label>
                                    <input type="Text" 
                                        class="form-control" 
                                        name="shippingTitle" 
                                        ngModel 
                                        required
                                        text
                                        id="shippingTitle">
                                    <div class="check-out-flex-container"> 
                                            <div class = "flex-child firstName-margin">
                                                <label class="mt-1 mb-0" for="firstName">First Name <sup>*</sup></label>
                                                <input type="Text" 
                                                class="form-control" 
                                                name="userFirstName" 
                                                ngModel 
                                                required
                                                text
                                                id="userFirstName">
                                            </div>
                                            <div class = "flex-child lastName-margin"> 
                                                <label class="mt-1 mb-0" for="lastName">Last Name <sup>*</sup></label>
                                                <input type="Text" 
                                                class="form-control" 
                                                name="userLastName" 
                                                ngModel 
                                                required
                                                text
                                                id="userLastName">
                                            </div>  
                                        </div>
                                    <label class="mt-1 mb-0" for="shippingAddressLine1">Address Line 1 <sup>*</sup></label>
                                    <input type="Text" 
                                            class="form-control" 
                                            name="shippingAddress1" 
                                            ngModel 
                                            required
                                            text
                                            id="shippingAddress1">
                                    <label class="mt-1 mb-0" for="shippingAddressLine2">Address Line 2</label>
                                    <input type="Text" 
                                            class="form-control" 
                                            name="shippingAddress2" 
                                            ngModel 
                                            text
                                            id="shippingAddress2">
                                    <label class="mt-1 mb-0" for="shippingCity">City<sup>*</sup></label>
                                    <input type="Text" 
                                            class="form-control" 
                                            name="shippingC/ity" 
                                            ngModel 
                                            text
                                            id="shippingCity">
                                    <label class="mt-1 mb-0" for="shippingState">State<sup>*</sup></label>
                                    <input type="Text" 
                                            class="form-control" 
                                            name="shippingState" 
                                            ngModel 
                                            text
                                            id="shippingState">
                                    <label class="mt-1 mb-0" for="shippingCountry">Country</label>
                                    <input type="Text" 
                                            class="form-control" 
                                            name="shippingCountry" 
                                            ngModel 
                                            text
                                            id="shippingCountry">
                                    <label class="mt-1 mb-0" for="shippingPostCode">Post Code  <sup>*</sup></label>
                                    <input type="Text" 
                                            class="form-control" 
                                            name="shippingPostCode" 
                                            ngModel 
                                            text
                                            id="shippingPostCode">
                                            <label class="mt-1 mb-0" for="shippingPhoneNumber">Phone Number  <sup>*</sup></label>
                                    <input type="text" 
                                            class="form-control" 
                                            name="shippingPhoneNumber" 
                                            ngModel 
                                            number
                                            id="shippingPhoneNumber">
                                </div>
                                
                            </form>
                        </div>
                
                    </div>
                </div>

                <div class="col-md-5 col-sm-12">
                    <div>
                        <h4 class="text-center mb-3"> Order Summary</h4>
                    </div>
                    <hr>
                    <div id = "product-list-block" class = "mt-3" *ngFor="let item of checkOutProductCount">
                        <div class="mian-wrapper"> 
                            <div class="img-child">
                                <img src= "https://imli-mystore-images.storage.googleapis.com/imli-su/STfP6amrXCQrctzSX/img-1605780034071-5Jk5Ju" alt="ProductThumbNail" class="product-thumbnail">
                            </div>
                            <div class="description-child">
                                <p class="product-header"> Muguet</p>
                                <p class="product-description"> 50ML  EDP   </p> 
                                <p class="product-description"> Quantiry: 2</p>
                            </div> 
                            <div class="price-child">
                                <p class="product-description-price">$4999</p>
                            </div> 
                        </div>
                        <hr>
                    </div>
                    <!-- Cart Total Section -->
                    <div class="mian-wrapper bottom-margin">
                        <div class="price-total-child">
                            <P class="sub-price-header ">Cart Total</P>
                        </div>
                        
                        <div class="price-child">
                            <p class="product-description-price">$4999</p>
                        </div> 
                    </div>
                    <hr>
                    <!-- Discount Section -->
                    <div class="mian-wrapper bottom-margin">
                        <div class="price-total-child">
                            <P class="sub-price-header ">Discount</P>
                        </div>
                        
                        <div class="price-child">
                            <p class="product-description-price"> - $4999</p>
                        </div> 
                    </div>
                    <hr>
                    <!-- Shipping Section -->
                    <div class="mian-wrapper bottom-margin">
                        <div class="price-total-child">
                            <P class="sub-price-header">Shipping</P>
                        </div>
                        
                        <div class="price-child">
                            <p class="product-description-price">$375</p>
                        </div> 
                    </div>
                    <hr>
                    <!-- Grand Total Section -->
                    <div class="mian-wrapper bottom-margin">
                        <div class="price-total-child">
                            <P class="text-uppercase ">Total</P>
                        </div>
                        
                        <div class="price-child">
                            <p style="float: right;">$4999</p>
                        </div> 
                    </div>
                    <hr>
                    
                </div>
            </div>

            <!-- payment section -->
            <div class="row mt-3">
                <div class="col-md-7 col-sm-12">
                <hr>
                <div>
                    <h4 class="text-center mb-3"> Payment</h4>
                </div>
                    <hr>
                    <div class="mb-5 pay-button-flex">
                        <div>
                            <h4 class="text-center mb-3">Please Accept Our Terms And Conditions</h4>
                            <div class="custom-control custom-checkbox mt-3">
                                <input type="checkbox" class="custom-control-input"id="userConsent">
                                <label class="custom-control-label" for="userConsent">I accept the <a [routerLink]="['/terms-and-conditions']" target="new">
                                    General Terms and Conditions of Sale </a>  and consent to the processing of my data, in accordance with 3003BC 
                                    <a [routerLink]="['/privacy-and-cookies']" target="new"> Privacy Policy</a>.</label>
                            </div>  
                        </div>
                        
                    </div>
                    <div class="pay-btn-postion">
                        <button class="btn btn-primary checkout-buttom"> Pay Now </button>
                    </div>
                    <hr>
                </div>

                <div class="col-md-5 col-sm-12 ">
                    <hr>
                    <div>
                        <h4 class="text-center mb-3"> General Informaiton </h4>
                    </div>
                    <div class="mian-wrapper">
                        <div style="flex: 1;" class="text-center">
                            <a [routerLink]="['/returns-and-cancellations']" target="new">
                                <span class="material-icons" style="font-size: 3rem;">
                                    swap_horiz
                                    </span>
                                <p>
                                    Returns and Cancellation
                                </p>
                            </a>
                        </div>
                        <div style="flex: 1;" class="text-center">
                            <div style="flex: 1;">
                                    <a href="">
                                    <span class="material-icons" style="font-size: 3rem;">
                                        local_shipping
                                        </span>
                                        <p>
                                            Shipping Informaiton
                                        </p>
                                </a>
                            </div>

                        </div>

                    </div>
                    <hr>
                </div>
                

            </div>

        </div>

<?php include 'inc/footer-checkout.php'; ?>