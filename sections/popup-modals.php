<!-- Modal for Login  -->
<div class="modal fade" id="loginModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign
                        in</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <!--Body-->
                <div class="md-form mb-5">
                    <input type="email" id="Form-email1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                </div>

                <div class="md-form pb-3">
                    <input type="password" id="Form-pass1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
                    <div class="row">
                        <div class="col-6">
                            <p class="font-small blue-text float-left">
                                <input type="checkbox"> Remmber Me
                            </p>
                        </div>

                        <div class="col-6">
                            <p class="font-small blue-text text-right"> <a href="#" data-toggle="modal"
                                    data-target="#modalForgetForm" class="blue-text ml-1">
                                    Forgot Password?</a></p>
                        </div>
                    </div>


                </div>

                <div class="text-center mb-3">
                    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
                </div>
                <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
                    with:</p>

                <div class="row my-3 d-flex justify-content-center">
                    <!--Facebook-->
                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i
                            class="fab fa-facebook-f text-center"></i></button>
                    <!--Twitter-->
                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i
                            class="fab fa-twitter"></i></button>
                    <!--Google +-->
                    <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i
                            class="fab fa-google-plus-g"></i></button>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer mx-5 pt-3 mb-1">
                <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="" data-toggle="modal"
                        data-target="#registerModalForm" class="blue-text ml-1">
                        Sign Up</a></p>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal for Login -->


<!-- Modal for Register -->
<div class="modal fade" id="registerModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign
                        Up</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <!--Body-->
                <div class="md-form mb-5">
                    <input type="text" id="company" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="company">Comapny</label>
                </div>

                <div class="md-form mb-5">
                    <input type="text" id="fname" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="fname">First Name</label>
                </div>

                <div class="md-form mb-5">
                    <input type="text" id="lname" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="lname">Last Name</label>
                </div>

                <div class="md-form mb-5">
                    <input type="tel" id="phone" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="phone">Telephone</label>
                </div>

                <div class="md-form mb-5">
                    <input type="tel" id="mobile" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="mobile">Mobile</label>
                </div>
                <div class="md-form mb-5">
                    <input type="tel" id="fax" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="fax">Fax</label>
                </div>

                <div class="md-form mb-5">
                    <input type="text" id="address" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="address">Address</label>
                </div>

                <div class="md-form mb-5">
                    <select id="cities" class="form-control validate">
                        <option value="">Select City</option>
                        <option value="1">City 1</option>
                        <option value="2">City 2</option>
                        <option value="3">City 3</option>
                        <option value="4">City 4</option>
                        <option value="5">City 5</option>
                    </select>
                </div>

                <div class="md-form mb-5">
                    <input type="email" id="email2" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="email2">Email</label>
                </div>

                <div class="md-form mb-5">
                    <input type="text" id="where-know" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="where-know">Where Do you Know Us?</label>
                </div>

                <label class="mb-0">Upload Logo</label>
                <div class="md-form mb-5 file-upload-wrapper">
                    <input type="file" id="input-file" accept="image/*" class="form-control file-upload validate" />
                </div>

                <div class="text-center mb-3">
                    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign Up</button>
                </div>


            </div>
            <!--Footer-->

        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal for Register -->


<!--  Model for Subscribe  -->
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Subscribe</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form3" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form3">Your name</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="form2" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form2">Your email</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-indigo">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
    </div>
</div>

<!--  Model for Subscribe  -->


<!--  Model for forget Password -->

<div class="modal fade" id="modalForgetForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Forget Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="defaultForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default">Send</button>
            </div>
        </div>
    </div>
</div>

<!--  Model for forget Password -->