<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>The Web Survey Tool</title>
    <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/fonts/font-awesome.min.css'>
    <link rel='stylesheet' href='assets/css/footer.css'>
    <link rel='stylesheet' href='assets/css/loginform.css'>
    <link rel='stylesheet' href='assets/css/popover.css'>
    <link rel='stylesheet' href='assets/css/previewratings.css'>
    <link rel='stylesheet' href='assets/css/registrationform.css'>
    <link rel='stylesheet' href='assets/css/sidebar-menu.css'>
    <link rel='stylesheet' href='assets/css/sidebar.css'>
    <link rel='stylesheet' href='assets/css/starratings.css'>
    <link rel='stylesheet' href='assets/css/styles.css'>
</head>

<body>
<div>
    <div class='container' style='padding-top:80px;margin-top:80px;'>
        <div class='row'>
            <div class='col-md-12'><i class='fa fa-flask d-flex flex-row justify-content-center align-content-center' style='font-size:150px;'></i>
                <h1 class='text-center' style='margin-bottom:-5px0px;font-size:74px;'>LMFAO</h1>
                <h6 class='text-center'>Laughter, Mirth, &amp; Funniness Assessment Operation</h6>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12' style='margin-top:20px;'>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at sapien eu neque auctor vulputate in non velit. Cras varius orci at nunc placerat condimentum. Aliquam consectetur nisl a tellus fermentum, egestas blandit magna molestie.
                    Suspendisse varius, lacus sit amet iaculis dignissim, augue ante viverra elit, et scelerisque orci mi ac tellus. Donec sed ligula non lectus pharetra mollis.&nbsp;<br><a class='float-right' href='#readmore' data-toggle='modal'>Read More...</a><br></p>
            </div>
            <div class='col'>
                <div class='btn-group btn-group-lg d-inline-block float-none d-flex flex-row justify-content-center' role='group' style='margin-top:20px;'><a class='btn btn-primary' role='button' href='Registration.html' style='margin-right:10px;'>New User</a><a class='btn btn-primary' role='button' href='u-login.html' style='margin-left:5px;'>Recurring User</a></div>
            </div>
        </div>
    </div>
</div>
<div class='footer-basic' style='margin-top:100px;'>
    <footer class='mb-auto'>
        <ul class='list-inline'>
            <li class='list-inline-item'><a href='#about' data-toggle='modal'>About</a></li>
            <li class='list-inline-item'><a href='#contact' data-toggle='modal'>Contact Us</a></li>
        </ul>
        <p class='copyright'>Company Name © 2017</p>
    </footer>
</div>
<div class='modal fade' role='dialog' tabindex='-1' id='fuser'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h4 class='modal-title'>Forgot Your Username?</h4><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button></div>
            <div class='modal-body' style='padding:0px;'>
                <form action='javascript:void();' method='get' id='contactForm' style='padding-right:16px;padding-left:16px;'>
                    <div class='form-group has-feedback'>
                        <p><br>Please enter the email address associated with your user account. Your username will be emailed to the email address on file.<br><br></p><input class='form-control' type='email' name='from_email' required='' placeholder='Email Address'
                                                                                                                                                                               autofocus='' id='from_email' style='height:42px;'></div>
                </form>
            </div>
            <div class='modal-footer'><button class='btn btn-primary' type='button' style='margin-top:0px;'>Submit</button></div>
        </div>
    </div>
</div>
<div class='modal fade' role='dialog' tabindex='-1' id='contact'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h4 class='modal-title'>Contact Us</h4><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button></div>
            <div class='modal-body' style='padding:0px;'>
                <form action='javascript:void();' method='get' id='contactForm' style='padding-right:16px;padding-left:16px;'>
                    <div class='form-group has-feedback'><label for='from_email'>Email</label><input class='form-control' type='email' name='from_email' required='' placeholder='Email Address' autofocus='' id='from_email' style='height:42px;'></div>
                    <div class='form-group has-feedback'><label for='from_phone'>Subject</label>
                        <div class='dropdown'><button class='btn btn-primary dropdown-toggle btn-long' data-toggle='dropdown' aria-expanded='false' type='button'>Dropdown </button>
                            <div class='dropdown-menu' role='menu'><a class='dropdown-item' role='presentation' href='#'></a><a class='dropdown-item' role='presentation' href='#'>Second Item</a><a class='dropdown-item' role='presentation' href='#'>Third Item</a><a class='dropdown-item'
                                                                                                                                                                                                                                                                         role='presentation' href='#'>Menu Item</a><a class='dropdown-item' role='presentation' href='#'>Menu Item</a></div>
                        </div>
                    </div>
                    <div class='form-group'><label for='comments'>Message</label><textarea class='form-control' rows='5' name='Comments' placeholder='Enter comments here' autofocus='' id='comments'></textarea></div>
                    <div class='form-group'><button class='btn btn-primary btn-block' type='submit'>Send <i class='fa fa-chevron-circle-right'></i></button></div>
                </form>
            </div>
            <div class='modal-footer'></div>
        </div>
    </div>
</div>
<div class='modal fade' role='dialog' tabindex='-1' id='readmore'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h4 class='modal-title'>Project Name</h4><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button></div>
            <div class='modal-body'>
                <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at sapien eu neque auctor vulputate in non velit. Cras varius orci at nunc placerat condimentum. Aliquam consectetur nisl a tellus fermentum, egestas blandit magna
                    molestie. Suspendisse varius, lacus sit amet iaculis dignissim, augue ante viverra elit, et scelerisque orci mi ac tellus. Donec sed ligula non lectus pharetra mollis. Donec leo sapien, tempor eget est vel, vestibulum aliquet dui.
                    Morbi at nibh mauris. Nullam consequat sed nibh eget rutrum. Cras sit amet eros auctor, bibendum lacus sit amet,<br><br></p>
            </div>
            <div class='modal-footer'><button class='btn btn-light' type='button' data-dismiss='modal'>Close</button></div>
        </div>
    </div>
</div>
<div class='modal fade' role='dialog' tabindex='-1' id='about'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h4 class='modal-title'>About Team</h4><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button></div>
            <div class='modal-body'>
                <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at sapien eu neque auctor vulputate in non velit. Cras varius orci at nunc placerat condimentum. Aliquam consectetur nisl a tellus fermentum, egestas blandit magna
                    molestie. Suspendisse varius, lacus sit amet iaculis dignissim, augue ante viverra elit, et scelerisque orci mi ac tellus. Donec sed ligula non lectus pharetra mollis. Donec leo sapien, tempor eget est vel, vestibulum aliquet dui.
                    Morbi at nibh mauris. Nullam consequat sed nibh eget rutrum. Cras sit amet eros auctor, bibendum lacus sit amet,<br><br></p>
            </div>
            <div class='modal-footer'><button class='btn btn-light' type='button' data-dismiss='modal'>Close</button></div>
        </div>
    </div>
</div>
<script src='assets/js/jquery.min.js'></script>
<script src='assets/bootstrap/js/bootstrap.min.js'></script>
<script src='assets/js/a-popover.js'></script>
<script src='assets/js/add-rem-elements.js'></script>
<script src='assets/js/sidebar-menu.js'></script>
<script src='assets/js/u-popover.js'></script>
</body>

</html>


<?php
/**
 * Created by PhpStorm.
 * User: DNam
 * Date: 3/15/2018
 * Time: 12:38 PM
 */
?>