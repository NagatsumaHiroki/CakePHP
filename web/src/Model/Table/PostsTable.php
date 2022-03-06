<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault (validator $validator)
    {
        //save等ORMが動くときに起動する
        $validator
        ->notEmpty('title')
        ->requirePresence('title')
        ->notEmpty('body')
        ->requirePresence('body')
        ->add('body',[
            'length' => [
                'rule' => ['minLength', 10],
                'message' => 'body length must be 10+',
            ]
        ]);
        return $validator;
    }
}
