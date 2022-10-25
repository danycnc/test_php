<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;
use yii\data\ActiveDataProvider;

class UsersController extends Controller
{
    public function actionIndex()
    {


        $dataProvider = new ActiveDataProvider([
            'query' => Users::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [

            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTags()
    {
        $query = Users::find();

        # SELECT COUNT(Tags), Tags FROM users GROUP BY Tags;  <--Query su cui ho basato quella seguente, non ho saputo trovare di meglio
        $tags = $query->select('Tags, COUNT(*) as count')->groupBy('Tags')->orderBy(['count' => SORT_DESC])->asArray()->all();

        return $this->render('tags', [
            'tags' => $tags
        ]);
    }
}
