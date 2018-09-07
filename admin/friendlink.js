
function addFriendLink(fl_name, fl_url) {
    fl_name = document.getElementById(fl_name).value
    fl_url = document.getElementById(fl_url).value

    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'add-friendlink',
            fl_name: fl_name,
            fl_url: fl_url
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            // alertMsg('success', '成功', data)
            // alert(data)
            getLinkLoop('tagsShow')
        }
    })
}

function getLinkLoop(showDivId) {

    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'getAllLinks'
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            // alert(data)
            var tableStr = "<table class='table table-striped table-bordered table-hover'>"
            tableStr += "<thead><tr><th>编号</th><th>友情链接名</th>"
                + "<th>友情链接url</th><th>删除</th></tr></thead><tbody>"
            var j = JSON.parse(data)
            var c = 0
            for(var i in j) {
                tableStr += "<tr>"
                + "<td>" + j[i].id + "</td>"
                + "<td>" + j[i].name + "</td>"
                + "<td>" + j[i].url + "</td>"
                + "<td><a href=\"javascript:delLinkById(" 
                + j[i].id 
                + ",'"
                + showDivId
                + "')\">删除</a></td></tr>"
            }
            tableStr += "</tbody></table>"
            document.getElementById(showDivId).innerHTML = tableStr
        }
    })

}

function delLinkById(id, showDivId) {
    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'delLinkById',
            id: id
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            getLinkLoop(showDivId)
        }
    })
}