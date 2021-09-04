@extends('layout.master')

@section('css')
    <style>
        .sidebar {
            height: 90vh;
        }

        .main-section {
            height: 90vh;
        }

        .sidebar-menu-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .sidebar-menu-list li {
            padding: 10px 20px;
        }

        .sidebar-menu-list li {
            border-bottom: 2px solid;
            cursor: pointer;
        }

    </style>
@endsection

@section('title')
    Admin Dashboard
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 sidebar">
                <ul class="sidebar-menu-list">
                    <li class="sidebar-menu-item">
                        Subject
                    </li>
                    <li class="sidebar-menu-item">
                        Chapter
                    </li>
                    <li class="sidebar-menu-item">
                        Question
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 main-section">
                <div class="row">
                    <div class="col-lg-6">
                        @include('includes.subject')
                    </div>
                    <div class="col-lg-6">
                        @include('includes.chapter')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
