<?php

namespace app\controllers;

use Yii;
use yii\grid\GridView;
use yii\web\Controller;
use app\models\Employee;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;

class EmployeeController extends Controller
{
    public function actionTest(){

        $count = Yii::$app->db->createCommand('SELECT COUNT(*) FROM employee')->queryScalar();
        $query = 'select * from employee';

        $dataProvider = new SqlDataProvider([
            'sql' => $query,
            'totalCount' => $count,
        ]);

        return GridView::widget([
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Employee::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return json_encode($dataProvider);

        return GridView::widget([
            'dataProvider' => $dataProvider,
        ]);

        $emp = Employee::find()->all();

        return $this->render('index', array(
            'data' => $emp
        ));
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    {
    }

}
