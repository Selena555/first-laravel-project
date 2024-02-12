<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <div class="login-box">
        <h1 class="title">Создание категории</h1>
        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="user-box">
                <label>
                    <span>Название</span>
                    <input type="text" name="name" placeholder="Название поста" required/>
                </label>
            </div>
            <div class="user-box">
                <label>
                    <span>Постер</span>
                    <input type="file" name="poster" id="poster" required/>
                </label>
            </div>

            <button class="btn" type="submit">
                <span>Сохранить</span>
            </button>
        </form>
    </div>
</div>
</body>

</html>







