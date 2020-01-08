<?php
$gets=$data["get"];
$content="";
foreach ($gets as $get)
{
$content.=
<div class=\"uk-text-left\">
    
    </div>
    <div class=\"uk-card uk-card-default  uk-width-1-1 me-radus uk-margin-top\">
        <div>
            <div class=\"uk-height-small\">
            <div>

            <div class=\"uk-child-width-expand uk-grid-small uk-text-center\" uk-grid>
                <div>
                    <div class=\"uk-position-medium uk-position-center-left \">
                        <img src='' width=\"50\" height=\"50\">
                        <span class=\"uk-text-top uk-text-primary\">Lorem ipsum.</span>
                    </div>
                </div>
                <div class=\"uk-width-2-3 \">
                    <div class=\" uk-text-break uk-margin-medium-top\">{$get['comment']}</div>
                </div>
               <!-- <div>

            </div> -->
                <div>
                  <img src='{$get["image"]}' height=\"150px\" width=\"130px\"  alt=\"\" uk-img class=\"uk-margin-top uk-margin-large-right me-radus\">
                  </div>
                </div> 
            </div>
            </div>
        </div>
     </div>  

";
}
else{
<img src="../img/folders.jpg">
}
$this->teacher($content);
