@extends('layout.main')

@section('container')
@include('component.detail.product')
@endsection

@push('script')
<script>
  let qty = document.getElementById("qty");
  const plus = () => (qty.innerHTML = parseInt(qty.innerHTML) + 1);
  const min = () => {
    qty.innerHTML = parseInt(qty.innerHTML) - 1;
    if (parseInt(qty.innerHTML) < 1) {
        qty.innerHTML = 1;
    }
};

</script>
@endpush