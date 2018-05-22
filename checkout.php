<!--The following code is required for the third party plug-in, and used for education only-->
<!--Copyright 2013, 2014 Mateusz Markowski-->
<!--https://github.com/mateuszmarkowski/jQuery-Seat-Charts-->
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery</title>

    <script src="jquery-1.4.4.min.js" type="text/javascript"></script>

    <script src="ccvalidate.js" type="text/javascript"></script>

    <link href="ccvalidate.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        $(document).ready(function() {
            $('.cc-container').ccvalidate({ onvalidate: function(isValid) {
                    if (!isValid) {
                        alert('Incorrect Credit Card format');
                        return false;
                    }
                }
            });
            $('.cc-ddl-contents').css('display', 'none');
            $('.cc-ddl-header').toggle(function() {
                toggleContents($(this).parent().find('.cc-ddl-contents'));
            }, function() { toggleContents($(this).parent().find('.cc-ddl-contents')); });

            function toggleContents(el) {
                $('.cc-ddl-contents').css('display', 'none');
                if (el.css('display') == 'none') el.fadeIn("slow");
                else el.fadeOut("slow");
            }
            $('.cc-ddl-contents a').click(function() {
                $(this).parent().parent().find('.cc-ddl-o select').attr('selectedIndex', $('.cc-ddl-contents a').index(this));
                $(this).parent().parent().find('.cc-ddl-title').html($(this).html());
                $(this).parent().parent().find('.cc-ddl-contents').fadeOut("slow");
            });
            $(document).click(function() {
                $('.cc-ddl-contents').fadeOut("slow");
            });


            $('#check').click(function() {
                var cnumber = $('#cnumber').val();
                var type = $('#ctype').val();
                alert(isValidCreditCard(cnumber, type) ? 'Valid' : 'Invalid');
            });
        });
    </script>

    <style type="text/css">
        /* body
        {
            background: url(bg.png);
        }
        #wrapper
        {
            width: 700px;
            height: 300px;
            margin: auto;
            padding-top: 50px;
        }*/body
        {
            margin: 0;
            padding: 0;
            font-family: Arial, Sans-Serif;
            font-size: 10pt;
        }
        #wrapper
        {
            width: 1024px;
            height: 834px;
            margin: auto;
            border: solid 1px black;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
        }
        #wrapper #header
        {
            /*width: 99%;*/
            height: 110px;
            color: White;
            font-size: 24px;
            font-weight: bold;
            padding-left: 20px;
            padding-top: 40px;
            -moz-border-radius-topleft: 8px;
            -webkit-border-top-left-radius: 8px;
            border-top-left-radius: 8px;
            -moz-border-radius-topright: 8px;
            -webkit-border-top-right-radius: 8px;
            border-top-right-radius: 8px;
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#747577), to(#363739));
            background-image: -moz-linear-gradient(#747577, #363739);
            background-image: -webkit-linear-gradient(#747577, #363739);
            background-image: -o-linear-gradient(#747577, #363739);
            filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#747577, endColorstr=#363739)";
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#747577, endColorstr=#363739)";
        }
        #wrapper #menu-bar
        {
            width: 100%;
            height: 29px;
            padding-top: 4px;
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#E5E5E5), to(#CFCFCF));
            background-image: -moz-linear-gradient(#E5E5E5, #CFCFCF);
            background-image: -webkit-linear-gradient(#E5E5E5, #CFCFCF);
            background-image: -o-linear-gradient(#E5E5E5, #CFCFCF);
            filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5E5E5, endColorstr=#CFCFCF)";
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5E5E5, endColorstr=#CFCFCF)";
            border-bottom: solid 1px #747577;
        }
        #wrapper #contents
        {
            width: 100%;
            height: 540px;
            padding-top: 60px;
        }

        #wrapper #footer
        {
            width: 100%;
            height: 50px;
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#747577), to(#363739));
            background-image: -moz-linear-gradient(#747577, #363739);
            background-image: -webkit-linear-gradient(#747577, #363739);
            background-image: -o-linear-gradient(#747577, #363739);
            filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#747577, endColorstr=#363739)";
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#747577, endColorstr=#363739)";
            -moz-border-radius-bottomleft: 8px;
            -webkit-border-bottom-left-radius: 8px;
            border-bottom-left-radius: 8px;
            -moz-border-radius-bottomright: 8px;
            -webkit-border-bottom-right-radius: 8px;
            border-bottom-right-radius: 8px;
            border-top: solid 1px #747577;
        }
        #menu-bar ul
        {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-left: 4px;
        }
        #menu-bar ul li
        {
            float: left;
            display: inline-block;
            padding: 4px;
        }
        #menu-bar ul li a, #menu-bar ul li a:active, #menu-bar ul li a:visited
        {
            text-decoration: none;
            color: #747577;
        }
        #menu-bar ul li a:hover
        {
            text-decoration: underline;
            color: #747577;
        }
        #footer div
        {
            padding-top: 14px;
            width: 180px;
            margin: auto;
            color: White;
        }
        #footer div a, #footer div a:active, #footer div a:visited
        {
            text-decoration: none;
            color: white;
        }
        #footer div a:hover
        {
            text-decoration: underline;
            color: white;
        }
        .cc-container
        {
            margin: auto;
        }
    </style>
</head>
<body>
<form method="POST,GET" id="form" action="checkout.htm">
        <div id="contents">
            <div class="cc-container">
                <div class="cc-header">
                    Please enter your billing information</div>
                <div class="cc-contents">
                    <table cellpadding="4" cellspacing="0">
                        <tr>
                            <td style="width: 97px">
                                <label>
                                    Card Type</label>
                            </td>
                            <td style="width: 270px">
                                <div class="cc-ddl">
                                    <div class="cc-ddl-o">
                                        <select id="cc-types" class="cc-ddl-type">
                                            <option value="mcd">Master Card</option>
                                            <option value="vis">Visa Card</option>
                                            <option value="amx">American Express</option>
                                            <option value="dnr">Diner Club</option>
                                            <option value="dis">Discover</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">
                                            Select Card Type</div>
                                    </div>
                                    <div class="cc-ddl-contents">
                                        <a href="javascript:return void(0)">Master Card</a> <a href="javascript:return void(0)">
                                            Visa Card</a> <a href="javascript:return void(0)">American Express</a> <a href="javascript:return void(0)">
                                            Diners Club</a> <a href="javascript:return void(0)">Discover</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Card Number</label>
                            </td>
                            <td>
                                <input type="text" id="card-number" class="large cc-card-number" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Expires on</label>
                            </td>
                            <td>
                                <div class="cc-ddl" style="width: 110px; float: left;">
                                    <div class="cc-ddl-o">
                                        <select id="cc-month">
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">
                                            Month</div>
                                    </div>
                                    <div class="cc-ddl-contents" style="width: 108px">
                                        <a href="javascript:return void(0)">January</a> <a href="javascript:return void(0)">
                                            February</a> <a href="javascript:return void(0)">March</a> <a href="javascript:return void(0)">
                                            April</a> <a href="javascript:return void(0)">May</a> <a href="javascript:return void(0)">
                                            June</a> <a href="javascript:return void(0)">July</a> <a href="javascript:return void(0)">
                                            August</a> <a href="javascript:return void(0)">September</a> <a href="javascript:return void(0)">
                                            October</a> <a href="javascript:return void(0)">November</a>
                                        <a href="javascript:return void(0)">December</a>
                                    </div>
                                </div>
                                <div class="cc-ddl" style="width: 80px; float: left; margin-left: 4px;">
                                    <div class="cc-ddl-o">
                                        <select id="Select1">
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">
                                            Year</div>
                                    </div>
                                    <div class="cc-ddl-contents" style="width: 78px">
                                        <a href="javascript:return void(0)">2018</a> <a href="javascript:return void(0)">2019</a>
                                        <a href="javascript:return void(0)">2020</a> <a href="javascript:return void(0)">2021</a>
                                        <a href="javascript:return void(0)">2022</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    CVV</label>
                            </td>
                            <td>
                                <input type="text" class="small" />
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;

                            </td>
                            <td>
                                <input type="submit" value="Checkout" class="cc-checkout" id="check-out" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>

<div style="text-align:center;clear:both">
    <p><script language="javascript" src="http://www.sharejs.com/js/720.js"></script></p>

</div>
</body>
</html>

<!--/*up to here*/-->