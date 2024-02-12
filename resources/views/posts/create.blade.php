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
        <h1 class="title">Создание поста</h1>
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="user-box">
    <label>
        <span>Название</span>
        <input type="text" name="name" placeholder="Название поста" required>
    </label>
    </div>
    <div class="user-box">
    <label>
        <span>Описание</span>
        <input type="text" name="description" placeholder="Описание поста">
    </label>
    </div>
    <div class="user-box">
    <label>
        <span>Содержимое</span>
        <textarea style="width: 311px; height: 158px; margin-bottom: 35px;" name="content" id="content" cols="30" rows="10" required></textarea>
    </label>
    </div>
    <div class="user-box">
    <label>
        <span>Постер</span>
        <input type="file" name="poster" id="poster" required>
    </label>
    </div>
    <div class="user-box">
    <label>
        <span>Категория</span>
        <select name="category_ids" id="category_ids" multiple>
           @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
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
