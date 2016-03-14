<?php
    if (empty($INTERNAL_LOAD) || $INTERNAL_LOAD === false) {
        http_response_code(403);
        echo "403 Bad Request";
        exit();
    }
?><!--  Begin page header  -->
<header id="page-header">
    <!--  Begin header bar  -->
    <div class="page-header-bar" >
        <!--  Begin header logo  -->
        <div id="logo" class="header-logo">
            <img
                src="<?=
                    empty($pageData['holiday']['images']['logo']['src']) ? $pageData['links'][$pageData['page']]['images']['logo']['src']
                                                                         : $pageData['holiday']['images']['logo']['src']
                ?>"
                alt="<?=$pageData['links'][$pageData['page']]['images']['logo']['alt']?>"
            />
        </div>
        <!--  Close header logo  -->

        <!--  Begin navigation bar  -->
        <nav>
            <ul>
                <?php
                    foreach($pageData['links'] as $menu_key => $menu_item){
                        if ($menu_key != 'error') {
                            ?>
                                <li><a href="index.php?page=<?=$menu_key?>" onclick="pageLoad('<?=$menu_key?>', true); return false;"><?=$menu_item['name']?></a></li>
                            <?php
                        }
                    }
                ?>
            </ul>
        </nav>
        <!--  Close navigation bar  -->
    </div>
    <!--  Close header bar  -->

    <!--  Begin jumbotron  -->
    <div id="jumbotron" class="jumbotron">
        <img src="<?=$pageData['links'][$pageData['page']]['images']['jumbotron']['src']?>" alt="<?=$pageData['links'][$pageData['page']]['images']['jumbotron']['alt']?>" />
    </div>
    <!--  Close jumbotron  -->
</header>
<!--  Close page header  -->