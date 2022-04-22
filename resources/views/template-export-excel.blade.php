<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Details</th>
                <th>Quanity</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>            
              <td> {{$product->id}} </td>
              <td> {{$product->name}}</td>
              <td>  {{$product->slug}}</td>
              <td>  {{$product->description}}</td>
              <td> {{$product->details}}</td>
              <td>  {{$product->quanity}}</td>
              <td>  {{$product->created_at}}</td>
              <td>  {{$product->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
