<?php

namespace Hex0gen\LATaskManager\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use Hex0gen\LATaskManager\Models\Task;
use Hex0gen\LATaskManager\Models\TaskFields;
use KevinSoft\MultiLanguage\MultiLanguage;

class LATaskManagerController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Task Manager')
            ->description('Description')
            ->body(view('la-taskmanager::index'));
    }

    public function tasks(Content $content)
    {
        return $content
            ->title('Tasks')
            ->description('Description')
            ->body(view('la-taskmanager::tasks'));
    }

    public function addTask(Content $content)
    {
      // $tasks = Task::on('app')->get();
      // $taskFields = TaskFields::on('app')->get();
      // $optional_fields = null;
      // foreach ($taskFields as $field) {
      //   $data = [
      //     'label' => $field->label
      //   ];
      //   $optional_fields .= view('la-taskmanager::fields.'.$field->type)->with('data',$data);
      //
      // }
      // dd($taskFields);
      return $content
      ->title('Add task')
      ->body(view('la-taskmanager::add-task')->with('optional_fields',$optional_fields));
    }

    public function calendar(Content $content)
    {
        return $content
            ->title('Calendar')
            ->description('Description')
            ->body(view('la-taskmanager::calendar'));
    }

    public function fieldsConfig(Content $content)
    {
        return $content
            ->title('Fields configuration')
            ->body(view('la-taskmanager::fields-config'));
    }

}
