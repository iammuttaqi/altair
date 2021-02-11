

 
flash message key : 

       Session::flash('message', 'This is a message!');
       Session::flash('warning', 'This is a waring message !');
       Session::flash('info', 'This is a info message !');
       Session::flash('danger', 'This is a danger message !');
       Session::flash('success', 'This is a success message !');
       Session::flash('alert', 'This is a alert message !');
       
       
 

....




@section('title')

@endsection 

@section('custom_header_top_css')
direct link only /external link only
@endsection 

@section('custom_header_js')
internal js ,external js
@endsection 
@section('custom_header_css')
internal css only
@endsection 


@section('content')
            
@endsection 

@section('custom_footer_js')
external link only ,            
@endsection 
 
 