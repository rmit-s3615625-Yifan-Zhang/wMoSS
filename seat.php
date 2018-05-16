

<!--弹出层时背景层DIV-->
<div id="fade" class="black_overlay">
</div>
<div id="MyDiv" class="white_content">
    <div style="text-align: right; cursor: default; height: 40px;">
        <span style="font-size: 16px;" onclick="CloseDiv('MyDiv','fade')">Close</span>
    </div>

    <div class="demo">
        <div id="seat-map">
            <div class="front">Screen</div>
        </div>
        <div class="booking-details">
            <p>movie：<span id="movie_title">星际穿越</span></p>
            <p>time：<span id="movie_session">11月14日 21:00</span></p>
            <p>seat：</p>
            <ul id="selected-seats"></ul>
            <p>ticket：<span id="counter">0</span></p>
            <p>total：<b> $ <span id="total">0</span></b></p>

            <button class="checkout-button">Confirm</button>

            <div id="legend"></div>
        </div>
        <div style="clear:both"></div>
    </div>

    <br/>
</div>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.seat-charts.min.js"></script>
<script type="text/javascript">
    var price = 20; //票价
    $(document).ready(function() {
        var $cart = $('#selected-seats'), //座位区
            $counter = $('#counter'), //票数
            $total = $('#total'); //总计金额

        var sc = $('#seat-map').seatCharts({
            map: [  //seat pic
                'aaaaaaaaaa',
                'aaaaaaaaaa',
                '__________',
                'aaaaaaaaaa',
                'aaaaaaaaaa',
                'aaaaaaaaaa'
            ],
            naming : {
                top : false,
                getLabel : function (character, row, column) {
                    return column;
                }
            },
            legend : { //定义图例
                node : $('#legend'),
                items : [
                    [ 'a', 'available',   'available' ],
                    [ 'a', 'unavailable', 'sold']
                ]
            },
            click: function () { //点击事件
                if (this.status() == 'available') { //available
                    $('<li>R'+(this.settings.row+1)+'S'+this.settings.label+'</li>')
                        .attr('id', 'cart-item-'+this.settings.id)
                        .data('seatId', this.settings.id)
                        .appendTo($cart);

                    $counter.text(sc.find('selected').length+1);
                    $total.text(recalculateTotal(sc)+price);

                    return 'selected';
                } else if (this.status() == 'selected') { //已选中
                    //更新数量
                    $counter.text(sc.find('selected').length-1);
                    //更新总计
                    $total.text(recalculateTotal(sc)-price);

                    //删除已预订座位
                    $('#cart-item-'+this.settings.id).remove();
                    //available
                    return 'available';
                } else if (this.status() == 'unavailable') { //sold
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }
        });
        //sold seat
        sc.get(['1_2', '4_4','4_5','6_6','6_7']).status('unavailable');

    });
    //计算总金额
    function recalculateTotal(sc) {
        var total = 0;
        sc.find('selected').each(function () {
            total += price;
        });

        return total;
    }
</script>