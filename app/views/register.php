<?php $this->view('includes/head', $data)?>
<?php $this->view('includes/header')?>
        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="home">Home</a></li>
                                    <li class="is-marked">

                                        <a href="register">Signup</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">
                                    <div class="l-f-o__pad-box">
                                        <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                            <div class="gl-s-api">
                                                <div class="u-s-m-b-15">

                                                    <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>

                                                        <span>Signup with Facebook</span></button></div>
                                                <div class="u-s-m-b-30">

                                                    <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>

                                                        <span>Signup with Google</span></button></div>
                                            </div>
                                            
                                        <form class="l-f-o__form" method="post">
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-firstname">FIRST NAME *</label>
                                                <input value="<?= set_value('firstname')?>" class="input-text input-text--primary-style" type="text" id="firstname" name="firstname" placeholder="First Name">
                                                <?php if(!empty($errors['firstname'])):?>
                                                    <small class="text-danger"><?=$errors['firstname']?></small>
                                                <?php endif;?>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-lastname ">LAST NAME *</label>
                                                <input value="<?= set_value('lastname')?>" class="input-text input-text--primary-style" type="text" id="lastname" name="lastname" placeholder="Last Name">
                                                <?php if(!empty($errors['lastname'])):?>
                                                    <small class="text-danger"><?=$errors['lastname']?></small>
                                                <?php endif;?>
                                            </div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">

                                                    <!--====== Date of Birth Select-Box ======-->

                                                    <span class="gl-label">BIRTHDAY*</span>
                                                    <?php echo isset($data['month']) ? '<p>'.$data['month'].'</p>':''; ?>
                                                    <div class="gl-dob"><select class="select-box select-box--primary-style" name="month">
                                                            <option selected>Month</option>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                        </select><select class="select-box select-box--primary-style" name="day">
                                                            <option selected>Day</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                        </select><select class="select-box select-box--primary-style" name="year">
                                                            <option selected>Year</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                        </select>
                                                        
                                                    </div>
                                                <?php if(!empty($errors['dob'])):?>
                                                    <small class="text-danger"><?=$errors['dob']?></small>
                                                <?php endif;?>
                                                    <!--====== End - Date of Birth Select-Box ======-->
                                                </div>
                                                <div class="u-s-m-b-30">

                                                    <label class="gl-label" for="gender">GENDER</label>
                                                    <select class="select-box select-box--primary-style u-w-100" id="gender" name="gender">
                                                        <option selected>Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="male">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-email">E-MAIL *</label>
                                                <input value="<?= set_value('email')?>" class="input-text input-text--primary-style" type="text" id="email" name="email" placeholder="Email">
                                                <?php if(!empty($errors['email'])):?>
                                                    <small class="text-danger"><?=$errors['email']?></small>
                                                <?php endif;?>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-password">PASSWORD *</label>
                                                <input value="<?= set_value('password')?>" class="input-text input-text--primary-style" type="password" id="password" name="password" placeholder="Enter Password">
                                                <?php if(!empty($errors['password'])):?>
                                                    <small class="text-danger"><?=$errors['password']?></small>
                                                <?php endif;?>
                                                <input value="<?= set_value('password2')?>" class="input-text input-text--primary-style" type="password" id="password2" name="password2" placeholder="Confirm Password">
                                                
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button></div>

                                            <a class="gl-link" href="#">Return to Store</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->
<?php $this->view('includes/footer')?>

