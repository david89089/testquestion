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
                                    <a class="btn btn-info btn-sm" href="{{route('home')}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Назад
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>
                                {!! $blog['text'] !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
