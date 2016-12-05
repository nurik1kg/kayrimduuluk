<?php
namespace frontend\controllers;

use app\models\News;
use app\models\People;
use app\models\Reports;
use app\models\Schools;
use app\models\Sponsor;
use app\models\Statistic;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $statistic = Statistic::findOne(1);
        return $this->render('index',[
            'statistic' => $statistic,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $schools = Schools::find()->all();
        $reports = Reports::find()->all();
        return $this->render('about',[
            'schools' => $schools,
            'reports' => $reports,
        ]);
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    /*
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    */
    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    /**
     * Sponsor pages
     */
    public function actionSponsors()
    {
        $model = Sponsor::find()->all();
        return $this->render('sponsor',[
            'sponsors'=>$model,
        ]);
    }

    public function  actionNews(){
        switch (Yii::$app->language){
            case 'kg-KG':{
                $query = News::find()->where(['not', ['title_kg'=>null]])->andWhere(['not', ['text_kg' => null]]);
                break;
            }
            case 'ru-RU':{
                $query = News::find()->where(['not', ['title_ru'=>null]])->andWhere(['not', ['text_ru' => null]]);
                break;
            }
            case 'en-EN':{
                $query = News::find()->where(['not', ['title_en'=>null]])->andWhere(['not', ['text_en' => null]]);
                break;
            }
            default : {
                $query = News::find()->where(['not', ['title_kg'=>null]])->andWhere(['not', ['text_kg' => null]]);
            }
        }
//        $query = News::find();
        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' =>$query->count(),
        ]);
        $news = $query->orderBy('date')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('news',[
            'news' => $news,
            'pagination' => $pagination,
        ]);
    }

    public function actionGreat_names(){
        switch (Yii::$app->language){
            case 'kg-KG':{
                $query = People::find()->where(['not', ['name_kg'=>null]])->andWhere(['not', ['content_kg' => null]])->all();
                $lang =1;
                break;
            }
            case 'ru-RU':{
                $query = People::find()->where(['not', ['name_ru'=>null]])->andWhere(['not', ['content_ru' => null]])->all();
                $lang =2;
                break;
            }
            case 'en-EN':{
                $query = People::find()->where(['not', ['name_en'=>null]])->andWhere(['not', ['content_en' => null]])->all();
                $lang =3;
                break;
            }
            default: {
                $query = People::find()->where(['not', ['name_kg'=>null]])->andWhere(['not', ['content_kg' => null]])->all();
                $lang =1;
            }
        }
        return $this->render('people',[
            'peoples'=>$query,
            'lang' => $lang,
        ]);
    }

    public function actionHelping($name,$phone,$email){
        Yii::$app->mail
            ->compose()
            ->setFrom($email)
            ->setTo('nurik1kg@mail.ru')
            ->setSubject('Жардам бергим келет!')
            ->setTextBody("Аты жөнү: ".$name."     "."Телефон номери: ".$phone."       "."email : ".$email)
            ->send();
        switch (Yii::$app->language){
            case 'kg-KG' : {
                return 'Талабыңыз аткарылды. Чоң рахмат! Кайдыгер карабаганыз үчүн!';
                break;
            }
            case 'ru-RU' : {
                return 'Заявка успешно отправлено.';
                break;
            }
            case 'en-EN' : {
                return 'Sending success!';
                break;
            }
            default : {
                return 'Талабыңыз аткарылды. Чоң рахмат! Кайдыгер карабаганыз үчүн!';
            }
        }
    }
}
