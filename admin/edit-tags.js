
function addTag(tagNameId, tagFatherId) {
    tagName = document.getElementById(tagNameId).value
    tagFather = document.getElementById(tagFatherId).value

    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'add-tag',
            tagName: tagName,
            tagFather: tagFather
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            // alertMsg('success', '成功', data)
            getTagsLoop('tagsShow')
        }
    })
}

function choseUCInfoClass(i) {
    switch (parseInt(i) % 3) {
        case 0: default: return "info"
        case 1: return "success"
        case 2: return "warning"
    }
}

function getTagsLoop(showDivId) {

    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'getAllTags'
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            var tableStr = "<table class='table table-striped table-bordered table-hover'>"
            tableStr += "<thead><tr><th>编号</th><th>类名</th>"
                + "<th>父类编号</th><th>删除</th></tr></thead><tbody>"
            var j = JSON.parse(data)
            var c = 0
            for(var i in j) {
                tableStr += "<tr>"
                + "<td>" + j[i].id + "</td>"
                + "<td>" + j[i].tagName + "</td>"
                + "<td>" + j[i].tagFatherId + "</td>"
                + "<td><a href=\"javascript:delTagById(" 
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

function delTagById(id, showDivId) {
    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'delTagById',
            id: id
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            getTagsLoop(showDivId)
        }
    })
}
