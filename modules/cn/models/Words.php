<?php 
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
use app\libs\Pager;
use app\modules\cn\models\Content;
class Words extends ActiveRecord {
    public $cateData;

    public static function tableName(){
            return '{{%words}}';
    }
}