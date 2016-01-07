@extends('master')

@section('title') Tools | Browse @endsection

@section('css')
{!! HTML::style('global/plugins/jstree/dist/themes/default/style.css') !!}
{!! HTML::style('global/plugins/datatables/datatables.min.css') !!}
{!! HTML::style('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
@endsection

@section('js')
{!! HTML::script('global/scripts/datatable.js') !!}
{!! HTML::script('global/plugins/datatables/datatables.js') !!}
{!! HTML::script('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! HTML::script('global/plugins/datatables/plugins/jquery.dataTables.columnFilter.js') !!}
@endsection

@section('script')
<script>
jQuery(document).ready(function() { 

$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

var toolUrl = "{!!url('tool')!!}";
var table = $('#table1');
  table.dataTable({
         "bProcessing": true,
         "serverSide": true,
         "bFilter": true,

         "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"] // change per page values here
            ],
         "pageLength": 10,
         "ajax":{
            url :"{!!url('admin/data/tools/db')!!}", // json datasource
            type: "post",
            error: function(xhr, textStatus, error){  // error handling code
              console.log(textStatus + ": " + error);
             // $(".employee-grid-error").html("");
              //$("#employee_grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
              //$("#employee_grid_processing").css("display","none");
            }
        },

        "columns": [
                { "visible" : false},
                null,
                null,
                { "visible" : false},
                null,
                null,
                {"data": null, "defaultContent": "", "width" : "1%"}
            ],

        "createdRow": function ( row, data, index ){ 
            var td = $('td', row);
            
            td.eq(0).html('<a href="'+toolUrl+'/'+data[0]+'/view">'+data[1]+'</a>');
            
            td.eq(4).html('<div class="btn-group btn-group-xs btn-group-solid">'+
                '<a href="'+toolUrl+'/'+data[0]+'/edit" class="btn blue">Edit</a></div>');
        }

        });   


    $('#category-menu a').click( function() { 

        var cat = $(this).closest('li').attr('id').split('-');
        console.log(cat[1]);
        table.fnFilter(cat[1],2);
        table.fnDraw();     
    });


});

$(window).load(function() {

$('div.dataTables_filter > label').children('input').appendTo('#dataTables_filter').removeClass('input-inline input-sm input-small').addClass("form-control");
$('div.dataTables_length > label').children('select').appendTo('#dataTables_length').removeClass('input-inline input-sm input-xsmall').addClass("form-control");
$('div.dataTables_length').remove();
$('div.dataTables_filter').remove();
});

</script>
@endsection

@section('content')


<div class="page-bar">        
<div class="row padding-10">
    <div class="col-md-3">

        

    </div>
    <div class="col-md-5">

        <div class="input-group input-medium" id="dataTables_filter">
        <span class="input-group-addon">
        <i class="icon-magnifier"></i>
        </span>
        </div>

    </div>
    <div class="col-md-4">

        <div class="input-group input-small" id="dataTables_length">
        <span class="input-group-addon">
        <i class="icon-list"></i>
        </span>
        </div>

    </div>
</div>
</div>



<div class="row">
    <div class="col-lg-2 p-t-20">
<div class="accordion navbar-collapse collapse" style="width:100%">


{!! $accordion !!}

</div>
</div>



    <div class="col-md-10">

<div class="table-container p-t-20">

        <table class="table table-striped table-bordered table-advance table-hover" id="table1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>
                       Id
                    </th>
                    <th>
                        Tool Serialnr
                    </th>
                    <th>
                        Barcode
                    </th>
                    <th>
                        Category Id
                    </th>
                    <th>
                        Category Name
                    </th>
                    <th>
                        Supplier
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            
        </table>
    </div>
</div>


</div>
    @endsection