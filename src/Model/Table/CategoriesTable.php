<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoriesTable extends Table
{
 public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
         $this->hasMany('Articles',['foreignKey' => 'category_id']);
       
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
            ->requirePresence('article_id', 'create')
            ->notEmpty('article_id');

      
           
        return $validator;
    }
     public function addCategories($d)
    {
    $cat = $this->newEntity();
   
    $cat->name=$d['name'];
     
    if($this->save($cat))
    {  
        
        return true;
    }
    else
    {
        return false;
    }

}


  
}



?>