
function post_new(id) {

    artStr = $('#' + id).val()
    var artStr2 = ""
    if(document.getElementById(id + '2') != null) {
        artStr2 = $('#' + id + '2').val()
    }
    console.log(artStr2)
    post_author = document.getElementById('post_author').value
    post_title = document.getElementById('post_title').value
    post_mime_type = document.getElementById('termTag') 
                ? document.getElementById('termTag').value : ""

    if (post_author == "" || post_title == "") {
        alert("请补全信息")
    }

    var postJ = {
        post_author: post_author,
        post_date: '',
        post_main_url: urls,
        post_date_gmt: '',
        post_content: artStr,
        post_title: post_title,
        post_excerpt: artStr2,
        post_status: artStr2 != "" ? 2 : 0,
        comment_status: '',
        ping_status: '',
        post_password: '',
        post_name: '',
        to_ping: '',
        pinged: '',
        post_modified: '',
        post_modified_gmt: '',
        post_parent: '',
        guid: '',
        menu_order: '',
        post_type: '',
        post_mime_type: post_mime_type,
        comment_count: ''
    }

    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'post-new',
            postJ: postJ
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            // alert(data)
        }
    })

}


function update_post(id, artId, artTypeNo) {

    artStr = $('#' + id).val()
    var artStr2 = ""
    if(document.getElementById(id + '2') != null) {
        artStr2 = $('#' + id + '2').val()
    }
    post_author = document.getElementById('post_author').value
    post_title = document.getElementById('post_title').value
    main_url = urls
    post_mime_type = document.getElementById('termTag') 
                ? document.getElementById('termTag').value : artTypeNo

    if (post_author == "" || post_title == "") {
        alert("请补全信息")
    }

    var postJ = {
        artId: artId,
        main_url: main_url,
        post_author: post_author,
        post_date: '',
        post_content: artStr,
        post_excerpt: artStr2,
        post_title: post_title,
        post_mime_type: post_mime_type
    }

    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'update-post',
            postJ: postJ
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            // alert(data)
        }
    })

}


function SetFirstStr(str, id, name) {
    document.getElementById(name).innerHTML = str;
    document.getElementById(name).value = id;
}

function getSelect(showDivId, defaultName, defaultValue) {

    $.ajax({
        url: 'link-mysql.php',
        data: {
            type: 'getAllTags'
        },
        type: 'post',
        dateType: 'json',
        success: function (data) {
            var str = "<ul style='list-style: none'>"
                + "<li class='dropdown'>"
                + "<button id='termTag' data-toggle='dropdown' value='"
                + defaultValue
                + "' class='btn btn-default dropdown-toggle'>"
                + defaultName 
                + "<span class='caret'></span></button>"
                + "<ul class='dropdown-menu'>"
            var j = JSON.parse(data)
            var c = 0
            for (var i in j) {
                if (j[i].tagFatherId == "0") {
                    var kfirst = 0
                    for (var k in j) {
                        if (j[k].tagFatherId == j[i].id) {
                            if (kfirst == 0) {
                                str += "<li class='dropdown-submenu'>"
                                    + "<a tabindex='-1' href='#'>"
                                    + j[i].tagName + "</a>"
                                    + "<ul class='dropdown-menu'>"
                                kfirst++
                            }
                            str += "<li><a href=\"javascript:SetFirstStr('"
                                + j[k].tagName
                                + "', '"
                                + j[k].id
                                + "', 'termTag')\">" + j[k].tagName + "</a></li>"
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
            document.getElementById(showDivId).innerHTML = str
        }
    })

}
