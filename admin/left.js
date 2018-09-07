

// 添加一条左侧提示信息
function alertMsgWithId(className, str1, str2, id) {
    var str = "<div class='alert alert-" + className + "'>\
        <button type='button' class='close' data-dismiss='alert'>×</button><h4>"
        + "提示!" + "</h4><strong>"
        + str1 + "</strong>"
        + str2 + "</div>"

    document.getElementById(id).innerHTML =
        str + document.getElementById(id).innerHTML
}

function alertMsg(className, str1, str2) {
    // alertMsgWithId(className, str1, str2, "noteMsgDiv")
}

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////   HTML数据接口   ///////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

function navbar(id) {
    $.ajax({
        url: './admin/link-mysql.php',
        data: {
            type: 'getAllTags'
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            var str = "<ul class='nav navbar-nav'>"
                + "<li class='first active'>"
                + "<a href='index.php'>首页</a>"
                + "</li>"
            var j = JSON.parse(data)
            var c = 0
            for (var i in j) {
                if (j[i].tagFatherId == "0") {
                    var kfirst = 0
                    for (var k in j) {
                        if (j[k].tagFatherId == j[i].id) {
                            if (kfirst == 0) {
                                str += "<li class='first'>"
                                    + "<a href='#'>"
                                    + j[i].tagName
                                    + "</a><ul class='second'>"
                                kfirst++
                            }
                            str += "<li><a href='#'>"
                                + j[k].tagName
                                + "</a></li>"
                        }
                    }
                    if (kfirst != 0)
                        str += "</ul></li>"
                    else {
                        str += "<li><a href='#'>" + j[i].tagName + "</a></li>"
                    }
                }
            }
            str += "</ul>"
            document.getElementById(id).innerHTML = str
        }
    })
}
