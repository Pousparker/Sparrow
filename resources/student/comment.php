<?php
$result=$data["re"];
$id=$data["id"];
$reply=$data['reply'];


if($result!=null){

    $content="
        <div class='uk-card uk-card-default uk-card-body uk-width-1-1@m me-radus'>
        <img src='../{$result[0]["image"]}' alt=''>  
        </div>
        
        <div class='uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-margin ' style='background-color: #39d39f; ' uk-grid> 

            <a class='uk-button uk-button-default' href='#modal-center' uk-toggle>Commenting</a>

            <div id='modal-center' class='uk-flex-top' uk-modal>
                <div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>

                    <button class='uk-modal-close-default' type='button' uk-close></button>
                    <form action='../message/{$id}' method='post'>
                    
                        <textarea class='uk-textarea' rows='8' placeholder='Write here' name='text'></textarea>
                    
                        <input class='uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-margin-top me-radus' type='submit' value='send'>
                    
                    </form>
                  </div>
                 </div>
        </div>
        ";
    if ($result[0]["comment"] != null){


        $content .="
        <div class='uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-margin me-radus' uk-grid>
            <article class='uk-comment uk-comment-primary'>
                <header class='uk-comment-header uk-grid-medium uk-flex-middle' uk-grid>
                    <div class='uk-width-auto'>
                        <img class='uk-comment-avatar' src='images/avatar.jpg' width='80' height='80' alt='''>
                    </div>
                    <div class='uk-width-expand'>
                        <h4 class='uk-comment-title uk-margin-remove uk-text-left'><a class='uk-link-reset ' href=''#'>{$rep["user_id"]}</a></h4>
                        <div class='uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top'>
                            
                            <a class='uk-button uk-button-default' href='#modal-center1' uk-toggle>Reply</a>

                            <div id='modal-center1' class='uk-flex-top' uk-modal>
                            <div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>

                                <button class='uk-modal-close-default' type='button' uk-close></button>
                                <form action='../replay/{$id}' method='post'>
                        
                                    <textarea class='uk-textarea' rows='8' placeholder='Write here' name='reply'></textarea>
                                    <input class='uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-margin-top me-radus' type='submit' value='send'>
                                </form>
                          </div>
                          </div>
                        </div>
                    </div>
                </header>
                <div class='uk-comment-body'>
                    <p>{$result[0]["comment"]}</p>
                </div>
            </article>        
            </div>   
";
        foreach ($reply as $rep){
            $content .= "<div class='uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-margin me-radus' uk-grid>
            <article class='uk-comment uk-comment-primary'>
                <header class='uk-comment-header uk-grid-medium uk-flex-middle' uk-grid>
                    <div class='uk-width-auto'>
                        <img class='uk-comment-avatar' src='images/avatar.jpg' width='80' height='80' alt='''>
                    </div>
                    <div class='uk-width-expand'>
                        <h4 class='uk-comment-title uk-margin-remove uk-text-left'><a class='uk-link-reset ' href=''#'>Author</a></h4>
                        <div class='uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top'>
                            
                            <a class='uk-button uk-button-default' href='#modal-center1' uk-toggle>Reply</a>

                            <div id='modal-center1' class='uk-flex-top' uk-modal>
                            <div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>

                                <button class='uk-modal-close-default' type='button' uk-close></button>
                                <form action='../replay/{$id}' method='post'>
                        
                                    <textarea class='uk-textarea' rows='8' placeholder='Write here' name='reply'></textarea>
                                    <input class='uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-margin-top me-radus' type='submit' value='send'>
                                </form>
                          </div>
                         </div>
                        </div>
                    </div>
                </header>
                <div class='uk-comment-body'>
                    <p>{$rep["replay"]}</p>
                </div>
            </article>        
            </div>";
        }
    }
    else{

    }
}
else{
    $content='
    <img src="../img/vector/undraw_collecting_fjjl.svg" src="empty.." width="400px" height="400px" class="uk-margin-medium-top">
    ';
}

$this->student($content);
