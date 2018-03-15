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
<div class='modal fade' role='dialog' tabindex='-1' id='discmore'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h4 class='modal-title'>Disclosure</h4><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button></div>
            <div class='modal-body'>
                <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at sapien eu neque auctor vulputate in non velit. Cras varius orci at nunc placerat condimentum. Aliquam consectetur nisl a tellus fermentum, egestas blandit magna
                    molestie. Suspendisse varius, lacus sit amet iaculis dignissim, augue ante viverra elit, et scelerisque orci mi ac tellus. Donec sed ligula non lectus pharetra mollis.&nbsp;<br><a href='https://bootstrapstudio.io/app/?shell=4#'>Read More...</a><br><br><br></p>
            </div>
            <div class='modal-footer'><button class='btn btn-light' type='button' data-dismiss='modal'>Close</button></div>
        </div>
    </div>
</div>
<div class='contact-clean'>
    <form method='post'>
        <h2 class='text-center' style='margin-bottom:5px;'>Register</h2>
        <p class='text-center'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at sapien eu neque auctor vulputate in non velit.&nbsp;<br><br><br></p>
        <div class='form-group'><label>Username</label><input class='form-control' type='text' name='name'></div>
        <div class='form-group'><label>Email</label><input class='form-control' type='text' name='name'></div>
        <div class='form-group'><label>Password</label><input class='form-control' type='password'></div>
        <div class='form-group'><label>Confirm Password</label><input class='form-control' type='password'></div>
        <div class='form-row'>
            <div class='col'>
                <div class='form-group'><label>Age</label>
                    <div class='dropdown'><button class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button' style='margin-top:0px;'>Dropdown </button>
                        <div class='dropdown-menu' role='menu'>

                            <a class='dropdown-item' role='presentation' href='#'>First Item</a>
                            <a class='dropdown-item' role='presentation' href='#'>Second Item</a>
                            <a class='dropdown-item' role='presentation' href='#'>Third Item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col'>
                <div class='form-group'><label>Country</label>
                    <div class='dropdown'><button class='btn btn-primary dropdown-toggle' data-toggle='dropdown' aria-expanded='false' type='button' style='margin-top:0px;'>Dropdown </button>
                        <div class='dropdown-menu' role='menu'>
                            <?php
                            include ('getCountries.php');
                            ?>
                            <a class='dropdown-item' role='presentation' href='#'>First Item</a>
                            <a class='dropdown-item' role='presentation' href='#'>Second Item</a>
                            <a class='dropdown-item' role='presentation' href='#'>Third Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='form-group' style='margin-bottom:5px;'><label>Education Level</label>
            <div class='dropdown'><button class='btn btn-primary dropdown-toggle btn-long' data-toggle='dropdown' aria-expanded='false' type='button' style='margin-top:0px;'>Dropdown </button>
                <div class='dropdown-menu' role='menu'>
                    <a class='dropdown-item' role='presentation' href='#'>First Item</a>
                    <a class='dropdown-item' role='presentation' href='#'>Second Item</a>
                    <a class='dropdown-item' role='presentation' href='#'>Third Item</a>
                </div>
            </div>
        </div>
        <div class='form-group'><label>Gender</label>
            <div class='form-row'>
                <div class='col d-flex justify-content-center'>
                    <div class='form-check form-check-inline'><input class='form-check-input' type='radio' id='gender1' name='gender' value='male'><label class='form-check-label' for='formCheck-1'>Male</label></div>
                </div>
                <div class='col d-flex justify-content-center'>
                    <div class='form-check form-check-inline'><input class='form-check-input' type='radio' id='gender2' name='gender' value='female'><label class='form-check-label float-none' for='formCheck-1'>Female</label></div>
                </div>
                <div class='col d-flex justify-content-center' id='radiocenter'>
                    <div class='form-check form-check-inline'><input class='form-check-input' type='radio' id='gender3' name='gender' value='other'><label class='form-check-label' for='formCheck-1'>Other</label></div>
                </div>
            </div>
        </div>
        <div class='form-group' style='margin-bottom:0px;'><label>Disclosure</label>
            <div class='form-row'>
                <div class='col col-l'>
                    <p class='text-nowrap float-left' style='font-size:15px;margin-bottom:0px;'>Please read the full disclosure&nbsp;<a href='#discmore' style='font-size:15px;' data-toggle='modal'>here</a></p>
                </div>
                <div class='col d-flex justify-content-center'>
                    <div class='form-check form-check-inline d-block d-flex justify-content-end' style='font-size:20px;'><input class='form-check-input' type='checkbox' id='formCheck-2'><label class='form-check-label' for='formCheck-2' style='font-size:15px;'>I Agree</label></div>
                </div>
            </div>
        </div>
        <div class='form-group d-flex justify-content-center'><button class='btn btn-primary' type='submit'>register</button></div>
    </form>
</div>
<script src='assets/js/jquery.min.js'></script>
<script src='assets/bootstrap/js/bootstrap.min.js'></script>
<script src='assets/js/a-popover.js'></script>
<script src='assets/js/add-rem-elements.js'></script>
<script src='assets/js/sidebar-menu.js'></script>
<script src='assets/js/u-popover.js'></script>
</body>

</html>


