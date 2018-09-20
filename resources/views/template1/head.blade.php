<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
<title>Paper</title>
<!-- CSS -->
<link rel="stylesheet" href="assets/css/app.css">
<style>
    .loader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #F5F8FA;
        z-index: 9998;
        text-align: center;
    }

    .plane-container {
        position: absolute;
        top: 50%;
        left: 50%;
    }
</style>
<!-- Js -->
<!--
--- Head Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function (w, d, u) {
        w.readyQ = [];
        w.bindReadyQ = [];

        function p(x, y) {
            if (x == "ready") {
                w.bindReadyQ.push(y);
            } else {
                w.readyQ.push(x);
            }
        };var a = {ready: p, bind: p};
        w.$ = w.jQuery = function (f) {
            if (f === d || f === u) {
                return a
            } else {
                p(f)
            }
        }
    })(window, document)</script>