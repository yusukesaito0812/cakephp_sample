<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Questionnaires Controller
 *
 * @property \App\Model\Table\QuestionnairesTable $Questionnaires
 */
class QuestionnairesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $questionnaires = $this->paginate($this->Questionnaires->find('all', ['contain' => ['Categories']]));

        $this->set(compact('questionnaires'));
        $this->set('_serialize', ['questionnaires']);
    }

    /**
     * View method
     *
     * @param string|null $id Questionnaire id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionnaire = $this->Questionnaires->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('questionnaire', $questionnaire);
        $this->set('_serialize', ['questionnaire']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionnaire = $this->Questionnaires->newEntity();
        if ($this->request->is('post')) {
            $questionnaire = $this->Questionnaires->patchEntity($questionnaire, $this->request->data);
            if ($this->Questionnaires->save($questionnaire)) {
                $this->Flash->success(__('The questionnaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The questionnaire could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('questionnaire'));
        $this->set('_serialize', ['questionnaire']);
        $categoriesTable = TableRegistry::get('categories');
        $categories = $categoriesTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ]);
        $this->set(compact('categories'));
        $this->set('_serialize', ['categories']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Questionnaire id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionnaire = $this->Questionnaires->get($id, [
            'contain' => ['Categories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionnaire = $this->Questionnaires->patchEntity($questionnaire, $this->request->data);
            if ($this->Questionnaires->save($questionnaire)) {
                $this->Flash->success(__('The questionnaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The questionnaire could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('questionnaire'));
        $this->set('_serialize', ['questionnaire']);
        $categories = $this->Questionnaires->Categories->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ]);
        $this->set('categories', $categories);
    }

    /**
     * Delete method
     *
     * @param string|null $id Questionnaire id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionnaire = $this->Questionnaires->get($id);
        if ($this->Questionnaires->delete($questionnaire)) {
            $this->Flash->success(__('The questionnaire has been deleted.'));
        } else {
            $this->Flash->error(__('The questionnaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    
    public function show()
    {
        $questionnaires = $this;

        $this->set(compact('questionnaires'));
        $this->set('_serialize', ['questionnaires']);
    }
    
    public function stresscheck()
    {

        $questionnaires = $this->Questionnaires->find('all', ['contain' => ['Categories']]);
        
        
        $this->set(compact('questionnaires'));
        $this->set('_serialize', ['questionnaires']);
    }
    public function score(){
        //送信されたかチェック
        if(!$this->request->data()){
            return $this->redirect('/');
        }
        $loggedUserId = $this->Auth->user('id');
        //データ取得
        //設問リスト
        $questionnaire_list=$this->request->data('questionnaire_list');
        //回答リスト
        $answer_list=$this->request->data('answer_list');
        
        //回答を採点
        //設問のpoint_rate*回答番号を乗算でカテゴリごとに合算
        //point_listでカテゴリごとの合計点を格納
        $point_sum = 0;
        $point_list = [];
        for($i = 1;$i < sizeof($questionnaire_list)+1;$i++){
            $questionnaire = TableRegistry::get('questionnaires')->get($questionnaire_list[$i]);
            $point = $answer_list[$i] * $questionnaire->point_rate;
            $point_sum += $point;
            if($i % 10 == 0){
                array_push($point_list, $point_sum/10);
                $point_sum = 0;
            }
        }
        //回答データ保存
        $answersTable = TableRegistry::get('answers');
        $answers = $answersTable->newEntity();

        $answers->user_id = $loggedUserId;
        $answers->questionnaires_list = serialize($questionnaire_list);
        $answers->answers_list = serialize($answer_list);

        $answersTable->save($answers);
        
        //画面出力
        $this->set('point_list', $point_list);
        $this->set('questionnaire_list', $questionnaire_list);
        $this->set('answer_list', $answer_list);
    }
}
