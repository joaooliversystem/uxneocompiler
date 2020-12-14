</div>
</div>
</div>

</body>
<script src="public/js/jquery-3.5.1.slim.min.js"></script>
<script src="public/js/popper.min-1.16.1.js"></script>
<script src="public/js/bootstrap.bundle.min-4.5.3.js"></script>
<script src="public/js/select2.min-4.1.0-beta.1.js"></script>
<script src="public/js/icheck.min-1.0.3.js"></script>
<script src="public/js/ace-1.4.12.js"></script>

<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/c_cpp");
</script>
<script>
    $(document).ready(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_minimal-green',

            // increaseArea: '20%' // optional
        });
    });

    $(document).ready(function() {
        $('.selectclass').select2();
    });
</script>

<script>
    $(window).on('load', function() {

        setTimeout(function(){
            $('.preloader').remove();
        },1000)

    });
</script>
</html>