

<script type="text/javascript" src="../jquery.min.js"></script>


<script type="text/javascript" src="../asset/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../asset/validate/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="../asset/select2/select2.min.js"></script>
<script type="text/javascript" src="../asset/select2/select2.js"></script>
<!--Datepicker-->
<script type="text/javascript" src="../asset/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="../asset/ng/angular.min.js"></script>
<!--Bootbox-->
<script type="text/javascript" src="../asset/bower_components/bootbox/bootbox.js"></script>
<script type="text/javascript" src="../asset/bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript" src="../asset/ckeditor/ckeditor.js"></script>
<!--<script type="text/javascript" src="../asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->


<script>
    $(document).ready(function () {
        $('.datepicker').datepicker();
    });

    $(document).ready(function () {
        $('#e2').select2();
    });

    CKEDITOR.plugins.addExternal( 'upload', '../../asset/ckeditor/plugin/imgupload/', 'plugin.js' );
    CKEDITOR.replace('des',{
//        extraPlugins:'upload'
    });

</script>



