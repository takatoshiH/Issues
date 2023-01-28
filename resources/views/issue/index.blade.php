<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>HTMLの書き方</title>
</head>
<body>
<h1>課題</h1>
<h2>課題の新規登録</h2>
<div>
    <a href="{{ route('issues.create') }}">新規登録</a>
</div>
@empty($issue)
    <p>登録された課題はありません</p>
@endempty
@foreach ($issues as $issue)
    <p>{{ $issue->title }}</p>
@endforeach
</body>
</html>
