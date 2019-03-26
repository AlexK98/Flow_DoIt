<?php
namespace Toko\Doit\Controller;

/*
 * This file is part of the Toko.Doit package.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;
use Toko\Doit\Domain\Model\Task;

class TaskController extends ActionController
{

    /**
     * @Flow\Inject
     * @var \Toko\Doit\Domain\Repository\TaskRepository
     */
    protected $taskRepository;

    /**
     * @return void
     */
    public function indexAction()
    {
		$this->view->assign('tasks', $this->taskRepository->findAll());
    }

    /**
     * @param \Toko\Doit\Domain\Model\Task $task
     * @return void
     */
    public function showAction(Task $task)
    {
        $this->view->assign('task', $task);
    }

    /**
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * @param \Toko\Doit\Domain\Model\Task $newTask
     * @return void
     */
    public function createAction(Task $newTask)
    {
        $this->taskRepository->add($newTask);
        $this->redirectToUri('/');
    }

    /**
     * @param \Toko\Doit\Domain\Model\Task $task
     * @return void
     */
    public function editAction(Task $task)
    {
        $this->view->assign('task', $task);
    }

    /**
     * @param \Toko\Doit\Domain\Model\Task $task
     * @return void
     */
    public function updateAction(Task $task)
    {
        $this->taskRepository->update($task);
        $this->redirectToUri('/');
    }

    /**
     * @param \Toko\Doit\Domain\Model\Task $task
     * @return void
     */
    public function deleteAction(Task $task)
    {
        $this->taskRepository->remove($task);
        $this->redirectToUri('/');
	}

    public function homeAction()
    {
        $this->redirectToUri('/');
    }
}
