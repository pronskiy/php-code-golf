Add new task to `tasks_php_new` folder.
Each tasks is provided in two files: 
* %TaskName%.%ext% – this is what user is given
* %TaskName%_.%ext% – this is what user needs to achieve

Inside of initial file you may use empty comment as a caret marker `/*caret*/`

Add you task meta description to `phpTasks.json`.

And then run `php update_php_tasks.php` -> you'll get resulting tasks file at `phpTasks_.json`. 
