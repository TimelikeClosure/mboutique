<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) {
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><head>
    <meta charset="utf-8" />
    <title><?=$pageData['links'][$pageData['page']]['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="pages/stylesheets/style.css" rel="stylesheet" type="text/css" />
    <?php
        if (!empty($pageData['holiday']['stylesheet'])) {
            ?>
                <link href="<?=$pageData['holiday']['stylesheet']?>" rel="stylesheet" type="text/css" />
            <?php
        }
    ?>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script>
        var pageData = <?=json_encode($pageData);?>;
        var oldContent = null;

        function pageLoad(page, addHistory) {
            var content = $('#content');
            oldContent = content.html();
            content.html("<h1>Loading page...</h1>");

            $.ajax({
                url: "index.php",
                method: "GET",
                dataType: "HTML",
                data: {
                    page: page,
                    mode: "content"
                },
                timeout: 10000,
                success: function(response) {
                    if (addHistory) {
                        if (location.pathname.indexOf("index.php") >= 0) {
                            history.pushState({page: page}, pageData.links[page].title, "?page=" + page);
                        } else {
                            history.pushState({page: page}, pageData.links[page].title, "index.php?page=" + page);
                        }
                    }
                    document.title = pageData.links[page].title;
                    $('#content').html(response);
                    updateImages(page);
                },
                error: function(response) {
                    //console.log(response);
                    if (response.hasOwnProperty("responseText") && pageData.links.hasOwnProperty(page)) {
                        if (addHistory) {
                            if (location.pathname.indexOf("index.php") >= 0) {
                                history.pushState({page: page}, pageData.links[page].title, "?page=" + page);
                            } else {
                                history.pushState({page: page}, pageData.links[page].title, "index.php?page=" + page);
                            }
                        }
                        document.title = pageData.links[page].title;
                        $('#content').html(response.responseText);
                        updateImages(page);
                    } else {
                        $('#content').html(oldContent);
                    }
                }
            });
        }

        function updateImages(page) {
                for (var image in pageData.links[page].images) {
                    var imageElement = $('#' + image + ' img');
                    if (pageData.links[page].images[image].hasOwnProperty('src')) {
                        imageElement.attr('src', pageData.links[page].images[image].src);
                    }
                    if (pageData.links[page].images[image].hasOwnProperty('alt')) {
                        imageElement.attr('alt', pageData.links[page].images[image].alt);
                    }
                }
        }

        $(document).ready(function(){
            window.onpopstate = function(event) {
                //console.log("onpopstate: ", event.state.page);
                var page;
                if (event.state === null || event.state.page === null) {
                    var getString = location.search;
                    var pageQuery = getString.indexOf('page=');
                    if (pageQuery > -1){
                        getString = getString.substr(pageQuery + 5);
                        page = getString.split('&')[0];
                        if (page.length == 0) {
                            page = "welcome";
                        }
                    } else {
                        page = "welcome";
                    }
                } else {
                    page = event.state.page;
                }
                pageLoad(page, false);
            }
        });
    </script>
</head>