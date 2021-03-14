@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            ID
                        </th>
                        <th>
                            Категория
                        </th>
                        <th>
                            Название блога
                        </th>
                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>
                                {{$blog['id']}}
                            </td>
                            <td>
                                {{$blog->category->title}}
                            </td>
                            <td>
                                {{$blog['title']}}
                            </td>
                            <td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('show', $blog['id'])}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Посмотреть
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
