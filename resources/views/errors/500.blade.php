<!DOCTYPE html>
<html>
<head>
    <title>Page Not Found</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<style>

    .pagenotfound_footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .btn_previous_page {
        font-size: 13px !important;
        color: #2B63C6 !important;
        border-color: #2B63C6 !important;
        background: #ffffff;
        width: 50%;
    }
    .px-3 {
        padding-left: 1rem!important;
        padding-right: 1rem !important;
    }
</style>



    <body style='background-color:#f0f6f8;'>

    
        <div class='text-center' style='margin-top:4rem;'>

            <img style='width: 15%; height: auto;' src='/storage/img/no_connection.png'>

        </div>
        <br/>
        <div>
            <img style='width: 100%; height: auto;' src='/storage/img/line2.png'>
        </div>
        <br/>
        <div class='text-center'>
            <b style='font-size:24px; color:#2b63c6;'>ご指定のページがみつかりません</b>
        </div>

        <br/>
        <div>
            <img style='width: 100%; height: auto;' src='/storage/img/line2.png'>
        </div>

        <br/>

        <div class='text-center'>
            <p style='font-size:26px; color:#2b63c6;'>申し訳ございませんが、アクセスしようとしたページは存在しないか、一時的にご利用できません。</p>
        </div>




        <div class="my-5 text-center">
             <button type="button" class="btn badge-pill px-3 btn_previous_page" onclick="gotoTopPage('')" ><img src="https://minnano-myportalappli.jp/images/ico_arrow-right_blue404.svg" alt="right_blue" class='mx-2 mt-1'><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TOPにもどる
                </font></font></button> 
        </div>

        <div class="container px-0">
            <img src="https://minnano-myportalappli.jp/images/bg_img.svg" class="pagenotfound_footer" alt="pagenotfound_footer">
        </div>

        
    
    </body>

    <script>
        function gotoTopPage() {
            var url = window.location.pathname;
            var date = url.split('/');
            if (date[1] == "padometerscreen") {
                window.location = "/padometerscreen";
            } else {
                window.location = "/padometerscreen";
            }
        }
    </script>


</html>