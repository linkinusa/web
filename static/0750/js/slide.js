/*注册检验是否阅读xxxx*/
function regetistformcheck() {
    var myform = document.getElementById('signup-user-form');
    var myemail = document.getElementById('signup-email-address').value;
    var myusername = document.getElementById('signup-username').value;
    var mypwd = document.getElementById('signup-password').value;
    var myconfirmpwd = document.getElementById('signup-password-confirm').value;
    var keeplogin = document.getElementById('keeplogin').checked;
    var agreerules = document.getElementById('agreerules').checked;
    if (keeplogin) {
        alert("yes keeplogin!");
    }
    if (!agreerules) {
        alert('must agree the rules!');
        return false;
    } else {
        return true;
    }
}

function showlist() {
    var showdiv = document.getElementById('searchlist');
    showdiv.style.height = "auto";
}

function hidelist() {
    var showdiv = document.getElementById('searchlist');
    showdiv.style.height = "40px";
}

/*list切换*/
$(document).ready(function () {
    $(".mainproduct li").live("hover", function () {
        $(".current").removeClass("current");
        $(this).addClass("current")
    });

});

$(document).ready(function () {
    var a = $(".qiehuanli");
    a.mouseover(function () {
        a.removeClass("current");
        $(this).addClass("current")
    });
    $("#nexts").click(function (e) {
        e.preventDefault();

        //alert(456);                       
        var b = $("#mainproduct .qiehuanli:first,#mainproduct .qiehuanli.eq(2)"),
            c = $("#mainproduct .qiehuanul .current").index();
        $("#mainproduct .qiehuanli:last").after(b);
        $("#mainproduct .qiehuanli").removeClass("current");
        $("#mainproduct .qiehuanul").find("li").eq(c).addClass("current")
    });

    $("#prevs").click(function (e) {
        e.preventDefault();
        
        //alert(123);                   
        var c = $("#mainproduct .qiehuanli:last"),
            b = $("#mainproduct ul .current").index();
        $("#mainproduct .qiehuanli:first").before(c);
        $("#mainproduct .qiehuanli").removeClass("current");
        $("#mainproduct .qiehuanul").find("li").eq(b).addClass("current")
    })
});

/* 焦点图 */
$(function () {

    var $root = $('#show'),
        root_w = $root.width();
    var p = $root.find('> div.img > span'),
        n = p.children(".focusnum").length;
    p.children().eq(0).clone().appendTo(p);

    function onoff(on, off) {
        (on !== -1) && btns.eq(on).addClass('on');
        (off !== -1) && btns.eq(off).removeClass('on');
    }

    function dgo(n, comp) {
        var idx = n > max ? 0 : n;
        onoff(idx, cur);
        cur = idx;
        p.stop().animate({
            left: -1 * root_w * n
        }, {
            duration: dur,
            complete: comp
        });
        if (idx == 0) {
            p.children().eq(n - 1).clone().appendTo('.mk1');
        } else {
            $('.mk1').empty()
        };
    }
    // slast -> 如果播放完最后1张，要如何处理
    //    true 平滑切换到第1张
    var cur = 0,
        max = n - 1,
        pt = 0,
        stay = 5 * 1000,
        /* ms */
        dur = .6 * 1000,
        /* ms */
        btns;

    function go(dir, slast) {
        pt = +new Date();
        if (dir === 0) {
            onoff(cur, -1);
            p.css({
                left: -1 * root_w * cur
            });
            return;
        }
        var t;
        if (dir > 0) {
            t = cur + 1;
            if (t > max && !slast) {
                t = 0;
            }
            if (t <= max) {
                return dgo(t);
            }
            return dgo(t, function () {
                p.css({
                    left: 0
                });
            });
        } else {
            t = cur - 1;
            if (t < 0) {
                t = max;
                p.css({
                    left: -1 * root_w * (max + 1)
                });
                return dgo(t);
            } else {
                return dgo(t);
            }
        }
    }
    btns = $((new Array(n + 1)).join('<is></is>'))
        .each(function (idx, el) {
            $(el).data({
                idx: idx
            });
        });
    var pn_btn = $('<ss class="prev"><is></is></ss><ss class="next"><is></is></ss>');
    $('<div class="btns"/ >')
        .append(
            $('<bs/>')
            .append(btns)
            .delegate('is', 'click', function (ev) {
                dgo($(this).data('idx'));
            })
            .css({
                width: n * 20,
                marginLeft: -10 * n
            })
        )
        .delegate('ss', 'click', function (ev) {
            go($(this).is('.prev') ? -1 : 1, true);
        })
        .append(pn_btn)
        .appendTo($root);

    go(1);
    // 自动播放
    var ie6 = $.browser.msie && $.browser.version < '7.0';
    $root.hover(function (ev) {
        // $root[(ev.type == 'mouseenter' ? 'add' : 'remove') + 'Class']('show-hover');
        if (ie6) {
            pn_btn[ev.type == 'mouseenter' ? 'show' : 'hide']();
        } else {
            pn_btn.stop()['fade' + (ev.type == 'mouseenter' ? 'In' : 'Out')]('fast');
        }
    });
    if ($root.attr('rel') == 'autoPlay') {
        var si = setInterval(function () {
            var now = +new Date();
            if (now - pt < stay) {
                return;
            }
            go(1, true);
        }, 5000);
        p.mouseover(function () {
            clearInterval(si);
        })
        p.mouseout(function () {
            si = setInterval(function () {
                var now = +new Date();
                if (now - pt < stay) {
                    return;
                }
                go(1, true);
            }, 5000);
        })
    }
    var wid = 877;
    var swid = 0;
    var bwid = root_w * n;
    $('#show').css('width', wid);
    $('#show .img').css('width', wid);
    $('#show .btns').css('left', swid)
    $('.masks').css('width', swid);
    $('.mk2').css('right', 0);
    $('#show .img span').css(({
        paddingLeft: swid
    }));
});