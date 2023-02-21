linux Run lamp
--------------
sudo ./manager-linux-x64.run

sudo systemctl start apache2
sudo systemctl stop apache2
sudo systemctl status apache2


permission
----------------------------
sudo chmod -R 777 /opt/lampp/htdocs/bm_garage/

--------------------
yiii
----------->>
1. install composer
2. composer create-project --prefer-dist yiisoft/yii2-app-advanced project_name
3 create index file from frontent/web
4. php init --> add db in common >config-> main-local .... Run migration ;_____ php yii migrate


'dsn' => 'mysql:host=127.0.0.1;dbname=yii_nov28',

common -> main-local.php

create assests folder and giv permission 

and   last run
----------------------------------------------------
       $pathFile = \Yii::getAlias('@webroot');

 config/main.php
      'defaultRoute' => 'example', ( = = = setting default route = = = )
----------------------------------------------------
get rows
$enroll = Enrollment::find()
->where(['student_id' => $model->id]) 
->all();
$query->andWhere('end_date <= NOW()');
 $model=AssignmentSubmitedData::findOne(["assignment_id"=> $assignment_id,
    "user_id" => $student_id ]);




    Yii::$app->db->createCommand()->batchInsert('assesment_options',
    ['question_id', 'option'], [
    [1, 'wgwgw'],
    [1, 'wegwegw'],
    [1, 'wegwe weg we'],
    ])
    ->execute();

    // echo "
    <pre>".$modelAssignment->createCommand()->getRawSql().'<br>';
             

        <div class="d-flex justify-content-center">
            <a data-toggle="collapse" class="add_new_btn" data-target="#addmore">Add files</a>
        </div>


 jQuery.pjax.reload({ container: '#contentlistdiv' + lessonid,
 async: false  });

        $res=  $this->renderPartial('create', [


 toastr["error"]("Error", "Error");
            
        if ($this->request->isPost) {

   ALTER TABLE `comments` ADD FOREIGN KEY (`user_id`) REFERENCES   `user`(`id`);

////
Yii::$app->user->identity->id;

insert 
var_dump($modelComment->errors);
 var_dump($modelComment->getErrors());
                



//////////////////////////////
mindatw
 'onClose' => new \yii\web\JsExpression('function( selectedDate ) {
 $( "#'.Html::getInputId($model, 'date_to').'" ).datepicker( "option", "minDate", selectedDate ); 
 }')
 
                                                                                
                                                                                
                                                                                
 
 
 
 
                                                                                
                                                                                
                                                                                

///////////////////

 <i class="fas fa-plus-circle mr-1"></i>

 'layout' => '{items}<div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-12">{summary}</div>
                        <div class="col-xl-6 col-lg-6 col-md-12"><nav class="float-right">{pager}</nav></div></div>',
