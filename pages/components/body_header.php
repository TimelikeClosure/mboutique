<!--  Begin page header  -->
<header id="page-header">
    <!--  Begin header bar  -->
    <div class="page-header-bar" >
        <!--  Begin header logo  -->
        <div class="header-logo">
            <img src="<?="{$pageData['images']['logo']['src']}"?>" alt="<?="{$pageData['images']['logo']['alt']}"?>" />
        </div>
        <!--  Close header logo  -->

        <!--  Begin navigation bar  -->
        <nav>
            <ul>
                <?php
                    foreach($pageData['links'] as $menu_key => $menu_item){
                        ?>
                            <li><a href="index.php?page=<?=$menu_key?>"><?=$menu_item['name']?></a></li>
                        <?php
                    }
                ?>
            </ul>
        </nav>
        <!--  Close navigation bar  -->
    </div>
    <!--  Close header bar  -->

    <!--  Begin jumbotron  -->
    <div class="jumbotron">
        <img src="<?=$pageData['images']['jumbotron']['src']?>" alt="<?=$pageData['images']['jumbotron']['alt']?>" />
    </div>
    <!--  Close jumbotron  -->
</header>
<!--  Close page header  -->