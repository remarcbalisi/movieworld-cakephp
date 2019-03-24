<?php
namespace App\Controller\Customer;

use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Roles');
        $this->loadModel('Movies');
        $this->loadModel('Cinemas');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Cinemas']
        ];
        $orders = $this->paginate($this->Orders);

        foreach( $orders as $order )
        {
            // dd($order->cinema);
            $movie = $this->Movies->find('all')->where([
                'id' => $order->cinema->movie_id
            ])->first();
            $order['total_price'] = $order->pieces * $movie->price;
        }

        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Users', 'Cinemas']
        ]);

        $this->set('order', $order);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $user = $this->Orders->Users->find('all')->where([
            'id' => $this->Auth->user('id'),
        ])->first();
        $cinemas = $this->Orders->Cinemas->find('all', ['limit' => 200]);
        foreach( $cinemas as $cinema ){
            $cinema['movie'] = $cinema->getMovieById($cinema->movie_id);
            // dd($cinema);
        }
        $this->set(compact('order', 'user', 'cinemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $cinemas = $this->Orders->Cinemas->find('list', ['limit' => 200]);
        $this->set(compact('order', 'users', 'cinemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        $role = $this->Roles->find('all')->where([
            'id' => $this->Auth->user('role_id')
        ])->first();

        if( $role->name == 'Customer' ) {
            return true;
        }else{
            return false;
        }
    }

}
