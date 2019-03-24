<?php
namespace App\Controller\Customer;

use App\Controller\AppController;

/**
 * Cinemas Controller
 *
 * @property \App\Model\Table\CinemasTable $Cinemas
 *
 * @method \App\Model\Entity\Cinema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CinemasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Movies']
        ];
        $cinemas = $this->paginate($this->Cinemas);

        $this->set(compact('cinemas'));
    }

    /**
     * View method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cinema = $this->Cinemas->get($id, [
            'contain' => ['Movies', 'Orders']
        ]);

        $this->set('cinema', $cinema);
    }

}
