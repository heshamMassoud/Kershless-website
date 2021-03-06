// Required for drag and drop file access
jQuery.event.props.push('dataTransfer');

$(function () {

    var profile_picture_name = "empty";
    var weight_image_name = "empty";
    var height_image_name = "empty";

    // test

    // ########## Right Column JS Server Validation####################
    if ($('#fullname').attr('class') == 'form-control input_form_error') {
        $('#fullname').attr('title', $('#fullname_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#fullname').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#fullname').tipsy('show');
    }

    if ($('#fullname_english').attr('class') == 'form-control input_form_error') {
        $('#fullname_english').attr('title', $('#fullname_english_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#fullname_english').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#fullname_english').tipsy('show');
    }

    if ($('#nationality').attr('class') == 'form-control input_form_error') {
        $('#nationality').attr('title',
            $('#nationality_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#nationality').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#nationality').tipsy('show');
    }

    if ($('#country').attr('class') == 'form-control input_form_error') {
        $('#country').attr('title', $('#country_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#country').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#country').tipsy('show');
    }
    // ########## Middle Column JS Client Validation####################
    if ($('#profile_picture_upload').attr('class') == 'input_form_error') {
        $('#profile_picture_upload').attr('title',
            $('#profile_picture_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#profile_picture_upload').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#profile_picture_upload').tipsy('show');
    }

    if ($('#weight_upload_div').attr('class') == 'col-md-6 rightdiv input_form_error') {
        $('#weight_upload_div').attr('title',
            $('#weight_image_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#weight_upload_div').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#weight_upload_div').tipsy('show');
    }

    if ($('#height_upload_div').attr('class') == 'col-md-6 leftdiv input_form_error') {
        $('#height_upload_div').attr('title',
            $('#height_image_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#height_upload_div').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#height_upload_div').tipsy('show');
    }

    if ($('#weight').attr('class') == 'col-md-6 input_form_error') {
        $('#weight').attr('title', $('#weight_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#weight').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 'w'
        });
        $('#weight').tipsy('show');
    }

    if ($('#height').attr('class') == 'col-md-6 leftdiv input_form_error') {
        $('#height').attr('title', $('#height_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#height').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 'e'
        });
        $('#height').tipsy('show');
    }

    if ($('#reason').attr('class') == 'input_form_error') {
        $('#reason').attr('title', $('#reason_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#reason').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#reason').tipsy('show');
    }

    if ($('#provocation').attr('class') == 'input_form_error') {
        $('#provocation').attr('title',
            $('#provocation_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#provocation').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 'n'
        });
        $('#provocation').tipsy('show');
    }

    if ($('#friend_code').attr('class') == 'form-control input_form_error') {
        $('#friend_code').attr('title',
            $('#friend_code_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#friend_code').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#friend_code').tipsy('show');
        return false;
    }
    // ########## Left Column JS Client Validation####################

    if ($('#mobile_number').attr('class') == 'col-md-8 form-control mob input_form_error') {
        $('#mobile_number').attr('title',
            $('#mobile_number_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#mobile_number').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#mobile_number').tipsy('show');
    }

    if ($('#dial_code').attr('class') == 'col-md-3 form-control mobCode input_form_error') {
        $('#dial_code').attr('title',
            $('#dial_code_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#dial_code').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#dial_code').tipsy('show');
    }

    if ($('#email').attr('class') == 'col-md-12 form-control input_form_error') {
        $('#email').attr('title', $('#email_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#email').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#email').tipsy('show');
    }

    if ($('#facebook').attr('class') == 'col-md-12 form-control input_form_error') {
        $('#facebook').attr('title', $('#facebook_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#facebook').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#facebook').tipsy('show');
        return false;
    }

    if ($('#overall_agreement_hidden_error').attr('value') != '') {
        // alert($('#overall_agreement_hidden_error').attr('value'));
        $('#overall_agreement').attr('title',
            $('#overall_agreement_hidden_error').attr('value'));
        // alert($('#fullname').attr('title'));
        $('#overall_agreement').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#overall_agreement').tipsy('show');
    }

    // ////--------------------------------------------------------------------------------------------

    //

    $("#profile_picture_upload")
        .on(
        'drop',
        function (e) {
            if (!e)
                e = window.event;
            $('#profile_picture_upload')
                .attr('style',
                'background: url(\'/Assets/Images/loader.gif\') no-repeat 50 50');
            var x = document
                .getElementById("profile_picture_upload");
            if (x.firstChild != null && (e.target.files[0] != null)) {
                x.removeChild(x.firstChild);
            }
            // Or else the browser will open the file
            e.preventDefault && e.preventDefault();
            $("#profile_picture_upload").attr('class', 'normal');
            // Do something with the file(s)
            var files = e.dataTransfer.files;
            var formData = new FormData();

            var file = e.dataTransfer.files[0];

            formData.append('file', file);
            if (file.type.match('image.*')) {
                // Deal with file
                // now post a new XHR request
                var xhr = new XMLHttpRequest();
                if (profile_picture_name == "empty") {

                } else {
                    // alert(image_name);
                    // alert("/kershlesswebsite/uploads/" +
                    // image_name);
                    $.ajax({
                        type: 'POST',
                        data: {
                            action: 'deleteimage',
                            imagefile: profile_picture_name,
                        },
                        url: '/Assets/scripts/delete_file.php',
                        success: function (msg) {
                            // alert(msg);
                        }
                    })

                }

                xhr.open('POST',
                    '/Assets/scripts/handle_file_upload.php',
                    true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // alert(this.response.indexOf("Invalid
                        // file"));
                        if (this.response.indexOf("Invalid file") >= 0) {
                            alert("Invalid file uploaded!");
                        } else {
                            var image = document
                                .createElement('img');
                            resp = JSON.parse(this.response);
                            image.src = resp.dataUrl;
                            profile_picture_name = resp.name;

                            setTimeout(
                                function () {
                                    var imageWidth = image.width;
                                    var imageHeight = image.height;

                                    var aspectRatio = imageWidth
                                        / imageHeight;
                                    // alert(image.width + "X" +
                                    // image.height);
                                    image.width = "126";
                                    image.id = "draggableImg0";
                                    image.height = (126 * imageHeight)
                                    / (imageWidth);
                                    image.style.left = "0px";
                                    image.style.top = image.height
                                    / 4 + "px";
                                    // alert(image.width + "X" +
                                    // image.height);

                                    var x = document
                                        .getElementById("profile_picture_upload");
                                    // x.style.backgroundColor =
                                    // "white";
                                    var newDiv = document
                                        .createElement("div");
                                    newDiv.id = "draggable0";
                                    newDiv.style.cursor = "move";
                                    x.appendChild(newDiv);
                                    newDiv.appendChild(image);

                                    $("#draggable0")
                                        .draggable();

                                }, 100);
                            /*
                             * $.post("<?php echo base_url();
                             * ?>test/add", {name: msg},
                             * function(data) {
                             * $this.load(data.url); },"json");
                             *
                             */
                            $('#profile_picture_upload')
                                .attr('style',
                                'background: url(\'/Assets/Images/loader.gif\') no-repeat 150 150');
                        }
                        // console.log('all done: ' + xhr.status);
                    } else {
                        alert("Something went terribly wrong...!");
                        // console.log('Something went terribly
                        // wrong...');
                    }
                };
                xhr.send(formData);
                $('#profile_picture_upload').tipsy('hide');
                // $('#profile_picture_upload').attr('class','normal');

            } else {
                // alert("However you want to handle error that
                // dropped file wasn't an image");
                alert(":) لو سمحت حط صورة");
            }

        });

    $("#profile_picture_upload").hover(
        function () {
            $(this).css('cursor', 'pointer');
            $('#profile_picture_upload').attr('title',
                'Drag & Drop or Click to upload');
            // alert($('#fullname').attr('title'));
            $('#profile_picture_upload').tipsy({
                trigger: 'hover',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#profile_picture_upload').tipsy('show');
            // $("#profile_picture_upload").attr('class',
            // 'hover');TEMPORARY(HARGA3LAHA)
        }, function () {
            $('#profile_picture_upload').tipsy('hide');
            // $("#profile_picture_upload").attr('class',
            // 'normal');TEMPORARY(HARGA3LAHA)
        });

    $("#profile_picture_file_upload")
        .change(
        function (e) {
            if (!e)
                e = window.event;
            $('#profile_picture_upload')
                .attr('style',
                'background: url(\'/Assets/Images/loader.gif\') no-repeat 55 55');
            var x = document
                .getElementById("profile_picture_upload");
            if (x.firstChild != null && (e.target.files[0] != null)) {
                x.removeChild(x.firstChild);
            }

            var formData = new FormData();
            var file = e.target.files[0];// should be changed to
            // e for firefox
            formData.append('file', file);
            if (file.type.match('image.*')) {
                // Deal with file
                // now post a new XHR request
                var xhr = new XMLHttpRequest();
                if (profile_picture_name == "empty") {

                } else {
                    // alert(image_name);
                    // alert("/kershlesswebsite/uploads/" +
                    // image_name);
                    $.ajax({
                        type: 'POST',
                        data: {
                            action: 'deleteimage',
                            imagefile: profile_picture_name,
                        },
                        url: '/Assets/scripts/delete_file.php',
                        success: function (msg) {
                            // alert(msg);
                        }
                    })
                }
                xhr.open('POST',
                    '/Assets/scripts/handle_file_upload.php',
                    true);

                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // alert(this.response.indexOf("Invalid
                        // file"));
                        if (this.response.indexOf("Invalid file") >= 0) {
                            alert("Invalid file uploaded!");
                        } else {
                            var image = document
                                .createElement('img');
                            resp = JSON.parse(this.response);

                            image.src = resp.dataUrl;
                            profile_picture_name = resp.name;

                            setTimeout(
                                function () {
                                    var imageWidth = image.width;
                                    var imageHeight = image.height;

                                    var aspectRatio = imageWidth
                                        / imageHeight;
                                    // alert(image.width + "X" +
                                    // image.height);
                                    image.width = "126";
                                    image.id = "draggableImg0";
                                    image.height = (126 * imageHeight)
                                    / (imageWidth);
                                    image.style.left = "0px";
                                    image.style.top = image.height
                                    / 4 + "px";
                                    // alert(image.width + "X" +
                                    // image.height);

                                    var x = document
                                        .getElementById("profile_picture_upload");

                                    var newDiv = document
                                        .createElement("div");
                                    newDiv.id = "draggable0";
                                    newDiv.style.cursor = "move";
                                    x.appendChild(newDiv);
                                    newDiv.appendChild(image);

                                    $("#draggable0")
                                        .draggable();
                                }, 100);
                            // alert('uploaded');
                            $('#profile_picture_upload')
                                .attr('style',
                                'background: url(\'/Assets/Images/loader.gif\') no-repeat 150 150');
                        }
                        // console.log('all done: ' + xhr.status);
                    } else {
                        alert("Something went terribly wrong...!");
                    }
                };
                xhr.send(formData);
                $('#profile_picture_upload').tipsy('hide');

                // $('#profile_picture_upload').attr('class','normal');
            } else {
                alert(":) لو سمحت حط صورة");
            }
        });

    $("#bottom_middle_submit")
        .click(
        function (event) {
            var full_name_validator = false;
            var full_name_english_validator = false;
            var weight_validator = false;
            var height_validator = false;
            var nationality_validator = true;
            var country_validator = true;
            var reason_validator = false;
            var provocation_validator = false;
            var email_validator = false;
            var facebook_validator = false;
            var mobile_number_validator = false;
            var dial_code_validator = false;
            var profile_picture_validator = true;
            var weight_image_validator = true;
            var height_image_validator = true;
            var overall_checkbox_validator = true;
            if (!document.getElementById("overall_agreement").checked) {
                $('#overall_agreement').attr('title',
                    '	إقرار البيانات من فضلك');
                $('#overall_agreement').tipsy({
                    trigger: 'manual',
                    fade: false,
                    html: true,
                    opacity: 1,
                    gravity: 's'
                });
                $('#overall_agreement').tipsy('show');
                overall_checkbox_validator = false;
            }
            if (height_image_name == "empty") {
                $("#height_upload_div").attr('class',
                    'col-md-6 leftdiv input_form_error');
                $('#height_upload_div').attr('title',
                    'صورة طولك من فضلك');
                // alert($('#fullname').attr('title'));
                $('#height_upload_div').tipsy({
                    trigger: 'manual',
                    fade: false,
                    html: true,
                    opacity: 1,
                    gravity: 's'
                });
                $('#height_upload_div').tipsy('show');
                height_image_validator = false;
            }
            if (weight_image_name == "empty") {
                $("#weight_upload_div").attr('class',
                    'col-md-6 rightdiv input_form_error');
                $('#weight_upload_div').attr('title',
                    '	صورة وزنك من فضلك');
                // alert($('#fullname').attr('title'));
                $('#weight_upload_div').tipsy({
                    trigger: 'manual',
                    fade: false,
                    html: true,
                    opacity: 1,
                    gravity: 's'
                });
                $('#weight_upload_div').tipsy('show');
                weight_image_validator = false;
            }
            if (profile_picture_name == "empty") {
                $("#profile_picture_upload").attr('class',
                    'input_form_error');
                $('#profile_picture_upload').attr('title',
                    'الصورة الشخصية من فضلك');
                // alert($('#fullname').attr('title'));
                $('#profile_picture_upload').tipsy({
                    trigger: 'manual',
                    fade: false,
                    html: true,
                    opacity: 1,
                    gravity: 's'
                });
                $('#profile_picture_upload').tipsy('show');
                profile_picture_validator = false;
            }
            if (mobile_number_client_validation_blur()) {
                mobile_number_validator = true;
            }
            if (dial_code_client_validation_blur()) {
                dial_code_validator = true;
            }
            if (facebook_client_validation_blur()) {
                facebook_validator = true;
            }
            if (email_client_validation_blur()) {
                email_validator = true;
            }
            if (reason_client_validation_blur()) {
                reason_validator = true;
            }
            if (provocation_client_validation_blur()) {
                provocation_validator = true;
            }
            if (weight_client_validation_blur()) {
                weight_validator = true;
            }
            if (height_client_validation_blur()) {
                height_validator = true;
            }
            if (full_name_client_validation_blur()) {
                full_name_validator = true;
            }
            if (full_name_english_client_validation_blur()) {
                full_name_english_validator = true;
            }

            if (document.getElementById("nationality").value == 'NONE'
                || document.getElementById("nationality").value == '') {
                $("#nationality").attr('class', 'form-control input_form_error');
                $('#nationality').attr('title', 'الجنسية من فضلك');
                $('#nationality').tipsy({
                    trigger: 'manual',
                    fade: false,
                    html: true,
                    opacity: 1,
                    gravity: 's'
                });
                $('#nationality').tipsy('show');
                nationality_validator = false;
            } else {
                $("#nationality").attr('class', 'form-control input_form');
                $('#nationality').tipsy('hide');
                nationality_validator = true;
            }

            if (document.getElementById("country").value == 'NONE'
                || document.getElementById("country").value == '') {
                $("#country").attr('class', 'form-control input_form_error');
                $('#country').attr('title', '	بلد الإقامة من فضلك');
                $('#country').tipsy({
                    trigger: 'manual',
                    fade: false,
                    html: true,
                    opacity: 1,
                    gravity: 's'
                });
                $('#country').tipsy('show');
                nationality_validator = false;
            } else {
                $("#country").attr('class', 'form-control input_form');
                $('#country').tipsy('hide');
                country_validator = true;
            }

            if (full_name_validator && full_name_english_validator && nationality_validator
                && country_validator && weight_validator
                && height_validator && provocation_validator
                && reason_validator && email_validator
                && facebook_validator
                && mobile_number_validator
                && profile_picture_validator
                && weight_image_validator
                && height_image_validator
                && overall_checkbox_validator
                && dial_code_validator) {
                $("#form_submitter").click();
            }
        });
    /*
     * $("#weight_upload_div").hover( function () {
     * $('#weight_upload_div').attr('title', '<img
     * src="/Assets/Images/weight_example.jpg">');
     * $('#weight_upload_div').tipsy({trigger: 'hover', fade:false,
     * html:true,opacity: 1,gravity:'w'});
     * $('#weight_upload_div').tipsy('show'); }, function () {
     * $('#weight_upload_div').tipsy('hide');
     * //$("#profile_picture_upload").attr('class',
     * 'normal');TEMPORARY(HARGA3LAHA) } );
     */

    $("#profile_picture_upload").click(function (event) {
        $("#profile_picture_file_upload").click();
    });

    $("#profile_picture_upload").on("dragover", function (event) {

        // Do something to UI to make page look droppable

        $("#profile_picture_upload").attr('class', 'hover');

        // Required for drop to work
        return false;
    });

    $("#profile_picture_upload").on("dragleave", function (event) {

        // Remove UI change
        $("#profile_picture_upload").attr('class', 'normal');

    });

    $("#weight_image_file_upload")
        .change(
        function (e) {
            if (!e)
                e = window.event;
            if (e.target.files[0] != null) {
                $('#weight_upload_div').attr('class', 'col-md-6 rightdiv input_form');
            }
            var formData = new FormData();
            var file = e.target.files[0];
            formData.append('file', file);
            if (file.type.match('image.*')) {
                // Deal with file
                // now post a new XHR request
                var xhr = new XMLHttpRequest();
                if (weight_image_name == "empty") {
                } else {
                    $.ajax({
                        type: 'POST',
                        data: {
                            action: 'deleteimage',
                            imagefile: weight_image_name,
                        },
                        url: '/Assets/scripts/delete_file.php',
                        success: function (msg) {
                            // alert(msg);
                        }
                    })
                }

                $('#weight_upload_div').attr('class', 'col-md-6 rightdiv loading');
                var weight_upload_text = document
                    .getElementById("weight_upload_button");
                weight_upload_text.innerHTML = "&nbsp;";
                xhr.open('POST',
                    '/Assets/scripts/handle_file_upload.php',
                    true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // alert(this.response.indexOf("Invalid
                        // file"));
                        if (this.response.indexOf("Invalid file") >= 0) {
                            alert("Invalid file uploaded!");
                        } else {
                            resp = JSON.parse(this.response);
                            weight_image_name = resp.name;
                            $('#weight_upload_div').attr('class',
                                'col-md-6 rightdiv uploaded');
                            var weight_upload_text = document
                                .getElementById("weight_upload_button");
                            weight_upload_text.innerHTML = "تم رفع الصورة";
                            $('#weight_upload_div').tipsy('hide');
                        }
                    }
                    // console.log('all done: ' + xhr.status);
                    else {
                        alert("Something went terribly wrong...!");
                        // console.log('Something went terribly
                        // wrong...');
                    }
                };
                xhr.send(formData);
                // $('#weight_upload_div').attr('class','uploaded');
                // $('#weight_upload_div').tipsy('hide');
            } else {
                alert(":) لو سمحت حط صورة");
            }
        });

    $("#height_image_file_upload")
        .change(
        function (e) {
            if (!e)
                e = window.event;
            if (e.target.files[0] != null) {
                $('#height_upload_div').attr('class', 'col-md-6 leftdiv input_form');
            }
            var formData = new FormData();
            var file = e.target.files[0];
            formData.append('file', file);
            if (file.type.match('image.*')) {
                // Deal with file
                // now post a new XHR request
                var xhr = new XMLHttpRequest();
                if (height_image_name == "empty") {
                } else {
                    $.ajax({
                        type: 'POST',
                        data: {
                            action: 'deleteimage',
                            imagefile: height_image_name,
                        },
                        url: '/Assets/scripts/delete_file.php',
                        success: function (msg) {
                            // alert(msg);
                        }
                    })
                }
                $('#height_upload_div').attr('class', 'col-md-6 leftdiv loading');
                var height_upload_text = document
                    .getElementById("height_upload_button");
                height_upload_text.innerHTML = "&nbsp;";
                xhr.open('POST',
                    '/Assets/scripts/handle_file_upload.php',
                    true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // alert(this.response.indexOf("Invalid
                        // file"));
                        if (this.response.indexOf("Invalid file") >= 0) {
                            alert("Invalid file uploaded!");
                        } else {

                            resp = JSON.parse(this.response);
                            height_image_name = resp.name;
                            $('#height_upload_div').attr('class',
                                'col-md-6 leftdiv uploaded');
                            var height_upload_text = document
                                .getElementById("height_upload_button");
                            height_upload_text.innerHTML = "تم رفع الصورة";
                            $('#height_upload_div').tipsy('hide');
                        }
                    }
                    // console.log('all done: ' + xhr.status);
                    else {
                        alert("Something went terribly wrong...!");
                        // console.log('Something went terribly
                        // wrong...');
                    }
                };
                xhr.send(formData);
                // $('#height_upload_div').attr('class','uploaded');
                // $('#height_upload_div').tipsy('hide');
            } else {
                alert(":) لو سمحت حط صورة");
            }
        });

    $("#weight_upload_div").click(function (event) {
        $("#weight_image_file_upload").click();
    });

    $("#height_upload_div").click(function (event) {
        $("#height_image_file_upload").click();
    });

    $('#form_submitter').click(function (e) {
        // e.preventDefault();
        /*
         * var image = $('#draggable0'); alert(image_name); var userLeft =
         * image.attr('offsetLeft'); var userTop = image.attr('offsetTop');
         *
         * var image_n ="Name:-"+image_name+"Position:-\n"+userLeft+","+userTop;
         */
        // alert(image_name);
        // alert(profile_picture_name + "" + weight_image_name + "" +
        // height_image_name);
        $("#profile_picture_name").attr('value', profile_picture_name);
        $("#weight_image_name").attr('value', weight_image_name);
        $("#height_image_name").attr('value', height_image_name);
    });

    $('*').keypress(function (e) {
        // if the key pressed is the enter key=
        if (e.keyCode == 13) {
            $("#bottom_middle_submit").click();
            return false;
        }
    });

    $('#nationality').change(function () {
        var field = document.getElementById("nationality");
        if (field.value == 'NONE' || field.value == '') {
            $("#nationality").attr('class', 'form-control input_form_error');
            $('#nationality').attr('title', '	الجنسية من فضلك');
            $('#nationality').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#nationality').tipsy('show');
            // return false;
        } else {
            $("#nationality").attr('class', 'form-control input_form');
            $('#nationality').tipsy('hide');
            // return true;
        }
    });

    $('#country').change(function () {
        var field = document.getElementById("country");
        if (field.value == 'NONE' || field.value == '') {
            $("#country").attr('class', 'form-control input_form_error');
            $('#country').attr('title', '	بلد الإقامة من فضلك');
            $('#country').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#country').tipsy('show');
            // return false;
        } else {
            $("#country").attr('class', 'form-control input_form');
            $('#country').tipsy('hide');
            // return true;
        }
    });

});

function full_name_client_validation_blur() {
    var field = document.getElementById("fullname");
    if (field.value == '') {
        $("#fullname").attr('class', 'form-control input_form_error');
        $('#fullname').attr('title', '	الإسم من فضلك');
        $('#fullname').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#fullname').tipsy('show');
        return false;
    } else {
        var regex_1 = /^ *[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ +[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ +[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ *$/;
        // var regex_2 =/^[A-Za-z][a-z]* [A-Za-z][a-z]* [A-Za-z][a-z]* *$/;
        if (!regex_1.test(field.value))// && !regex_2.test(field.value))
        {
            $("#fullname").attr('class', 'form-control input_form_error');
            $('#fullname')
                .attr('title', 'الإسم ثلاثي و باللغة العربية من فضلك');
            $('#fullname').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#fullname').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function full_name_client_validation_focus() {
    $("#fullname").attr('class', 'form-control input_form');
    $('#fullname').tipsy('hide');
}

function full_name_english_client_validation_blur() {
    var field = document.getElementById("fullname_english");
    if (field.value == '') {
        $("#fullname_english").attr('class', 'form-control input_form_error');
        $('#fullname_english').attr('title', '	الإسم من فضلك');
        $('#fullname_english').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#fullname_english').tipsy('show');
        return false;
    } else {
        //var regex_1 = /^ *[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ +[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ +[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+ *$/;
        var regex_1 =/^ *[A-Za-z][a-z]* [A-Za-z][a-z]* [A-Za-z][a-z]*( [A-Za-z][a-z]*)* *$/;
        if (!regex_1.test(field.value))// && !regex_2.test(field.value))
        {
            $("#fullname_english").attr('class', 'form-control input_form_error');
            $('#fullname_english')
                .attr('title', 'الإسم ثلاثي و باللغة الانجليزية  من فضلك');
            $('#fullname_english').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#fullname_english').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function full_name_english_client_validation_focus() {
    $("#fullname_english").attr('class', 'form-control input_form');
    $('#fullname_english').tipsy('hide');
}


function weight_client_validation_blur() {
    var field = document.getElementById("weight");
    if (field.value == '') {
        $("#weight").attr('class', 'col-md-6 input_form_error');
        $('#weight').attr('title', '	وزنك بالكجم من فضلك');
        $('#weight').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 'w'
        });
        $('#weight').tipsy('show');
        return false;
    } else {
        var regex = /^[1-9][0-9]?[0-9]?(\.[0-9]+)?$/;
        if (!regex.test(field.value)) {
            $("#weight").attr('class', 'col-md-6 input_form_error');
            $('#weight').attr('title', 'هذا الوزن غير صحيح');
            $('#weight').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 'w'
            });
            $('#weight').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function weight_client_validation_focus() {
    $("#weight").attr('class', 'col-md-6 input_form');
    $('#weight').tipsy('hide');
}

function height_client_validation_blur() {
    var field = document.getElementById("height");
    if (field.value == '') {
        $("#height").attr('class', 'col-md-6 leftdiv input_form_error');
        $('#height').attr('title', '	طولك بالمتر من فضلك');
        $('#height').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 'e'
        });
        $('#height').tipsy('show');
        return false;
    } else {
        var regex = /^[0-2](\.[0-9]+)?$/;
        if (!regex.test(field.value)) {
            $("#height").attr('class', 'col-md-6 leftdiv input_form_error');
            $('#height').attr('title', 'هذا الطول غير صحيح');
            $('#height').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 'e'
            });
            $('#height').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function height_client_validation_focus() {
    $("#height").attr('class', 'col-md-6 leftdiv input_form');
    $('#height').tipsy('hide');
}

function reason_client_validation_blur() {
    var field = document.getElementById("reason");
    if (field.value == '') {
        $("#reason").attr('class', 'input_form_error');
        $('#reason').attr('title', '	هدفك من المشاركة من فضلك');
        $('#reason').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#reason').tipsy('show');
        return false;
    } else {
        return true;
    }
}

function reason_client_validation_focus() {
    $("#reason").attr('class', 'input_form');
    $('#reason').tipsy('hide');
}

function provocation_client_validation_blur() {
    var field = document.getElementById("provocation");
    if (field.value == '') {
        $("#provocation").attr('class', 'input_form_error');
        $('#provocation').attr('title', 'كلمة للمنافسين من فضلك');
        $('#provocation').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 'n'
        });
        $('#provocation').tipsy('show');
        return false;
    } else {
        return true;
    }
}

function provocation_client_validation_focus() {
    $("#provocation").attr('class', 'input_form');
    $('#provocation').tipsy('hide');
}

function email_client_validation_blur() {
    var field = document.getElementById("email");
    if (field.value == '') {
        $("#email").attr('class', 'col-md-12 form-control input_form_error');
        $('#email').attr('title', 'البريد الالكتروني من فضلك');
        $('#email').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#email').tipsy('show');
        return false;
    } else {
        var regex = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
        if (!regex.test(field.value)) {
            $("#email").attr('class', 'col-md-12 form-control input_form_error');
            $('#email').attr('title', 'هذا الايميل غير صحيح');
            $('#email').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#email').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function email_client_validation_focus() {
    $("#email").attr('class', 'col-md-12 form-control input_form');
    $('#email').tipsy('hide');
}

function facebook_client_validation_blur() {
    var field = document.getElementById("facebook");
    if (field.value == '') {
        return true;
    } else {
        var regex = /^(((https:\/\/)|(http:\/\/))?(www.)?)?(((facebook)|(fb)).com\/)(([a-z0-9])+\.)*([a-z0-9])+$/;
        if (!regex.test(field.value)) {
            $("#facebook").attr('class', 'col-md-12 form-control input_form_error');
            $('#facebook').attr('title', 'الفيسبوك غير صحيح');
            $('#facebook').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#facebook').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function facebook_client_validation_focus() {
    $("#facebook").attr('class', 'col-md-12 form-control input_form');
    $('#facebook').tipsy('hide');
}

function friend_code_client_validation_blur() {
    var field = document.getElementById("friend_code");
    var male = document.getElementById("male_radio");
    var female = document.getElementById("female_radio");
    if (field.value == '') {
        return true;
    } else {
        var regex;
        if (male.checked)
            regex = /^1[3-9]KM(([1-9][0-9]*)|(0))((,1[3-9]KM(([1-9][0-9]*)|(0))|, 1[3-9]KM(([1-9][0-9]*)|(0))))*$/;
        else {
            if (female.checked)
                regex = /^1[3-9]KF(([1-9][0-9]*)|(0))((,1[3-9]KF(([1-9][0-9]*)|(0))|, 1[3-9]KF(([1-9][0-9]*)|(0))))*$/;
            else
                regex = /^1[3-9]K(M|F)(([1-9][0-9]*)|(0))((,1[3-9]K(M|F)(([1-9][0-9]*)|(0))|, 1[3-9]K(M|F)(([1-9][0-9]*)|(0))))*$/;
        }
        if (!regex.test(field.value)) {
            $("#friend_code").attr('class', 'form-control input_form_error');
            $('#friend_code').attr('title', 'الكود غير صحيح');
            $('#friend_code').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#friend_code').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function friend_code_client_validation_focus() {
    $("#friend_code").attr('class', 'form-control input_form');
    $('#friend_code').tipsy('hide');
}

function mobile_number_client_validation_blur() {
    var field = document.getElementById("mobile_number");
    if (field.value == '') {
        $("#mobile_number").attr('class', 'col-md-8 form-control mob input_form_error');
        $('#mobile_number').attr('title', '	رقم الهاتف من فضلك');
        $('#mobile_number').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#mobile_number').tipsy('show');
        return false;
    } else {
        var regex = /^[0-9]*$/;
        if (!regex.test(field.value)) {
            $("#mobile_number").attr('class', 'col-md-8 form-control mob input_form_error');
            $('#mobile_number').attr('title', 'رقم الهاتف غير صحيح');
            $('#mobile_number').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#mobile_number').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function mobile_number_client_validation_focus() {
    $("#mobile_number").attr('class', 'col-md-8 form-control mob input_form');
    $('#mobile_number').tipsy('hide');
}

function dial_code_client_validation_blur() {
    var field = document.getElementById("dial_code");
    if (field.value == '') {
        $("#dial_code").attr('class', 'col-md-3 form-control mobCode input_form_error');
        $('#dial_code').attr('title', '	كود البلد من فضلك');
        $('#dial_code').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#dial_code').tipsy('show');
        return false;
    } else {
        var regex = /^[0-9]*$/;
        if (!regex.test(field.value)) {
            $("#dial_code").attr('class', 'col-md-3 form-control mobCode input_form_error');
            $('#dial_code').attr('title', 'كود البلد غير صحيح');
            $('#dial_code').tipsy({
                trigger: 'manual',
                fade: false,
                html: true,
                opacity: 1,
                gravity: 's'
            });
            $('#dial_code').tipsy('show');
            return false;
        } else {
            return true;
        }
    }
}

function dial_code_client_validation_focus() {
    $("#dial_code").attr('class', 'col-md-3 form-control mobCode input_form');
    $('#dial_code').tipsy('hide');
}

function toggle_overall_agreement_checkbox() {
    if (!document.getElementById("overall_agreement").checked) {
        $('#overall_agreement').attr('title', '	إقرار البيانات من فضلك');
        $('#overall_agreement').tipsy({
            trigger: 'manual',
            fade: false,
            html: true,
            opacity: 1,
            gravity: 's'
        });
        $('#overall_agreement').tipsy('show');
    } else {
        $('#overall_agreement').tipsy('hide');
    }

}
