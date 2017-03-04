@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                <table class="table-bordered" width="500">


                    @php
                        foreach ($results as $result){
                        echo '<tr>';

                        echo '<td>'.$result->fname.'</td>';
                        echo '<td>'.$result->lname.'</td>';
                        echo '<td>'.$result->tel.'</td>';
                        echo '<td>'.$result->gender.'</td>';
                        echo '<td><input type="button" class="btn btn-warning" value="Edit"><input  class="btn btn-danger" type="button" value="Delete"></td>';
                        echo '</tr>';
                        }
                    @endphp

                </table>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
