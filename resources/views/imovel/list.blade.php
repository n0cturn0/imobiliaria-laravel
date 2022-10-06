@extends('layout.dashboard')
@section('imoveis-list')
<div class="container">
   
   
    <div class="table-custom-responsive">
      <table class="table-custom table-custom-primary">
        <thead>
          <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
            <th>Column 4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Item #1</td>
            <td>Description</td>
            <td>Subtotal</td>
            <td>$3.00</td>
          </tr>
          <tr>
            <td>Item #2</td>
            <td>Description</td>
            <td>Discount</td>
            <td>$3.00</td>
          </tr>
          <tr>
            <td>Item #3</td>
            <td>Description</td>
            <td>Shipping</td>
            <td>$3.00</td>
          </tr>
          <tr>
            <td>Item #4</td>
            <td>Description</td>
            <td>Tax</td>
            <td>$4.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td>All Items</td>
            <td>Description</td>
            <td>Your Total</td>
            <td>$13.00</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection


