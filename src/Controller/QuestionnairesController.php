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
        $questionnaires = $this->paginate($this->Questionnaires);

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
            'contain' => []
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
            'contain' => []
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
        for($i = 0;$i < sizeof($questionnaire_list);$i++){
            $questionnaire = TableRegistry::get('questionnaires')->get($questionnaire_list[$i + 1]);
            $point = $answer_list[$i + 1] * $questionnaire->point_rate;
            $point_sum += $point;
            if($i % 10 == 0 && $i !== 0 ){
                $point_list.push($point_sum);
                $point_sum = 0;
            }
        }
        
        //ChartJS用にデータ集計
        
        //画面出力
        $this->set('point_list', $point_list);
        $this->set('questionnaire_list', $questionnaire_list);
        $this->set('answer_list', $answer_list);
    }
}
