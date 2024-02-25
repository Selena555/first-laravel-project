<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/style-post.css')}}">
</head>
<body>
<div class="container">
    <div class="form">
        <h1 class="form-title">Создание поста</h1>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-string">
                <label>
                    <span>Название</span>
                    <input type="text" name="name" placeholder="Название поста" required>
                </label>
            </div>
            <div class="form-string">
                <label>
                    <span>Описание</span>
                    <input type="text" name="description" placeholder="Описание поста">
                </label>
            </div>
            <div class="form-string">
                <label>
                    <span>Содержимое</span>
                    <textarea style="max-width: 100%; min-width: 100%; width: 60vw; height: 158px;
                     margin-bottom: 35px;" name="content" id="content"
                              cols="30" rows="10" required></textarea>
                </label>
            </div>
            <div class="form-string">
                <label>
                    <span>Постер</span>
                    <input type="file" name="poster" id="poster" required>
                </label>
            </div>
            <div class="form-string">
                <label>
                    <span>Категория</span>
                    <select name="category_ids" id="category_ids" multiple>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <button class="form-btn" type="submit">
                <span>Сохранить</span>
            </button>
        </form>
    </div>
</div>
</body>

</html>
