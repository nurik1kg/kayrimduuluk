
<?php
switch (Yii::$app->language) {
    case 'kg-KG' : {
        $message = 'Жиберүүдө ката тетти! Кайра жиберип көрүңүз!';
        break;
    }
    case 'ru-RU' : {
        $message = 'Ошибка! Заявка не отправлено.';
        break;
    }
    case 'en-EN' : {
        $message = 'Sending error!';
        break;
    }
    default : {
        $message = 'Жиберүүдө ката тетти! Кайра жиберип көрүңүз!';
    }
}
?>
<div id="modal-donate" class="uk-modal modaldonate uk-open" aria-hidden="false" style="display: block; overflow-y: scroll;">
    <div class="uk-modal-dialog uk-border-rounded" style="max-width: 350px; top: 200px;">
        <form id="w1" class="uk-form" action="/site/feedback" method="post">
            <input type="hidden" name="_csrf-frontend" value="Z3Rodk5LMmxWFz8aPBJqOwYDJBIDGX02Fh8BHSIGYDwtOlocJSlnGQ==">                            <fieldset data-uk-margin="">
                <legend><i class="fa fa-close ff" aria-hidden="true"><?=$message?></i> </legend>
            </fieldset>
        </form>
    </div>
</div>