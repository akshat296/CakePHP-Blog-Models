<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table
{
 public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('articles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsTo('Categories',['foreignKey' => 'category_id','joinType'=>'LEFT']);
    }
     public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');
           
        return $validator;
    }
     public function addArticles($d)
    {
    $article = $this->newEntity();
    $article = $this->patchEntity($article,$d);
    if($this->save($article))
    {  

      
        return true;
    }
    else
    {
        return false;
    }
}
public function showCategory()
{
 //  $category = $this->Categories->find();
    $cat = $this->Categories->find()->select('name');
  
   return $cat;
}
public function search($name)
{
         $cat2 = $this->find()->where(["Articles.name LIKE"=>"%$name%"]);
     
    
       return $cat2;
}
  
}



?>