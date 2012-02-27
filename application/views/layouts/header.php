<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>jQuery Mobile: Demos and Documentation</title>
        <?php if ($this->config->item('theme') == '') { ?>
            <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.theme.css" />
        <?php } else { ?>
            <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('theme') ?>jquery.mobile.theme.css" />
        <?php } ?>
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.core.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.transitions.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.grids.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.headerfooter.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.navbar.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.button.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.collapsible.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.controlgroup.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.dialog.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.forms.checkboxradio.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.forms.fieldcontain.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.forms.select.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.forms.textinput.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.listview.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jquery.mobile.forms.slider.css" />
        <link rel="stylesheet"  href="<?= $this->config->base_url() . $this->config->item('css_url') ?>jqm-docs.css" />

        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.widget.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.media.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.support.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.event.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.hashchange.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.page.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.core.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.navigation.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.fixHeaderFooter.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.forms.checkboxradio.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.forms.textinput.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.forms.select.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.buttonMarkup.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.forms.button.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.forms.slider.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.collapsible.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.controlGroup.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.fieldContain.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.listview.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.listview.filter.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.dialog.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.navbar.js"></script>
        <script type="text/javascript" src="<?= $this->config->base_url() . $this->config->item('js_url') ?>jquery.mobile.grid.js"></script>
    </head> 
    <body> 
        <div data-role="page" data-theme="b" id="jqm-home">