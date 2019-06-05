<?php
namespace Toko\Doit\Controller;

/*
 * This file is part of the Toko.Doit package.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;
use Toko\Doit\Domain\Model\Task;
use Toko\Doit\Domain\Repository\TaskRepository;
use Neos\Flow\Mvc\Exception\StopActionException;
use Neos\Flow\Mvc\Exception\UnsupportedRequestTypeException;
use Neos\Flow\Persistence\Exception\IllegalObjectTypeException;

class TaskController extends ActionController
{
    /**
     * @Flow\Inject
     * @var TaskRepository
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
     * @param Task $task
     * @return void
     */
    public function showAction(Task $task)
    {
        $this->view->assign('task', $task);
    }

    /**
     * @return void
     */
    public function newAction() { }

    /**
     * @param Task $newTask
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @throws IllegalObjectTypeException
     */
    public function createAction(Task $newTask)
    {
        $this->taskRepository->add($newTask);
        $this->redirectToUri('/');
    }

    /**
     * @param Task $task
     * @return void
     */
    public function editAction(Task $task)
    {
        $this->view->assign('task', $task);
    }

    /**
     * @param Task $task
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @throws IllegalObjectTypeException
     */
    public function updateAction(Task $task)
    {
        $this->taskRepository->update($task);
        $this->redirectToUri('/');
    }

    /**
     * @param Task $task
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @throws IllegalObjectTypeException
     */
    public function deleteAction(Task $task)
    {
        $this->taskRepository->remove($task);
        $this->redirectToUri('/');
	}

    /**
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function homeAction()
    {
        $this->redirectToUri('/');
    }
}
