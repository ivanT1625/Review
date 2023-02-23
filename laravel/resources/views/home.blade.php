@extends('layout')
@section('title')Главная страница@endsection
@section('main_content')

{{--    <p>--}}
{{--        Taking into account the current international situation,--}}
{{--        a deep level of immersion unambiguously fixes the need--}}
{{--        for directions for progressive development. As is commonly--}}
{{--        believed, some features of domestic policy, initiated exclusively--}}
{{--        synthetically, are considered exclusively in the context of marketing--}}
{{--        and financial prerequisites. Thus, consultation with a broad asset largely--}}
{{--        determines the importance of rethinking foreign economic policies. Banal but--}}
{{--        irrefutable conclusions, as well as key features of the project structure,--}}
{{--        are nothing but the quintessence of the victory of marketing over reason--}}
{{--        and must be called to account. But a semantic analysis of external counteractions--}}
{{--        allows us to assess the significance of the system of mass participation.--}}
{{--    </p>--}}

    <main role="main">
        <div class="jumbotron bg-warning p-5 rounded mb-5">
            <div class="container">
                <h1 class="disaplay-3">Главная страница!</h1>
                <p> Taking into account the current international situation,
                    a deep level of immersion unambiguously fixes the need
                    for directions for progressive development.
                </p>
                <p><a class="btn btn-danger btn-lg" href="/review" role="button">Отзывы</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>
                        As is commonly
                        believed, some features of domestic policy, initiated exclusively
                        synthetically, are considered exclusively in the context of marketing
                        and financial prerequisites.
                    </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View detailds</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>
                        As is commonly
                        believed, some features of domestic policy, initiated exclusively
                        synthetically, are considered exclusively in the context of marketing
                        and financial prerequisites.
                    </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View detailds</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>
                        As is commonly
                        believed, some features of domestic policy, initiated exclusively
                        synthetically, are considered exclusively in the context of marketing
                        and financial prerequisites.
                    </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View detailds</a></p>
                </div>
            </div>
        </div>
    </main>
    {{--<h1>Привет</h1>--}}
@endsection
