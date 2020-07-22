<?php

namespace app\controllers;

use Yii;
use app\models\IntegrantesComunidad;
use app\models\IntegrantesComunidadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IntegrantesComunidadController implements the CRUD actions for IntegrantesComunidad model.
 */
class IntegrantesComunidadController extends Controller
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
     * Lists all IntegrantesComunidad models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IntegrantesComunidadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IntegrantesComunidad model.
     * @param integer $Id
     * @param integer $Id_comunidades
     * @param integer $Id_personas
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id, $Id_comunidades, $Id_personas)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id, $Id_comunidades, $Id_personas),
        ]);
    }

    /**
     * Creates a new IntegrantesComunidad model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IntegrantesComunidad();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id' => $model->Id, 'Id_comunidades' => $model->Id_comunidades, 'Id_personas' => $model->Id_personas]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing IntegrantesComunidad model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Id
     * @param integer $Id_comunidades
     * @param integer $Id_personas
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id, $Id_comunidades, $Id_personas)
    {
        $model = $this->findModel($Id, $Id_comunidades, $Id_personas);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id' => $model->Id, 'Id_comunidades' => $model->Id_comunidades, 'Id_personas' => $model->Id_personas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IntegrantesComunidad model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Id
     * @param integer $Id_comunidades
     * @param integer $Id_personas
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id, $Id_comunidades, $Id_personas)
    {
        $this->findModel($Id, $Id_comunidades, $Id_personas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IntegrantesComunidad model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Id
     * @param integer $Id_comunidades
     * @param integer $Id_personas
     * @return IntegrantesComunidad the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id, $Id_comunidades, $Id_personas)
    {
        if (($model = IntegrantesComunidad::findOne(['Id' => $Id, 'Id_comunidades' => $Id_comunidades, 'Id_personas' => $Id_personas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
