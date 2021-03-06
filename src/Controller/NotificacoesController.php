<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Notificacoes Controller
 *
 * @property \App\Model\Table\NotificacoesTable $Notificacoes
 *
 * @method \App\Model\Entity\Notificaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotificacoesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $notificacoes = $this->paginate($this->Notificacoes);

        $this->set(compact('notificacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Notificaco id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // $this->viewBuilder()->setClassName('CakePdf.Pdf');
        $notificaco = $this->Notificacoes->get($id);
        $this->viewBuilder()->options();
        $this->set('notificaco', $notificaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notificaco = $this->Notificacoes->newEntity();
        if ($this->request->is('post')) {
            $notificaco = $this->Notificacoes->patchEntity($notificaco, $this->request->getData());
            if ($this->Notificacoes->save($notificaco)) {
                $this->Flash->success(__('The notificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificaco could not be saved. Please, try again.'));
        }
        $this->set(compact('notificaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notificaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notificaco = $this->Notificacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificaco = $this->Notificacoes->patchEntity($notificaco, $this->request->getData());
            if ($this->Notificacoes->save($notificaco)) {
                $this->Flash->success(__('The notificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificaco could not be saved. Please, try again.'));
        }
        $this->set(compact('notificaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notificaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificaco = $this->Notificacoes->get($id);
        if ($this->Notificacoes->delete($notificaco)) {
            $this->Flash->success(__('The notificaco has been deleted.'));
        } else {
            $this->Flash->error(__('The notificaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
