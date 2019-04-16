<?php include('head.php'); ?>

<title>Find Us</title>

</head>

<body>
    <!-- BODY for INDEx page starts HERE -->

    <?php include('navbar.php'); ?>

    <!-- Content starts HERE -->

    <form class="needs-validation col-sm-6 container" novalidate>
        <div class="form-group">
            <label for="fname">First name</label>
            <div>
                <input type="text" class="form-control" id="fname" placeholder="First name" required>
                <div class="invalid-feedback">
                    Enter your First name.
                </div>
            </div>
        <div class="form-group ">
            <label for="lname">Last name</label>
            <div>
                <input type="text" class="form-control" id="lname" placeholder="Last name" required>
                <div class="invalid-feedback">
                    Enter your Last name.
                </div>
            </div>
        </div>
        <div class="form-group ">
            <label for="formEmail">Email address</label>
            <div>
                <input type="email" class="form-control" id="formEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                <div class="invalid-feedback">
                    Enter your Email address!
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Please enter your comments below</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

        <script>
        // Disabling form submissions if there are invalid fields using JS
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>

    <!-- Content Ends HERE -->

<!-- FOOTER goes HERE -->

<?php include('footer.php'); ?>