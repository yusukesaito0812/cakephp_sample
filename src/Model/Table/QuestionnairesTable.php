<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SoftDelete\Model\Table\SoftDeleteTrait;

/**
 * Questionnaires Model
 *
 * @method \App\Model\Entity\Questionnaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Questionnaire newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Questionnaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Questionnaire|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Questionnaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Questionnaire[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Questionnaire findOrCreate($search, callable $callback = null)
 */
class QuestionnairesTable extends Table
{
    use SoftDeleteTrait;
    protected $softDeleteField = 'deleted';

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('questionnaires');
        $this->displayField('contents');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]);
        
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'bindingKey' => 'id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');
        
        $validator
            ->requirePresence('contents', 'create')
            ->notEmpty('contents');

        $validator
            ->dateTime('created_at');

        $validator
            ->dateTime('updated_at');
        
        $validator
            ->notEmpty('is_show');

        return $validator;
    }
    
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        return $rules;
    }
}
