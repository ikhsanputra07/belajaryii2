<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Mahasiswa;
use app\models\RaporMurid;
use app\models\RaporMuridSearch;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;



class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCoba($npm)
    {   
        $model = Mahasiswa::findAll($npm);

        return $this->render('test',
            [
              'model'=>$model
            ]
            );
    }
    public function actionRapormurid()
    {
        // $model= RaporMurid::findAll($npm);

        $model = new RaporMurid;

        $query= $model->find();
        
        echo 'sebelum load';
        var_dump($model);
        // $get = Yii::$app->request->get();

        if($model->load(Yii::$app->request->get())){
            $query->andFilterWhere(['npm'=>$model->npm,'nama'=>$model->nama,'mata_kuliah'=>$model->mata_kuliah]);
        }


        // $query->where(['npm'=>$get['RaporMurid']['npm']])
        // echo $model[0]['npm'];
        // echo $model[0]->npm;
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query'=>$query,
        ]);

        // var_dump($dataProvider);

        

        return $this->render('rapormurid',
            [
            'model'=>$model,
            // 'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider
            ]
        );
    }
}
