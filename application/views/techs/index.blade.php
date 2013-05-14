@layout('layouts.whs')


@section('page_title')
WHS Staff Portal
@endsection

@section('content')

<section class="content-section"> 

  <h1>
    Techs Index
  </h1>

  <ul>
    <li>{{HTML::link('techs/copiers', 'Copier information')}}</li>
  </ul>

</section>


@endsection


@section('footer')
@parent
@endsection

@section('scripts')
@parent

@endsection
