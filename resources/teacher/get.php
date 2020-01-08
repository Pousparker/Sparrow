<?php
$content = '

<form method="post" action="upload" enctype="multipart/form-data"> 
<div  uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin me-radus" uk-grid>

    <div >
        <div class="uk-card-body uk-height-medium " >
            <div class="uk-card uk-position-center-left uk-margin-large-left">
                <img src="../img/vector/undraw_blog_anyj.svg" alt=""  style="widows: 200px; height: 200px;" class="  uk-margin-large-left">
                
                 <sapn class=" uk-text-success uk-margin-large-left">
                        <h2>Write your caption</h2>
                </sapn>    
                 
               
            </div>
        </div>
    </div>
    <div>
        <div class="uk-margin-medium-top uk-margin-large-right">
            <textarea class="uk-textarea" rows="8" placeholder="Write here" name="text"></textarea>
        </div>
    </div>
</div>
</div>
 <div  uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin me-radus" uk-grid>

<div >
    <div class="uk-card-body uk-height-medium " >
       <div class="uk-card uk-position-center">
           <img src="../img/vector/undraw_file_searching_duff.svg" alt=""  style="widows: 150px; height: 150px;" class=" uk-margin-medium-bottom">
       </div>
        <div class="uk-position-bottom-center" >

            
                <div class="uk-margin" uk-margin>
                       <div uk-form-custom="target: true">
                           <input type="file" name="items">
                           <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                       </div>
                       <input type="submit" value="Upload" class="uk-button uk-button-primary">
                   </div>
            
        </div>
    </div>
</div>
</div>
</div>
</form>
';
$this->teacher($content);