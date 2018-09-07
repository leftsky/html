
function getUserName(key) {
    $.ajax({
        url: 'sessionInfo.php',
        data: {
            key: key
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            alert(data)
        }
    })
}

function getAllArtcles(showDivId) {
    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'getAllArtcles',
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            var tableStr = "<table class='table table-striped table-bordered table-hover'>"
            tableStr += "<thead><tr><th>编号</th><th>文章题目</th>"
                + "<th>查看</th><th>编辑</th><th>删除</th></tr></thead><tbody>"
            var j = JSON.parse(data)
            var c = 0
            for(var i in j) {
                tableStr += "<tr>"
                + "<td>" + j[i].id + "</td>"
                + "<td>" + j[i].post_title + "</td>"
                + "<td><a href='readArtcle.php?artcleId="
                + j[i].id + "')>查看</a></td>"
                + "<td><a href='update-post.php?artcleId="
                + j[i].id + "')>编辑</a></td>"
                + "<td><a href=\"javascript:delArtcleById(" 
                + j[i].id 
                + ",'"
                + showDivId
                + "')\">删除</a></td>"
                + "</tr>"
            }
            tableStr += "</tbody></table>"
            document.getElementById(showDivId).innerHTML = tableStr
        }
    })
}

function delArtcleById(id, showDivId) {
    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'delArtcleById',
            id: id
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            getAllArtcles(showDivId)
        }
    })
}
