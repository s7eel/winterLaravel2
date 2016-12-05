<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

    <body>
        
        <div class="panel-body">
        <table class="table table-striped task-table">

          <!-- Заголовок таблицы -->
          <thead>
            <th>Список</th>
            <th>&nbsp;</th>
          </thead>

          <!-- Тело таблицы -->
          <tbody>
            @foreach ($tasks as $task)
              <tr>
                <!-- Имя задачи -->
                <td class="table-text">
                    <div><a href="/news/{{$task->id }}">{{ $task->name }}</a></div>
                </td>
                <td>
                    <div>{{ $task->description }}</div>
                </td>
                 <td>
                    <div>{{ $task->created_at }}</div>
                </td>

                <td>
                  <!-- TODO: Кнопка Удалить -->
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
    </body>
    
</html>
