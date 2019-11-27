<?php

return function($view) {
    $GLOBALS['log']->info("Executing sample hook");
    $view->lv->actionsMenuExtraItems[] = <<<EOF
        <a
            class="menuItem" 
            style="width: 150px;" 
            href="#"
            onmouseover='hiliteItem(this,"yes");'
            onmouseout='unhiliteItem(this);'
            onclick="
                sugarListView.get_checks();
                if (sugarListView.get_checks_count() &lt; 1) {
                    alert('Nothing selected');
                    return false;
                }
                alert('Selected some items');
            "
        >Custom Button</a>
EOF;
};