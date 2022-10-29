<style>
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.content {
    padding: 50px 100px;
}

.content h2 {
    padding: 0;
    margin: 0 0 20px;
    font-size: 30px;
}

.content p {
    font-size: 18px;
}

.sidebar-contact {
    position: fixed;
    top: 50%;
    left: -350px;
    transform: translateY(-50%);
    width: 350px;
    height: auto;
    padding: 40px;
    background: #fff;
    box-shadow: 0 20px 50px rgba(0, 0, 0, .5);
    box-sizing: border-box;
    transition: 0.5s;
}

.sidebar-contact.active {
    left: 0;
}

.sidebar-contact input,
.sidebar-contact select,
.sidebar-contact textarea {
    width: 100%;
    height: 36px;
    padding: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid rgba(0, 0, 0, .5);
    outline: none;
}

.sidebar-contact h2 {
    margin: 0 0 20px;
    padding: 0;
}

.sidebar-contact textarea {
    height: 60px;
    resize: none;
}

.sidebar-contact input[type="submit"] {
    background: #00bcd4;
    color: #fff;
    cursor: pointer;
    border: none;
    font-size: 18px;
}

.toggle.active:before {
    content: '\f00d';
    font-family: fontAwesome;
    font-size: 18px;
    color: #fff;
    position: absolute;
    height: 48px;
    width: 48px;
    text-align: center;
    cursor: pointer;
    background: #f00;
    top: 0;
    right: -48px;
    line-height: 48px;
}

@media(max-width:1024px) {
    .toggle.active:before {
        top: -40px;
    }

    .sidebar-contact {
        width: 100%;
        left: -100%;
    }

    .sidebar-contact .toggle {
        top: 50%;
        transform: translateY(-50%);
        transition: 0.5s;
    }

    .sidebar-contact.active {
        top: 300px;
    }

    .sidebar-contact.active .toggle {
        top: 0;
        right: 0;
        transform: translateY(0);
    }

    .scroll {
        width: 100%;
        height: 100%;
        overflow-y: auto;
    }

    .content {
        padding: 50px 50px;
    }

    .hidepop {
        display: none;
    }
}
</style>
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</head>


<body>
    <div class="sidebar-contact" style="z-index:9999999999999999;">
        <div class="toggle" onclick="div_hide()"></div>
        <h2>Book An Appointment</h2>
        <div class="scroll">
            <form method="post" action="formaction.php" id="bookForm">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="PhoneNumber" class="sideinputphone" minlength="10" maxlength="10"
                    placeholder="Phone Number" required>
                <span id="sidephone" style="display:block"></span>
                <select class="" name="branch">
                    <option selected>Select Branch</option>
                    <option value="Akurdi">Akurdi Branch</option>
                    <option value="Wakad">Wakad Branch</option>
                    <option value="Baner">Baner Branch</option>
                    <option value="Pimple">Pimple Saudagar Branch</option>
                    <option value="Hinjewadi">Hinjewadi Branch</option>
                </select>
                <textarea name="comments" placeholder="Message here.." id="message" required></textarea>
                <div style="display:flex;">
                    <input name="date" style="text-align:center;width:50%"
                        class="form-control input-group date input-group-addon" type="text" id="VisitorDtime2"
                        value="<?php date_default_timezone_set('Asia/Calcutta'); echo date("d-m-Y"); ?>"
                        style="padding-left: 73px;" required>

                    <input name="time" style="text-align:center;width:50%"
                        class="form-control input-group date input-group-addon" type="text" id="Visitortime2"
                        value="<?php date_default_timezone_set('Asia/Calcutta'); echo date("h:i a"); ?>"
                        style="padding-left: 73px;" required>
                    <div id="bookForm1"></div>
                </div>
                <input type="submit" name="submit" class="subside" value="Make Your Appointment" onclick="fun()"
                    required>
            </form>
        </div>
    </div>





    <style>
    .element.style {
        padding-left: 82px;
    }

    .form-control {
        display: block;
        width: 100%;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5;
        color: rgb(33, 37, 41);
        background-color: rgb(255, 255, 255);
        background-clip: padding-box;
        appearance: none;
        padding: 0.375rem 0.75rem;
        border-width: 1px;
        border-style: solid;
        border-color: rgb(206, 212, 218);
        border-image: initial;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    }
    </style>



    <script>
    $(document).ready(function() {
        $('.toggle1').click(function() {
            $('.sidebar-contact').toggleClass('active');
            $('.sidebar-contact').css('display', 'block');
            $('.toggle').toggleClass('active');
            $('.orange').css('display', 'none');
        });
        $('.toggle').click(function() {
            $('.sidebar-contact').fadeOut();
            $('.orange').css('display', 'block');
        })
    })
    </script>

    <script>
    $(document).ready(function() {
        date_default_timezone_set('Asia/Calcutta');
        $("#bookForm1").hide();
        $("#message").keyup(function() {
            time_val();
        });

        function time_val() {
            let time = $("#Visitortime2").val();
            if (time > 10 || time <= 20) {
                $("#bookForm1").show().html("Please choose Appointment timing between 10:00 Am to 08:00pm").css(
                    "color", "red").focus();
                return false;
            } else {
                $("#bookForm1").hide();
            }
        }
    });
    </script>

    <script>
    (function(w, d) {
        w.CollectId = "629862db9f8d485e3467b441";
        var h = d.head || d.getElementsByTagName("head")[0];
        var s = d.createElement("script");
        s.setAttribute("type", "text/javascript");
        s.async = true;
        s.setAttribute("src", "https://collectcdn.com/launcher.js");
        h.appendChild(s);
    })(window, document);
    </script>