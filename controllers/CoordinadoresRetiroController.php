<?php

namespace app\controllers;

use Yii;
use app\models\CoordinadoresRetiro;
use app\models\CoordinadoresRetiroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CoordinadoresRetiroController implements the CRUD actions for CoordinadoresRetiro model.
 */
class CoordinadoresRetiroController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CoordinadoresRetiro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CoordinadoresRetiroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CoordinadoresRetiro model.
     * @param integer $Id
     * @param integer $Id_personas
     * @param integer $Id_retiros_FDS
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id, $Id_personas, $Id_retiros_FDS)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id, $Id_personas, $Id_retiros_FDS),
        ]);
    }

    /**
     * Creates a new CoordinadoresRetiro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CoordinadoresRetiro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id' => $model->Id, 'Id_personas' => $model->Id_personas, 'Id_retiros_FDS' => $model->Id_retiros_FDS]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CoordinadoresRetiro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Id
     * @param integer $Id_personas
     * @param integer $Id_retiros_FDS
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id, $Id_personas, $Id_retiros_FDS)
    {
        $model = $this->findModel($Id, $Id_personas, $Id_retiros_FDS);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id' => $model->Id, 'Id_personas' => $model->Id_personas, 'Id_retiros_FDS' => $model->Id_retiros_FDS]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CoordinadoresRetiro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Id
     * @param integer $Id_personas
     * @param integer $Id_retiros_FDS
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id, $Id_personas, $Id_retiros_FDS)
    {
        $this->findModel($Id, $Id_personas, $Id_retiros_FDS)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CoordinadoresRetiro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Id
     * @param integer $Id_personas
     * @param integer $Id_retiros_FDS
     * @return CoordinadoresRetiro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id, $Id_personas, $Id_retiros_FDS)
    {
        if (($model = CoordinadoresRetiro::findOne(['Id' => $Id, 'Id_personas' => $Id_personas, 'Id_retiros_FDS' => $Id_retiros_FDS])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
