<?php
switch (Yii::$app->language) {
    case 'kg-KG' : {
        $message = 'Талабыңыз аткарылды. Чоң рахмат!';
        break;
    }
    case 'ru-RU' : {
        $message = 'Заявка успешно отправлено.';
        break;
    }
    case 'en-EN' : {
        $message = 'Sending success!';
        break;
    }
    default : {
        $message = 'Талабыңыз аткарылды. Чоң рахмат!';
    }
}
?>

<div id="modal-donate" class="uk-modal modaldonate uk-open" aria-hidden="false" style="display: block; overflow-y: scroll;">
    <div class="uk-modal-dialog uk-border-rounded" style="max-width: 350px; top: 200px;">
        <form id="w1" class="uk-form" action="/site/feedback" method="post">
            <input type="hidden" name="_csrf-frontend" value="Z3Rodk5LMmxWFz8aPBJqOwYDJBIDGX02Fh8BHSIGYDwtOlocJSlnGQ==">                            <fieldset data-uk-margin="">
                <legend><i class="fa fa-check ff" aria-hidden="true"><?=$message?></i> </legend>
            </fieldset>
        </form>
    </div>
</div>

<script type="text/javascript">
    <!--
    function Redirect() {
        window.location="/";
    }

    //document.write("You will be redirected to main page in 10 sec.");
    setTimeout('Redirect()', 3000);
    //-->
</script>