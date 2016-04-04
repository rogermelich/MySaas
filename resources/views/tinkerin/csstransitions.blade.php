@extends('layouts.app')

@section('htmlheader_title')
    Css
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box box-success" style="display: none;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Removable</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        The body of the box
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
