<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<?php use Bitrix\Main\Page\Asset; ?>

</main>

<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="/">(йеп)</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/jquery-3.2.1.slim.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/jquery-slim.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/popper.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/bootstrap.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/holder.min.js');
?>

<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>


<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body></html>
