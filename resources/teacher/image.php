<?php
$content = ' <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">';
if ($data['results']!=array())
{
    $res=$data['person'];

    foreach ($data['results'] as $result) {


        $content .=" <p uk-margin>
 
    <img src='{$result["image"]}' alt=''  href='#modal-group-{$result["ID"]}' uk-toggle>
</p>
<div id='modal-group-{$result["ID"]}' uk-modal >
    <div class='uk-modal-dialog'>
        <button class='uk-modal-close-default' type='button' uk-close></button>
        <div class='uk-modal-header uk-margin-remove-bottom'>
           <div>
        <img src='{$res[0]["image"]}' width='50' height='50'>
        <span class='uk-text-middle'>{$res[0]['username']}</span>
    </div>
        </div>
             <img src='{$result["image"]}' alt=''  >
        <div class='uk-text-lead uk-margin uk-margin-left'>{$result["caption"]}</div>
        
      <div class='uk-modal-footer uk-text-right'>";
  $content.="     
            <a href='delete/{$result["ID"]}' class='uk-button uk-button-danger'>Delete</a>
         
        
        </div>
    </div>
</div>

";
    }
}
else
{
   $content=' <img src="../img/vector/undraw_folder_x4ft.svg" height="350px" width="350px">
                <h1><div class="uk-text-bold">Please upload your image</div></h1>
 ';
}



$this->teacher($content);