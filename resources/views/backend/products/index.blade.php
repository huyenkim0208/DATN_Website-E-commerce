@extends('layouts.admin')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Products
            </h6>
            <div class="ml-auto">
            <a class="font-weight-bold" href="{{route('export',['1','type'=>'xlsx','template'=>'template-export-excel'])}}">Export to Excel</a>
                @can('create_product')
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                        <span class="text">New product</span>
                    </a>
                @endcan
            </div>
        </div>

        @include('partials.backend.filter', ['model' => route('admin.products.index')])

        <div class="table-responsive">
       
        <button style="margin-bottom: 20px; display: none" class="btn btn-danger delete_all ml-4" data-url="{{ url('myproductsDeleteAll') }}">Delete</button>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="50px"><input type="checkbox" id="master"></th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Tags</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th class="text-center" style="width: 30px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr id="tr_{{$product->id}}">
                        <td><input type="checkbox" class="sub_chk" data-id="{{$product->id}}"></td>
                        <td>{{ $product->id }}</td>
                        <td>
                            @if($product->firstMedia)
                            <img src="{{ asset('storage/images/products/' . $product->firstMedia->file_name) }}"
                                 width="60" height="60" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('img/no-img.png') }}" width="60" height="60" alt="{{ $product->name }}">
                            @endif
                        </td>
                        <td><a href="{{ route('admin.products.show', $product->id) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->quantity }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td class="text-danger">{{ $product->tags->pluck('name')->join(', ') }}</td>
                        <td>{{ $product->category ? $product->category->name : NULL }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:void(0);"
                                   onclick="if (confirm('Are you sure to delete this record?'))
                                       {document.getElementById('delete-product-{{ $product->id }}').submit();} else {return false;}"
                                   class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                            <form action="{{ route('admin.products.destroy', $product) }}"
                                  method="POST"
                                  id="delete-product-{{ $product->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="10">No products found.</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="10">
                        <div class="float-right">
                            {!! $products->appends(request()->all())->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function () {
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
            $(".delete_all").fadeIn(0.5);
         } else {  
            $(".sub_chk").prop('checked',false);  
            $(".delete_all").fadeOut(0.5);
         }  
        });
        $(".sub_chk").click(function(e){
            if($(".sub_chk").is(':checked',true))  {
                $(".delete_all").fadeIn(0.5);
            } else {
                $(".delete_all").fadeOut(0.5);
            }
            
        });
        $('.delete_all').on('click', function(e) {
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  
            if(allVals.length <=0)  
            {  
                alert("Please select route!");  
            }  else {  
                var check = confirm("Are you sure delete this product?");  
                if(check == true){  
                    var join_selected_values = allVals.join(","); 
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['success']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });
        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();
            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });
            return false;
        });
    });
</script>    
@endsection
