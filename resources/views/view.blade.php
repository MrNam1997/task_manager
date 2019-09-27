<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2 style='text-align: center'>TASK MANAGER</h2>
<div class="container">
    <div col="12">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Option</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>

                <button style="background-color: pink"><a href={{route('task_manager.create')}}>create</a></button>
                <td>
                    <button><a href={{route('task_manager.edit')}}>Edit</a></button>
                    |
                    <button style="background: #8dff2f"><a href={{route('task_manager.show')}}>Show</a></button>
                    |
                    <button style="background: rgba(255,136,18,0.64)"><a href={{route('task_manager.delete')}}>Delete</a></button>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>
                    <button><a href={{route('task_manager.edit')}}>Edit</a></button>
                    |
                    <button style="background: #8dff2f"><a href={{route('task_manager.show')}}>Show</a></button>
                    |
                    <button style="background: rgba(255,136,18,0.64)"><a href={{route('task_manager.delete')}}>Delete</a></button>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>
                    <button ><a href={{route('task_manager.edit')}}>Edit</a></button>
                    |
                    <button style="background: #8dff2f"><a href={{route('task_manager.show')}}>Show</a></button>
                    |
                    <button style="background: rgba(255,136,18,0.64)"   ><a href={{route('task_manager.delete')}}>Delete</a></button>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</body>
</html>
