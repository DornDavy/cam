<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript" src="asset/validate/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/select2/select2.min.js"></script>
<script type="text/javascript" src="asset/select2/select2.js"></script>
<!--Datepicker-->
<!--<script type="text/javascript" src="asset/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>-->
<!--angular-->
<script type="text/javascript" src="asset/ng/angular.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#e1').select2();
    });
    $(document).ready(function () {
        $('#e2').select2();
    });
    $(document).ready(function () {
        $('.datepicker').datepicker();
    });

//    $(document).ready(function() {
//        $('.registerForm').bootstrapValidator({
//            message: 'This value is not valid',
//            feedbackIcons: {
//                valid: 'glyphicon glyphicon-ok',
//                invalid: 'glyphicon glyphicon-remove',
//                validating: 'glyphicon glyphicon-refresh'
//            },
//            fields: {
//                username: {
//                    message: 'The username is not valid',
//                    validators: {
//                        notEmpty: {
//                            message: 'The username is required and cannot be empty'
//                        },
//                        stringLength: {
//                            min: 6,
//                            max: 30,
//                            message: 'The username must be more than 6 and less than 30 characters long'
//                        },
//                        regexp: {
//                            regexp: /^[a-zA-Z0-9_]+$/,
//                            message: 'The username can only consist of alphabetical, number and underscore'
//                        }
//                    }
//                },
//                email: {
//                    validators: {
//                        notEmpty: {
//                            message: 'The email is required and cannot be empty'
//                        },
//                        emailAddress: {
//                            message: 'The input is not a valid email address'
//                        }
//                    }
//                }
//            }
//        });
//    });

</script>