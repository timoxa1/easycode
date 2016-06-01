<?php

namespace app\controllers;

use app\models\Motor;
use Yii;
use app\models\Post;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Brend;
use yii\data\Pagination;
use app\models\Year;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionAll()
    {
        $years = Year::find()->all();
        $yearId = Yii::$app->request->get('year_id', 0);
        $params = [];
        if ($yearId != 0) {
            $params['motor_id'] = $yearId;

        }
        
        $motors = Motor::find()->all();
        $motorId = Yii::$app->request->get('motor_id', 0);
        $params = [];
        if ($motorId != 0) {
            $params['motor_id'] = $motorId;

        }

        $brends = Brend::find()->all();
        $brendId = Yii::$app->request->get('brend_id', 0);
        $params = [];
        if ($brendId != 0) {
            $params['brend_id'] = $brendId;

        }



        $model = new Post();
        $model->load(Yii::$app->request->post()) && $model->seve();
        $models = Post::find();
        $pagination = new Pagination(['defaultPageSize' => 2,
            'totalCount' => $models->count()]);
        $models = $models
            ->orderBy('id DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->where($params)
            ->all();

        return $this->render('all',[
            'pagination' => $pagination,
            'models' => $models,
            'brendId' => $brendId,
            'brends' => $brends,
            'model' => $model,
            'motors' => $motors,
            'motorId' => $motorId,
            'years' => $years,
            'yearId' => $yearId,
        ]);
    }
}
