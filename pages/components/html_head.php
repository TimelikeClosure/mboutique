<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) { // Throw a 403 error if page is loaded directly
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><head>
    <meta charset="utf-8" />
    <title><?=$pageData['links'][$pageData['page']]['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel='icon' type='image/ico' href='favicon.ico' />
    <link href="pages/stylesheets/style.css" rel="stylesheet" type="text/css" />
    <?php
        if (!empty($pageData['holiday']['stylesheet'])) { // Load special holiday stylesheet if it exists
            ?>
                <link href="<?=$pageData['holiday']['stylesheet']?>" rel="stylesheet" type="text/css" />
            <?php
        }
    ?>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script>
        var pageData = <?=json_encode($pageData);?>; // Insert PHP pageData into JavaScript
        var oldContent = null;

        /**
         * pageLoad - Attempts to load in the content for the given page. If no page can be loaded, reverts to old page.
         * @param {string} page - determines which page to attempt to load.
         * @param {boolean} addHistory - determines whether a new browser history page is created.
         */
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
                    updateContent(page, response, addHistory);
                },
                error: function(response) {
                    if (response.hasOwnProperty("responseText") && pageData.links.hasOwnProperty(page)) {
                        updateContent(page, response.responseText, addHistory);
                    } else {
                        $('#content').html(oldContent);
                    }
                }
            });
        }

        /**
         * updateContent - Updates the page with the given HTML. Optionally adds a new page to browser history.
         * @param {string} page - determines which page to load.
         * @param {string} content - used to fill main content section of page.
         * @param {boolean} addHistoryPage - Adds a new page to browser history if true.
         */
        function updateContent(page, content, addHistoryPage) {
            if (addHistoryPage) {
                if (location.pathname.indexOf("index.php") >= 0) {
                    history.pushState({page: page}, pageData.links[page].title, "?page=" + page);
                } else {
                    history.pushState({page: page}, pageData.links[page].title, "index.php?page=" + page);
                }
            }
            document.title = pageData.links[page].title;
            $('#content').html(content);
            updateImages(page);
        }

        /**
         * updateImages - Updates images on page not included in main content section.
         * @param {string} page - determines which page images to use.
         */
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
            /**
             * window.onpopstate - Updates page content when browser navigation buttons are used.
             * @param event
             */
            window.onpopstate = function(event) {
                var page;
                if (event.state === null || event.state.page === null) {
                    var getString = location.search;
                    var pageQuery = getString.indexOf('?page=');
                    if (pageQuery == -1) {
                        pageQuery = getString.indexOf('&page=');
                    }
                    if (pageQuery > -1){
                        getString = getString.substr(pageQuery + 6);
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