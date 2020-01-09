<?php
$content='
<div class="uk-container uk-margin-bottom">
        
<div class="uk-child-width-1-4@m" uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 400; repeat: true">
    <!--part1-->
   
';
if($data['result']!=null) {
    foreach ($data['result'] as $result) {

        $content .= "
 <div>
                <div class='uk-card uk-card-default me-radus'>
                    <div class='uk-card-media-top'>
                        <img src='{$result["image"]}' alt='' class='me-topradus'>
                    </div>
                    
                    <div class='uk-card-footer'>
                        <a href='comment/{$result["ID"]}' class='uk-button uk-button-text'>Read more</a>
                    </div>
                </div>
          </div>
";
    }
}
else
{
    $content=' <img src="../img/vector/undraw_folder_x4ft.svg" height="350px" width="350px">
                <h1><div class="uk-text-bold">Not fount any post</div></h1>
 ';
}
$this->student($content);