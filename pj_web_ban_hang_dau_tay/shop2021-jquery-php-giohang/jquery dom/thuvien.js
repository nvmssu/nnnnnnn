$(document).ready(function() {
    soluongsp();
    tongdonhang();

    //var tensp2 = giohang.eq(1).children("td").eq(0).text();
    //var hinh2 = giohang.eq(1).children("td").eq(1).children("img").attr("src");
    //alert(tensp2 + " ---" + hinh2);

    $(".remo").click(function(e) {
        e.preventDefault();

        var tr = $(this).parent().parent();
        var tensp = tr.children("td").eq(0).text();
        tr.remove();

        //cap nhat lai so luong
        soluongsp();
        //cap nhat lai tong don hang
        tongdonhang();
        //tao hieu ung cho gio hang
        $(".boxcart").addClass("cartani");
        setTimeout(function() { $(".boxcart").removeClass("cartani"); }, 500);


    });


    $(".num").change(function(e) {
        e.preventDefault();

        var sl = this.value;
        var tr = $(this).parent().parent();
        var tensp = tr.children("td").eq(0).text();
        var dongia = tr.children("td").eq(2).text();
        var tt = dongia * sl;
        tr.children("td").eq(4).text(tt);

        //cap nhat lai tong don hang
        tongdonhang();

    });

    function soluongsp() {
        var giohang = $("#giohang").children("tr");
        var slsp = giohang.length;
        var boxcart = $("#boxcart").children("span");
        boxcart.text(slsp);
    }

    function tongdonhang() {
        var tongdh = $("#tongdonhang").children("tr");
        //tính tổng đơn hang
        var giohang = $("#giohang").children("tr");
        var tong = 0;
        for (let i = 0; i < giohang.length; i++) {
            tong += eval(giohang.eq(i).children("td").eq(4).text());
        }
        tongdh.children("td").eq(1).text(tong);
    }




});