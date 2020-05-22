<header class="el-heading {{$items['position'] ?? null}} {{$items['className'] ?? null }}">

    <h1>{{$items['h1'] ?? null }}</h1>

    @isset($items['subTitle'])
        <p class="subtitle">{{$items['subTitle'] ?? null}}</p>
    @endif

    @isset($items['title'])
        <h2>
            @isset($items['label'])
                <span class="display-block fw-100">{{$items['label'] }}</span>
            @endisset
            {{$items['title']}}
        </h2>
    @endisset

    @isset($items['description'])
        <p>{{$items['description']}}</p>
    @endisset
</header>
