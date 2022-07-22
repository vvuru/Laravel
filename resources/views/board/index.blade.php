<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>board index</h1>
    <div>dddd</div>
    <div>
        <a href="<?= route('boards.create') ?>">
            <button type="button">글쓰기</button>
        </a>

        <a href="<?= route('boards.show', ['i_board' => 10]) ?>">
            <button type="button">디테일</button>
        </a>
    </div>
    <div>
        <table>
            <tr>
                <th>No.</th>
                <th>제목</th>
                <th>조회수</th>
                <th>등록일</th>
            </tr>
            @foreach($list as $item)
            <tr class="row" data-id="{{$item->id}}">
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->hits}}</td>
                <td>{{$item->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>    
    const rowList=document.querySelectorAll('.row');
    if(rowList) {
        rowList.forEach(item => {
            item.addEventListener('click', e => {
                location.href = `/boards/show?id=${item.dataset.id}`;
            });
        })
    }
    </script>
</body>

</html>